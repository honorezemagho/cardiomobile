@extends('adminlte::page')
@include('home.header')
@section('content')
    <h1 style="text-align: center">  Ajouter une AMBULANCE </h1>

    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('dentalpro/js/jquery-2.2.4.min.js') }}"></script>

    {!! Form::open(['method' =>'POST', 'action' => 'AdminAmbulanceController@store']) !!}

    <div class = "form-group">
        {!! Form::label('name', 'Nom') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group mb-10 text-theme-colored">
        {!! Form::label('ville_id', 'Ville:') !!}
        {!! Form::select('ville_id', [null => 'Veuillez choisir votre Ville de résidence']
        + $villes , null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group mb-10 text-theme-colored">
        {!! Form::label('quartier_id', 'Quartier:') !!}
        <select name="quartier_id" class="form-control">
            <option value="" selected = "selected">Veuillez choisir un quartier</option>
        </select>
    </div>

    <div class = "form-group">
        {!! Form::label('hopital', 'Nom de la structure :') !!}
        {!! Form::select('hopital_id', [null => 'Veuillez choisir le Nom de la structure Hospitalière'] + $hopitaux , null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::label('phone', 'Téléphone:') !!}
        {!! Form::number('phone',  null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        <input type="hidden" value="{{$matricules}}" name="matricule">
    </div>

    <div class = "form-group">
        {!! Form::Submit ('Créer', ['class' => 'btn btn-primary'] ) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')

@endsection