@extends('adminlte::page')
@section('content')
    <h1 style="text-align: center">  Editer le profil du Médecin </h1>


    <div class="row">


        <div class="col-sm-9">

            {!! Form::model($medecins, ['method' =>'PATCH', 'action' => ['AdminMedecinController@update', $medecins->id]]) !!}


            <div class = "form-group">
                {!! Form::label('name', 'Nom') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class = "form-group">
                {!! Form::label('ville', 'Ville :') !!}
                {!! Form::select('ville_id', [null => 'Veuillez choisir votre Ville de résidence'] + $villes , null, ['class' => 'form-control']) !!}
            </div>

            <div class = "form-group">
                {!! Form::label('quartier', 'Quartier :') !!}
                {!! Form::select('quartier_id', [null => 'Veuillez choisir un Quartier'] + $quartiers , null, ['class' => 'form-control']) !!}
            </div>


            <div class = "form-group">
                {!! Form::label('spécialité', 'Spécialité: ') !!}
                {!! Form::select('speciality_id', [null => 'Veuillez choisir une Spécialité'] + $speciality , null, ['class' => 'form-control']) !!}
            </div>

            <div class = "form-group">
                {!! Form::label('Type', 'Type de Médecin: ') !!}
                {!! Form::select('type_id', [null => 'Veuillez choisir un type'] + $types , null, ['class' => 'form-control']) !!}
            </div>


            <div class = "form-group">
                {!! Form::label('phone', 'Téléphone:') !!}
                {!! Form::number('phone',  null, ['class' => 'form-control']) !!}
            </div>


            <div class = "form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email',  null, ['class' => 'form-control']) !!}
            </div>


            <div class = "form-group">
                {!! Form::Submit ('Modifier', ['class' => 'btn btn-primary btn-group mr-2'] ) !!}

                {!! Form::close() !!}


                {!! Form::open(['method' => 'DELETE', 'action' => ['AdminMedecinController@destroy', $medecins->id], 'class'=>'btn-group mr-2 visible-xs']) !!}


                {!! Form::Submit ('Supprimer', ['class' => 'btn btn-danger ' ], ['data-toggle' => 'modal'],['data-target' => '.bd-example-modal-lg']  ) !!}
            </div>

            {!! Form::close() !!}




        </div>
    </div>


    <div class="row">
        @include('includes.form_error')

    </div>

@endsection
