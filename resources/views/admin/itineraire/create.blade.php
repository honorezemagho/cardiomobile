@include('home.head')
@extends('adminlte::page')
@section('content')

<h2 class="text-center"><span class="text-theme-colored text-center align-content-center" style="text-align: center">Définir votre itinéraire </span></h2>
<script src="{{asset('js/custom2.js')}}"></script>
<div class="container col-sm-12">
    <div class="row equal-height">
        <div class="col-sm-6 align-center ">
            {!! Form::open(['method' =>'POST', 'action' => 'AdminItineraireController@store']) !!}

            <div class = "form-group align-center">
                {!! Form::label('name', 'Nom') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>



            <div class = "form-group col-sm-6"> <h1> Départ </h1>
                <div class = "form-group align-center">
                    {!! Form::label('ville_id_start', 'Ville :') !!}
                    {!! Form::select('ville_id_start', [null => 'Veuillez choisir une Ville'] + $villes , null, ['class' => 'form-control']) !!}
                </div>

                <div class = "form-group align-center">
                  {!! Form::label('quartier_id_start', 'Quartier:') !!}
                  <select name="quartier_id_start" class="form-control">
                      <option>Veuillez choisir votre Quartier</option>
                  </select>
                </div>
            </div>



            <div class = "form-group col-sm-6"> <h1>Arrivée</h1>
                <div class = "form-group align-center">
                    {!! Form::label('ville_id_stop', 'Ville :') !!}
                    {!! Form::select('ville_id_stop', [null => 'Veuillez choisir une Ville'] + $villes , null, ['class' => 'form-control']) !!}
                </div>

                <div class = "form-group align-center">
                  {!! Form::label('quartier_id_stop', 'Quartier:') !!}
                  <select name="quartier_id_stop" class="form-control">
                      <option>Veuillez choisir votre Quartier</option>

                  </select>
                </div>
            </div>

            <div class = "form-group align-center">
                {!! Form::label('phone', 'Téléphone:') !!}
                {!! Form::number('phone',  null, ['class' => 'form-control']) !!}
            </div>

        </div>
{{--
            @include('includes.form_error')--}}


            <div class="col-sm-6 center-block ">
                <div class = "form-group col-sm-4">
                    {!! Form::label('description', "Donnez - Nous plus de détails s'il vous plait: ") !!}
                    {!! Form::textarea('description',  null, ['class' => 'form-control h-50']) !!}
                </div>

                <div class = "form-group col-sm-4">
                    {!! Form::Submit ('Je Commande', ['class' => 'btn btn-primary'] ) !!}
                </div>

                {!! Form::close() !!}
                @if(count($errors) > 0)
                    Veuillez bien remplir tous les champs
                    <div class="alert alert-danger col-sm-4">
                        <ul>

                            @foreach( $errors->all() as $error)

                                <li> {{$error}}</li>

                            @endforeach
                        </ul>

                        @endif
            </div>
    </div>

@endsection
