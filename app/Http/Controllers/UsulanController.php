<?php

namespace App\Http\Controllers;

use App\Models\Usulan;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreUsulanRequest;
use App\Http\Requests\UpdateUsulanRequest;

class UsulanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function kirim($id)
    {
        $usulan = Usulan::findOrFail($id);

        // Ubah status menjadi submitted
        $usulan->status = 'submitted';
        $usulan->save();

        return redirect()->route('usulan.index')->with('success', 'Usulan berhasil dikirim.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = Usulan::get(); // Select the fields you want

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', 'action')
                ->rawColumns(['action'])
                ->toJson();
        }

        return abort(404);
    }

    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsulanRequest $request)
    {
        $request->validate([
            'nip' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'tingkatan' => 'required|string|max:255',
            'periode' => 'required|string|max:255',
            'pengantar' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'drh' => 'nullable|file|mimes:pdf,|max:2048',
            'pernyataan' => 'nullable|file|mimes:pdf,|max:2048',
            'cpns' => 'nullable|file|mimes:pdf,|max:2048',
            'pns' => 'nullable|file|mimes:pdf,|max:2048',
            'skkp' => 'nullable|file|mimes:pdf,|max:2048',
            'piagam' => 'nullable|file|mimes:pdf,|max:2048',
        ]);

        $usulan = new Usulan();
        $usulan->nip = $request->nip;
        $usulan->nama = $request->nama;
        $usulan->tingkatan = $request->tingkatan;
        $usulan->periode = $request->periode;
        $usulan->pengantar = $request->pengantar;
        $usulan->tanggal = $request->tanggal;

        // Handle file uploads
        $usulan->drh = $request->file('drh')->store('uploads/drh'); // Store in `storage/app/uploads/drh`
        $usulan->pernyataan = $request->file('pernyataan')->store('uploads/pernyataan');
        $usulan->cpns = $request->file('cpns')->store('uploads/cpns');
        $usulan->pns = $request->file('pns')->store('uploads/pns');
        $usulan->skkp = $request->file('skkp')->store('uploads/skkp');
        $usulan->piagam = $request->file('piagam') ? $request->file('piagam')->store('uploads/piagam') : null;

        $usulan->save();

        return redirect()->route('usulan.index')->with('success', 'Usulan berhasil dikirim.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usulan $usulan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usulan $usulan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsulanRequest $request, Usulan $usulan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usulan $usulan)
    {
        //
    }
}
