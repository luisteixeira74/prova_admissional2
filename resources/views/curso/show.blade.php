@extends('layout.main')
@section('content')
    <div class="card mb-4 box-shadow">
        <div class="card-header">
            <h4 class="my-0 text-left font-weight-normal">Ver curso</h4>
        </div>
        <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nome do curso</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" class="form-control" id="inputEmail3" disabled value="{{ $curso->nome }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail3" disabled value="{{ $curso->data_inicio->format('d/m/Y') }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <a href="/curso/{{ $curso->id }}/editar" class="mr-4 btn btn-md btn-primary">Editar</a>
                    <a href="/curso" class="btn btn-md btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@stop