@extends('layout.main')
@section('content')
    <div class="card mb-4 box-shadow">
        <div class="card-header">
            <h4 class="my-0 float-left font-weight-normal">Matriculas</h4>
            <a href="/matricula/novo"  class="btn btn-md btn-success">Nova matrícula</a>
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
                        <th scope="col">Aluno</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Data de início</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($matriculas as $mat)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mat->getNomeAluno($mat->aluno_id) }}</td>
                            <td>{{ $mat->getCursoNome($mat->curso_id) }}</td>
                            <td>{{ $mat->data_admissao->format('d/m/Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="alert alert-warning">Nenhum curso cadastrado</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop
