@extends('layout.main')
@section('content')
    <div class="card mb-4 box-shadow">
        <div class="card-header">
            <h4 class="my-0 text-left font-weight-normal">Editar curso</h4>
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
            <form action="/curso/{{ $curso->id }}" method="POST">
                @method('PUT')
                {!! csrf_field() !!}
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nome do curso</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome" value="{{ $curso->nome }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Data de início</label>
                    <div class="col-sm-10">
                        <input type="text" name="data_inicio" class="form-control" id="datepicker" placeholder="Data de início" value="{{ $curso->data_inicio->format('d/m/Y') }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-md btn-block btn-primary">Salvar</button>
                    <a href="/curso" class="btn btn-md btn-block btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@stop