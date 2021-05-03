@extends('layout.main')
@section('content')
    <div class="card mb-4 box-shadow">
        <div class="card-header">
            <h4 class="my-0 text-left font-weight-normal">Novo aluno</h4>
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
            <form action="/aluno" method="post">
                {!! csrf_field() !!}
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                    <input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                    <input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Senha" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-md btn-block btn-primary">Salvar</button>
            </form>
        </div>
    </div>
@stop