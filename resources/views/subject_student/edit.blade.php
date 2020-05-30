@extends('layouts.admin')
@section('content')



<div class="row mt-4 justify-content-end">
    <a href="{{action('SubjectStudentController@show', $subject->id_subject)}}" class="btn btn-info btn-block" role="button">Atrás</a>
</div>

@endsection