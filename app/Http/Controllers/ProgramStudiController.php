<?php

namespace App\Http\Controllers;

use App\Models\fakultas;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    public function index()
    {
        $prodi = ProgramStudi::with('fakultas')->get();
        return view('program_studi.index', compact('prodi'));
    }

    public function create()
    {
        $fakultas = fakultas::all();
        return view('program_studi.create', compact('fakultas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_prodi' => 'required|integer',
            'nama_prodi' => 'required|string',
            'kode_fakultas' => 'required|integer',
        ]);

        ProgramStudi::create($request->all());

        return redirect()->route('program-studi.index')->with('success', 'Program Studi created successfully.');
    }

    public function edit(ProgramStudi $programStudi)
    {
        $fakultas = Fakultas::all();
        return view('program_studi.edit', compact('programStudi', 'fakultas'));
    }

    public function update(Request $request, ProgramStudi $programStudi)
    {
        $request->validate([
            'kode_prodi' => 'required|integer',
            'nama_prodi' => 'required|string',
            'kode_fakultas' => 'required|integer',
        ]);

        $programStudi->update($request->all());

        return redirect()->route('program-studi.index')->with('success', 'Program Studi updated successfully.');
    }

    public function destroy(ProgramStudi $programStudi)
    {
        $programStudi->delete();

        return redirect()->route('program-studi.index')->with('success', 'Program Studi deleted successfully.');
    }
}
