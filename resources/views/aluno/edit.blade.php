@extends('layout.main')
@section('content')
    <div class="card mb-4 box-shadow">
        <div class="card-header">
            <h4 class="my-0 text-left font-weight-normal">Editar aluno</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="/aluno/{{ $aluno->id }}">
                @method('PUT')
                {!! csrf_field() !!}
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome" value="{{ $aluno->nome }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{ $aluno->email }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                        <input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Senha" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Opção</label>
                    <div class="form-check ml-3">
                        <input class="form-check-input" name="ativo" type="checkbox" @if ((int) $aluno->ativo === 1) {!! 'checked="checked"' !!} @endif id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Ativo
                            <span class="ml-3 text-muted">Se inativo, não mostra nas matriculas</span>
                        </label>
                    </div>
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-md btn-block btn-primary">Salvar</button>
                    <a href="/aluno" class="btn btn-md btn-block btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@stop