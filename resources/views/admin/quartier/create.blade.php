@extends('adminlte::page')

@include('home.header')

@section('content')
    <script src="{{ asset('js/dashboard2.js') }}"></script>
    <script src="{{ asset('dentalpro/js/jquery-2.2.4.min.js') }}"></script>

    <h1 style="text-align: center">  Ajouter un Quartier </h1>

    {!! Form::open(['method' =>'POST', 'action' => 'AdminQuartierController@store']) !!}

    <div class = "form-group">
        {!! Form::label('name', 'Nom') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::label('ville_id', 'Ville:') !!}
        {!! Form::select('ville_id', [null => 'Veuillez choisir une ville'] + $villes , null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group mb-10 text-theme-colored">
        {!! Form::label('arrondissement_id', 'Arrondissement:') !!}
        <select name="arrondissement_id" class="form-control">
            <option value="" selected = "selected">Veuillez choisir un arrondissement</option>
        </select>
    </div>

    <div class = "form-group">
        {!! Form::Submit ('Créer', ['class' => 'btn btn-primary'] ) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')

    @endsection
