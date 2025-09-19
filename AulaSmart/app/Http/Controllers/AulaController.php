<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function index()
    {
        $aulas = Aula::all();
        return view('aulas.index', compact('aulas'));
    }

    public function create()
    {
        return view('aulas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'capacidad' => 'required|integer',
            'ubicacion' => 'required|string|max:255',
        ]);

        Aula::create($request->all());

        return redirect()->route('aulas.index')->with('success', 'Aula creada con éxito.');
    }

    public function show(Aula $aula)
    {
        return view('aulas.show', compact('aula'));
    }

    public function edit(Aula $aula)
    {
        return view('aulas.edit', compact('aula'));
    }

    public function update(Request $request, Aula $aula)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'capacidad' => 'required|integer',
            'ubicacion' => 'required|string|max:255',
        ]);

        $aula->update($request->all());

        return redirect()->route('aulas.index')->with('success', 'Aula actualizada con éxito.');
    }

    public function destroy(Aula $aula)
    {
        $aula->delete();
        return redirect()->route('aulas.index')->with('success', 'Aula eliminada con éxito.');
    }
}
