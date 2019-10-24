@extends('adminlte::page')

@section('content')
    <h1>  Modifier mon profil </h1>

    <div class="row">

        <div class="col-sm-3">

            <img src="{{$user->photo ? $user->photo->file: '/images/default.jpg'}}" alt="" class="img-responsive img-rounded">

        </div>

        <div class="col-sm-9">

            {!! Form::model($user, ['method' =>'PATCH', 'action' => ['UsersProfileController@update', $user->id], 'files'=>true]) !!}

            <div class = "form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>


            <div class = "form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class = "form-group">
                {!! Form::label('phone', 'Téléphone:') !!}
                {!! Form::number('phone', null, ['class' => 'form-control']) !!}
            </div>

            <div class = "form-group">
                {!! Form::label('photo_id', 'Photo') !!}
                {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
            </div>

            <div class = "form-group">
                {!! Form::label('password', 'Mot de passe: ') !!}
                {!! Form::password('password', null, ['class' => 'form-control']) !!}
            </div>


            <div class = "form-group">
                {!! Form::Submit ('Mettre à jour', ['class' => 'btn btn-primary btn-group mr-2'] ) !!}

                {!! Form::close() !!}
        </div>
    </div>

    <div class="row">
        @include('includes.form_error')

    </div>
    </div>
@endsection