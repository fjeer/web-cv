<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Training;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        Carbon::setLocale('id');

        $query = Training::with('kursus');

        // Filter search
        if ($request->search) {
            $query->whereHas('kursus', function ($q) use ($request) {
                $q->where('nama_kursus', 'like', '%' . $request->search . '%');
            });
        }

        // Filter status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter kelas
        if ($request->filled('kelas')) {
            $query->whereHas('kursus', function ($q) use ($request) {
                $q->where('id_kelas', $request->kelas);
            });
        }

        $training = $query->paginate(10)->withQueryString();
        $kelas = Kelas::all();

        // Jika request AJAX, kembalikan JSON
        if ($request->ajax()) {
            $view = view('pages.kursus.partials.table', compact('training'))->render();

            return response()->json([
                'html' => $view,
                'pagination' => $training->links()->toHtml()
            ]);
        }

        return view('pages.kursus.jadwal', compact('training', 'kelas'));
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
        //
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
