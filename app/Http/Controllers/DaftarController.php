<?php

namespace App\Http\Controllers;

use App\Filament\Resources\Daftars\DaftarResource;
use App\Models\Daftar;
use App\Models\Training;
use App\Models\Event;
use App\Models\User;
use App\Service\NotificationService;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use SweetAlert2\Laravel\Swal;

class DaftarController extends Controller
{
    protected $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
        $this->middleware('throttle:daftar')->only('store');
    }
    public function index(Request $request)
    {
        $training_id = $request->training_id;
        $event_id = $request->event_id;

        $training = Training::where('status', 1)->get();
        $events = Event::where('status_event', 1)->get();
        return view('pages.daftar.index', compact('training', 'events', 'training_id', 'event_id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function generateNoDaftar($id)
    {
        do {
            $noDaftar = date('y').strtoupper(Str::random(2)) .$id;
        } while (Daftar::where('no_daftar', $noDaftar)->exists());
        return $noDaftar;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'phone'       => 'required|string|max:20',
            'gender'      => 'required|in:Laki-laki,Perempuan',
            'provinsi'    => 'required|string|max:255',
            'kabkota'     => 'required|string|max:255',
            'kecamatan'   => 'required|string|max:255',
            'desa'        => 'required|string|max:255',
            'kodepos'     => 'nullable|string|max:10',
            'alamat_detail' => 'required|string|max:500',

            'training_id' => 'nullable|required_without:event_id|exists:tb_training,id',
            'event_id'    => 'nullable|required_without:training_id|exists:tb_event,id',
        ]);

        // Basic sanitization to mitigate XSS before persisting
        $data = $validated;
        $data['name'] = strip_tags($data['name']);
        $data['email'] = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
        $data['phone'] = preg_replace('/[^0-9+]/', '', $data['phone']);
        $data['provinsi'] = isset($data['provinsi']) ? strip_tags($data['provinsi']) : null;
        $data['kabkota'] = isset($data['kabkota']) ? strip_tags($data['kabkota']) : null;
        $data['kecamatan'] = isset($data['kecamatan']) ? strip_tags($data['kecamatan']) : null;
        $data['desa'] = isset($data['desa']) ? strip_tags($data['desa']) : null;
        $data['kodepos'] = isset($data['kodepos']) ? preg_replace('/[^0-9]/', '', $data['kodepos']) : null;
        $data['alamat_detail'] = isset($data['alamat_detail']) ? strip_tags($data['alamat_detail']) : null;

        // Generate registration number without populating legacy 'address' field
        $data['no_daftar'] = $this->generateNoDaftar($data['training_id'] ?? $data['event_id'] ?? null);

        $pendaftaran = Daftar::create($data);
        $noDaftar = $pendaftaran->no_daftar;

        Swal::fire([
            'icon'  => 'success',
            'title' => 'Pendaftaran Berhasil',
            'text'  => 'Tunggu konfirmasi melalui whatsapp. Admin akan menghubungi Anda untuk melakukan pembayaran dan langkah selanjutnya. Pastikan nomor whatsapp yang Anda masukkan aktif dan dapat dihubungi.',
        ]);

        // Kirim notifikasi ke admin
        $admins = User::role(['Admin', 'Superadmin'])->get();

        Notification::make()
            ->title('Pendaftaran Baru')
            ->body($pendaftaran->name . ' telah melakukan pendaftaran.')
            ->actions([
                Action::make('Lihat Pendaftaran')
                    ->url(DaftarResource::getUrl('edit', ['record' => $pendaftaran])),
            ])
            ->sendToDatabase($admins);

        $this->notificationService->sendEmail($pendaftaran);

        return redirect()->route('daftar.show', $noDaftar)
            ->with('success', 'Pendaftaran berhasil! Tunggu konfirmasi melalui whatsapp.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $no_daftar)
    {
        $daftar = Daftar::where('no_daftar', $no_daftar)->firstOrFail();

        return view('pages.daftar.show', compact('daftar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
