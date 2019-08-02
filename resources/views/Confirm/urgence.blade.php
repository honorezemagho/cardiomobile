@include('home.head')
@include('home.body')

<div class="main-content center-block">
<section>
    <h1 style="text-align: center">  Confirmation de disponibilité </h1>
<div class="container">
    {!! Form::open(['method' =>'POST', 'action' => 'MedecinConfirmDisponibilityController@store']) !!}

    <div class = "form-group">
        {!! Form::label('transaction', 'Numéro de Transaction:') !!}
        {!! Form::text('transaction', null, ['class' => 'form-control']) !!}
    </div>


    <div class = "form-group">
        {!! Form::label('matricule', 'Matricule') !!}
        {!! Form::text('matricule', null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::label('medecin_phone', 'Téléphone') !!}
        {!! Form::text('medecin_phone', null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::Submit ('Je Confirme ma disponibilité', ['class' => 'btn btn-primary'] ) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')
</div>
</section>
</div>

@include('home.footer')