@extends('layouts.admin')
@section('content')

<div class="row mt-3 mb-3 justify-content-start">
    <h3>Nuevo Curso</h3>
</div>

<div class="row">
    <form method="POST" action="{{ route('course.store') }}" >
        {{ csrf_field() }}

        <div class="form-group">
            <label for="nameInput">Nombre del curso</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre del curso">
        </div>

        <div class="form-row">
            <input type="submit"  value="Guardar" class="btn btn-success btn-block">
        </div>

        <div class="form-row mt-1">
            <a href="{{ route('course.index') }}" class="btn btn-info btn-block">Atrás</a>
        </div>
    </form>
</div>


@endsection