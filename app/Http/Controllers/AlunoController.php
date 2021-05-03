<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::orderBy('name')->get();
        return view('aluno.index', [
            'alunos' => $alunos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aluno.create');
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
            'email' => 'required|email|unique:alunos',
            'senha' => 'required',
        ]);

        Aluno::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Crypt::encryptString($request->senha)
        ]);

        return redirect('/aluno')->with('status', 'Aluno criado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('aluno.show', ['aluno' => $aluno]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('aluno.edit', ['aluno' => $aluno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|email|unique:alunos, email, '.$id,
        ]);

        $aluno = [
            'nome' => $request->nome,
            'email' => $request->email,
            'ativo' => $request->ativo ? true : false,
        ];

        
        if ($request->senha) {
            $aluno['senha'] = Crypt::encryptString($request->senha);
        }
        
        Aluno::whereId($id)->update($aluno);

        return redirect('/aluno/'.$id)->with('status', 'Aluno alterado!');
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
