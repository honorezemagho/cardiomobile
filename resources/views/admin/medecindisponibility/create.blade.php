@extends('adminlte::page');
@section('content')
    <h1 style="text-align: center">  Ajouter une disponibilité </h1>
    <!-- CSS | Theme Color -->
    <link href="{{ asset('dentalpro/css/colors/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('datepicker/css/tail.datetime-default-blue.css') }}">

    {!! Form::open(['method' =>'POST', 'action' => 'MedecinDisponibilityController@store']) !!}

    <div class = "form-group">
        {!! Form::label('datetime', 'Date et Heure') !!}
        {!! Form::text('datetime', null, ['class' => 'form-control', 'id' => 'datetimeDemo', 'placeholder' => 'Cliquez ici pour choisir']) !!}
    </div>


    @can('is_admin')
    <div class = "form-group">
        {!! Form::label('medecin_id', 'Id du Médécin:') !!}
        {!! Form::number('medecin_id',  null, ['class' => 'form-control']) !!}
    </div>
    @endcan

    @can('is_gestionnaire')
        <div class = "form-group">
            {!! Form::label('medecin_id', 'Id du Médécin:') !!}
            {!! Form::number('medecin_id',  null, ['class' => 'form-control']) !!}
        </div>
    @endcan

    @can('is_medecin')
        <div class = "form-group">
            <input type="hidden" value="{{Auth::user()->id}}" name="medecin_id">
        </div>
    @endcan


    <div class = "form-group">
        {!! Form::Submit ('Ajouter', ['class' => 'btn btn-primary'] ) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')

    <script src="{{ asset('datepicker/js/tail.datetime-full.min.js') }}"></script>
    <script src="{{ asset('datepicker/js/tail.datetime.js') }}"></script>
    <script>
        tail.DateTime("#datetimeDemo", {
            static: "#datetime-demo-holder",
            classNames: "theme-default",
            startOpen: false,
            stayOpen: false,
            dateFormat: 'dd-mm-YYYY',
            locale: "fr",
            closeButton: true,
            position : 'top',
            dateBlacklist: true,
            timeFormat: "HH:ii",
            dateStart: new Date(),
            tooltips: [
            {
            date: "2020-01-01",
            text: "New Year",
            color: "#ff0000"
            }
                ]
        });


    </script>

@endsection
