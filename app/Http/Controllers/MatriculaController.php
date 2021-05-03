<?php

namespace App\Http\Controllers;

use App\Matricula;
use App\Aluno;
use App\Curso;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matriculas = Matricula::orderBy('data_admissao')->get();

        return view('matricula.index', [
            'matriculas' => $matriculas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alunos = Aluno::where(['ativo' => true])
            ->orderBy('nome')
            ->get();

        $cursos = Curso::orderBy('nome')
            ->get();

        return view('matricula.create', ['alunos' => $alunos, 'cursos' => $cursos]);
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
            'curso_id' => 'required|int',
            'aluno_id' => 'required|int',
        ]);

        Matricula::create([
            'curso_id' => $request->curso_id,
            'aluno_id' => $request->aluno_id,
            'ativo' => true,
        ]);
        
        return redirect('/matricula')->with('status', 'Matrícula criada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function show(Matricula $matricula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function edit(Matricula $matricula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matricula $matricula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matricula $matricula)
    {
        //
    }
}
