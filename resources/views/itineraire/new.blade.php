@include('home.head')
@include('home.body')
<div class="container centered-block text-center">
    <h2><span class="text-theme-colored text-center">Définir votre itinéraire </span></h2>
    <script src="{{ asset('js/custom2.js') }}"></script>
    <div class="container col-sm-12">

        <div class="container col-sm-8">
            <h4 class="text-theme-colored"> COMMANDER DES AMBULANCES EN TOUTE SIMPLICITE</h4>

            <h4 class="text-theme-colored"> REDONNEZ LE SOURIRE A VOS PROCHES </h4>
            <img src="{{asset('images/patient4.png')}}" alt="">
        </div>

        <div class="container equal-height col-sm-4 bg-blue">
            <div class="site-index">
                <div class="body-content">
                    <div class="row">
                        {!! Form::open(['method' =>'POST', 'action' => 'ItineraireController@store']) !!}

                        <fieldset>
                            <div class = "form-group align-center text-theme-colored">
                                {!! Form::label('name', 'Noms : ') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class = "form-group col-sm-6 text-theme-colored"> <h1 class="text-theme-colored"> Départ </h1>
                                <div class = "form-group align-center">
                                    {!! Form::label('ville_id_start', 'Ville :') !!}
                                    {!! Form::select('ville_id_start', [null => 'Veuillez choisir une Ville'] + $villes , null, ['class' => 'form-control']) !!}
                                </div>

                                <div class = "form-group align-center text-theme-colored">
                                    {!! Form::label('quartier_id_start', 'Quartier:') !!}
                                    <select name="quartier_id_start" class="form-control">
                                        <option>Veuillez choisir votre Quartier</option>
                                    </select>
                                </div>
                            </div>



                            <div class = "form-group col-sm-6 text-theme-colored"> <h1 class="text-theme-colored">Arrivée</h1>
                                <div class = "form-group align-center">
                                    {!! Form::label('ville_id_stop', 'Ville :') !!}
                                    {!! Form::select('ville_id_stop', [null => 'Veuillez choisir une Ville'] + $villes , null, ['class' => 'form-control']) !!}
                                </div>

                                <div class = "form-group align-center text-theme-colored">
                                    {!! Form::label('quartier_id_stop', 'Quartier:') !!}
                                    <select name="quartier_id_stop" class="form-control">
                                        <option>Veuillez choisir votre Quartier</option>

                                    </select>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            {{--<legend>Etape 2/2 </legend>--}}
                            <div class="form-group mb-10 text-theme-colored">
                                {!! Form::label('phone', 'Téléphone:') !!}
                                {!! Form::tel('phone', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group mb-10 text-theme-colored">
                                {!! Form::label('description', 'De Quoi Souffrez - Vous ?:') !!}
                                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                            </div>
                        </fieldset>
                    </div>

                    <div class = "form-group ">
                        {!! Form::Submit ('Je Commande', ['class' => 'btn btn-primary'] ) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


</div>
{{--
            @include('includes.form_error')--}}

{{--  <div class = "form-group align-center">
  {!! Form::label('phone', 'Téléphone:') !!}
  {!! Form::number('phone',  null, ['class' => 'form-control']) !!}
   </div>

  <div class = "form-group ">
      {!! Form::label('description', 'Description:') !!}
      {!! Form::textarea('description',  null, ['class' => 'form-control']) !!}
  </div>--}}


@if(count($errors) > 0)
    Veuillez bien remplir tous les champs
    <div class="alert alert-danger">
        <ul>

            @foreach( $errors->all() as $error)

                <li> {{$error}}</li>

            @endforeach
        </ul>

        @endif
    </div>

    </div>
    </div>

    @include('home.footer')

