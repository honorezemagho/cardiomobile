@include('home.head')
@include('home.body')

<div class="container centered-block text-center">
<h2><span class="text-theme-colored text-center">Veuillez Remplir ce formulaire pour rencontrer un Médécin </span></h2>

    <div class="row centered-block text-center  form-inline">
    {!! Form::open(['method' =>'POST', 'action' => 'MedecinController@store']) !!}

        <div class="col-sm-4">
    <div class = "form-group ">
        {!! Form::label('name', 'Nom et Prénoms: ') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
        </div>

        <div class="col-sm-4">
    <div class = "form-group">
        {!! Form::label('ville', 'Ma Ville: ') !!}
        {!! Form::select('ville_id', [null => 'Veuillez choisir une Ville'] + $ville , null, ['class' => 'form-control']) !!}
    </div>
        </div>

        <div class="col-sm-4">
            <div class = "form-group">
                {!! Form::label('quartier', 'Mon Quartier: ') !!}
                <option value="" selected = "selected">Veuillez choisir un quartier</option>

            </div>
        </div>

        <div class="col-sm-4">
        <div class = "form-group">
            {!! Form::label('phone', 'Téléphone: ') !!}
            {!! Form::number('phone',  null, ['class' => 'form-control']) !!}
        </div>
        </div>


        {{--<div class="col-sm-4">--}}
        <div class = "form-group">
            {!! Form::label('description', "De Quoi Souffrez - Vous S'il Vous plaît? ") !!}
            {!! Form::textarea('description',  null, ['class' => 'form-control']) !!}
        </div>
        {{--</div>--}}

    <div class = "form-group">
    {!! Form::Submit ('Commander un Médécin', ['class' => 'btn btn-primary'] ) !!}
    </div>


    {!! Form::close() !!}

    @include('includes.form_error')
    </div>
</div>

@include('home.footer')