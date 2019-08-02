@include('home.head')
@include('home.body')
<div class="container centered-block text-center">
<h2><span class="text-theme-colored text-center">Définir votre itinéraire </span></h2>
    <script src="{{ asset('js/custom2.js') }}"></script>

    <!-- nicer scroll in steps -->
    <div class="container col-sm-12">
        <div class="container col-sm-6 text-center">
            <h4 class="text-theme-colored"> COMMANDER DES AMBULANCES EN TOUTE SIMPLICITE</h4>

            <h4 class="text-theme-colored"> REDONNEZ LE SOURIRE A VOS PROCHES </h4>
            <img src="{{asset('images/patient4.jpg')}}" alt="">
        </div>

        <div class="col-sm-6 container">
            <script src="{{ asset('wizard/js/step-form-wizard1.js') }}"></script>
            <div class="row">
                {!! Form::open(['method' =>'POST', 'action' => 'ItineraireController@store', 'class' => 'booking-form form-home bg-theme-colored p-30', 'id' => 'wizard_example']) !!}
                <h4 class="mt-0 text-white mb-20 text-center">VEUILLEZ REMPLIR CE FORMULAIRE</h4>
                <fieldset>
                    <div class = "form-group col-sm-6 text-theme-colored text-center"> <h1 class= "text-theme-colored text-center"> Départ </h1>
                        <div class = "form-group align-center">
                            {!! Form::label('ville_id_start', 'Ville :') !!}
                            {!! Form::select('ville_id_start', [null => 'Veuillez choisir une Ville'] + $villes , null, ['class' => 'form-control']) !!}
                        </div>

                        <div class = "form-group align-center text-theme-colored text-center">
                            {!! Form::label('quartier_id_start', 'Quartier:') !!}
                            <select name="quartier_id_start" class="form-control">
                                <option value="" selected = "selected">Veuillez choisir un quartier</option>
                            </select>

                        </div>
                    </div>

                    <div class = "form-group col-sm-6 text-theme-colored text-center"> <h1 class="text-theme-colored text-center">Arrivée</h1>
                        <div class = "form-group align-center">
                            {!! Form::label('ville_id_stop', 'Ville :') !!}
                            {!! Form::select('ville_id_stop', [null => 'Veuillez choisir une Ville'] + $villes , null, ['class' => 'form-control']) !!}
                        </div>

                        <div class = "form-group align-center text-theme-colored text-center">
                            {!! Form::label('quartier_id_stop', 'Quartier:') !!}
                            <select name="quartier_id_stop" class="form-control" content="Veuillez choisir un Quartier">
                                <option value="" selected = "selected">Veuillez choisir un Quartier</option>

                            </select>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <div class = "form-group align-center text-theme-colored text-center">
                        {!! Form::label('name', 'Noms : ') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group mb-10 text-theme-colored text-center">
                        {!! Form::label('phone', 'Téléphone:') !!}
                        {!! Form::tel('phone', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group mb-10 text-theme-colored text-center">
                        {!! Form::label('description', "Donnez - Nous plus de détails s'il vous plait:") !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    </div>
                </fieldset>
                @include('includes.form_error')
                {!! Form::close() !!}
            </div>
        </div>
    </div>


<script>
    $(document).ready(function () {
        $("#wizard_example").stepFormWizard({
            transition: '3d-cube', // slide, fade, 3d-cube, none
            duration: 2000,
            theme: 'circle'
        });
    })
    $(window).load(function () {
        /* only if you want use mcustom scrollbar */
        $(".sf-step").mCustomScrollbar({
            theme: "dark-3",
            scrollButtons: {
                enable: true
            }
        });

    });


</script>
</div>
</body>
@include('home.footer')