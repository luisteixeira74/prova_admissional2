@extends('layout.main')
@section('content')
    <div class="card mb-4 box-shadow">
        <div class="card-header">
            <h4 class="my-0 text-left font-weight-normal">Nova matrícula</h4>
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
            <form action="/matricula" method="post">
                {!! csrf_field() !!}
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Aluno</label>
                    <div class="col-sm-10">
                        <select name="aluno_id" class="form-control form-control-sm">
                            @foreach ($alunos as $aluno)
                                <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
                            @endforeach
                            <option>selecione aluno</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Curso</label>
                    <div class="col-sm-10">
                        <select name="curso_id" class="form-control form-control-sm">
                            @foreach ($cursos as $curso)
                                <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                            @endforeach
                            <option>selecione curso</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-md btn-block btn-primary">Salvar</button>
            </form>
        </div>
    </div>
@stop