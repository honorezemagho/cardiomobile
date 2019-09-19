@extends('adminlte::page')
@can('is_admin')
@section('content')

    <h1 style="text-align: center">  Ajouter une Spécialité </h1>

    {!! Form::open(['method' =>'POST', 'action' => 'SpecialityController@store']) !!}

    <div class = "form-group">
        {!! Form::label('Spécialité', 'speciality') !!}
        {!! Form::text('speciality', null, ['class' => 'form-control']) !!}
    </div>


    <div class = "form-group">
        {!! Form::Submit ('Ajouter une Spécialité', ['class' => 'btn btn-primary'] ) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')
@endsection
@endcan