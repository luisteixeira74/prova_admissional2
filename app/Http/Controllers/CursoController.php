<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::orderBy('name')->get();
        return view('curso.index', [
            'cursos' => $cursos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'data_inicio' => 'required',
        ]);

        Curso::create([
            'nome' => $request->nome,
            'data_inicio' => Carbon::createFromFormat('d/m/Y', $request->data_inicio),
        ]);

        return redirect('/curso')->with('status', 'Curso criado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        return view('curso.show', ['curso' => $curso]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('curso.edit', ['curso' => $curso]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'data_inicio' => 'required',
        ]);

        $curso = [
            'nome' => $request->nome,
            'data_inicio' => Carbon::createFromFormat('d/m/Y', $request->data_inicio),
        ];

        Curso::whereId($id)->update($curso);

        return redirect('/curso/'.$id)->with('status', 'Curso alterado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        //
    }
}
