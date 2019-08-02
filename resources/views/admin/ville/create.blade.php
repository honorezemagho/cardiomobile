@extends('adminlte::page');

@section('content')

    <h1 style="text-align: center">  Ajouter une Ville </h1>

    {!! Form::open(['method' =>'POST', 'action' => 'AdminVilleController@store']) !!}

    <div class = "form-group">
        {!! Form::label('name', 'Nom') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::Submit ('Créer', ['class' => 'btn btn-primary'] ) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')

@endsection
