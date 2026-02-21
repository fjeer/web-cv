<?php

namespace App\Http\Controllers;

use App\Filament\Resources\Daftars\DaftarResource;
use App\Models\Daftar;
use App\Models\Training;
use App\Models\Event;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;
use Str;
use SweetAlert2\Laravel\Swal;

class DaftarController extends Controller
{
    
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
            $noDaftar = date('y') .strtoupper(Str::random(2)) .$id;
        } while (Daftar::where('no_daftar', $noDaftar)->exists());
        return $noDaftar;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required',

            'training_id' => 'nullable|required_without:event_id',
            'event_id' => 'nullable|required_without:training_id',
        ]);
        $request['no_daftar'] = $this->generateNoDaftar($request->training_id ?? $request->event_id);
    
        $pendaftaran = Daftar::create($request->all());
        $noDaftar = $pendaftaran->no_daftar;
        Swal::fire([
            'icon' => 'success',
            'title' => 'Pendaftaran Berhasil',
            'text' => 'Tunggu konfirmasi melalui whatsapp. Admin akan menghubungi Anda untuk melakukan pembayaran dan langkah selanjutnya. Pastikan nomor whatsapp yang Anda masukkan aktif dan dapat dihubungi.',
        ]);

        // kirim notifikasi
        $admins = User::where('role_id', '1')->get();
        
        Notification::make()
            ->title('Pendaftaran Baru')
            ->body($pendaftaran->name . ' telah melakukan pendaftaran.')
            ->actions([
                Action::make('Lihat Pendaftaran')
                    ->url(DaftarResource::getUrl('index')),
            ])
            ->sendToDatabase($admins);

        // 1. Logika untuk menentukan Jenis dan Detail (Menangani jika daftar keduanya)
        $jenis = [];
        $detail = [];

        if ($pendaftaran->training_id) {
            $jenis[] = 'Kursus';
            $detail[] = $pendaftaran->training->kursus->nama_kursus;
        }

        if ($pendaftaran->event_id) {
            $jenis[] = 'Event';
            $detail[] = $pendaftaran->event->title;
        }

        $jenisDaftar = implode(' & ', $jenis);
        $detailDaftar = implode(', ', $detail);

        // 2. Eksekusi Kirim Pesan via Fonnte
        Http::withHeaders([
            'Authorization' => 'cxLaQWPAGTRtqZVreuTz'
        ])->asForm()->post('https://api.fonnte.com/send', [
                    'target' => '6285138777851',
                    'message' => "🔔 *NOTIFIKASI PENDAFTARAN BARU*\n\n" .
                        "Halo Admin, ada pendaftar baru dengan detail sebagai berikut:\n\n" .
                        "🆔 *No. Daftar:* " . $noDaftar . "\n" .
                        "👤 *Nama:* " . $pendaftaran->name . "\n" .
                        "📧 *Email:* " . $pendaftaran->email . "\n" .
                        "📱 *No. WA:* " . $pendaftaran->phone . "\n" .
                        "📝 *Jenis:* " . $jenisDaftar . "\n" .
                        "📚 *Detail:* " . $detailDaftar . "\n\n" .
                        "Silakan segera lakukan pengecekan dan validasi pembayaran di *Dashboard Admin*.\n\n" .
                        "Link: http://127.0.0.1:8000/admin"
                ]);

        return redirect()->route('daftar.show', $noDaftar)->with('success', 'Pendaftaran berhasil! Tunggu konfirmasi melalui whatsapp. Admin akan menghubungi Anda untuk melakukan pembayaran dan langkah selanjutnya. Pastikan nomor whatsapp yang Anda masukkan aktif dan dapat dihubungi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $no_daftar)
    {
        $daftar = Daftar::where('no_daftar', $no_daftar)->first();

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
