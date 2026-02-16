<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\Event;
use Illuminate\Http\Request;

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

        // Daftar::create($request->all());
        return redirect()->route('daftar.index')->with('success', 'Pendaftaran berhasil! Tunggu konfirmasi melalui whatsapp. Admin akan menghubungi Anda untuk melakukan pembayaran dan langkah selanjutnya. Pastikan nomor whatsapp yang Anda masukkan aktif dan dapat dihubungi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
