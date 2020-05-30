@extends('layouts.admin')
@section('content')

<div class="row mt-3 mb-3 justify-content-start">
    <h3>Actualizar Examen</h3>
</div>

<div class="row">
    <form method="POST" action="{{ route('exam.update', $exam->id_exam) }}" >
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PATCH">

        <div class="form-group">
            <label for="nameInput">Nombre del Examen</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre del Examen" value="{{$exam->name}}">
        </div>

        <div class="form-group">
            <label for="nameInput">Nota</label>
            <input type="number" name="note" step="any" id="note" min="0" max="10" class="form-control" placeholder="Nota del Examen" value="{{$exam->note}}">
        </div>

        <div class="form-row">
            <input type="submit"  value="Actualizar" class="btn btn-success btn-block">
        </div>

        <input type="hidden" name="id_subject_student" value="{{$id_subject_student}}">

        <div class="form-row mt-1">
            <a href="{{ action('SubjectStudentController@data', [$id_subject_student]) }}" class="btn btn-info btn-block">Atrás</a>
        </div>
    </form>
</div>


@endsection