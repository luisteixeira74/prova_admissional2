@extends('layout.main')
@section('content')
    <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 float-left font-weight-normal">Cursos</h4>
                <a href="/curso/novo"  class="btn btn-md btn-success">Novo curso</a>
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
                        <th scope="col">Curso</th>
                        <th scope="col">Data de início</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cursos as $curso)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $curso->nome }}</td>
                            <td>{{ $curso->data_inicio->format('d/m/Y') }}</td>
                            <td colspan="2">
                                <a href="/curso/{{ $curso->id }}" class="mr-4 btn btn-sm btn-primary">Ver</a>
                                <a href="/curso/{{ $curso->id }}/editar" class="btn btn-sm btn-primary">Editar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="alert alert-warning">Nenhum curso cadastrado</td>
                        </tr>
                    @endforelse
                </table>
            
            </div>
        </div>
@stop
