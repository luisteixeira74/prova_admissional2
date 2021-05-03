@extends('layout.main')
@section('content')
    <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 float-left font-weight-normal">Alunos</h4>
                <a href="/aluno/novo"  class="btn btn-md btn-success">Novo aluno</a>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($alunos as $aluno)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $aluno->nome }}</td>
                            <td>{{ $aluno->email }}</td>
                            <td colspan="2">
                                <a href="/aluno/{{ $aluno->id }}" class="mr-4 btn btn-sm btn-primary">Ver</a>
                                <a href="/aluno/{{ $aluno->id }}/editar" class="btn btn-sm btn-primary">Editar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="alert alert-warning">Nenhum aluno cadastrado</td>
                        </tr>
                    @endforelse
                </table>
            
            </div>
        </div>
@stop
