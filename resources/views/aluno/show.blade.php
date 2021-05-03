@extends('layout.main')
@section('content')
    <div class="card mb-4 box-shadow">
        <div class="card-header">
            <h4 class="my-0 text-left font-weight-normal">Ver aluno</h4>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" name="nome" class="form-control" id="inputEmail3" disabled placeholder="Nome" value="{{ $aluno->nome }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" disabled placeholder="Email" value="{{ $aluno->email }}" required>
                </div>
            </div>
            <div class="form-group">
                <a href="/aluno/{{ $aluno->id }}/editar" class="mr-4 btn btn-md btn-primary">Editar</a>
                <a href="/aluno" class="btn btn-md btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
@stop