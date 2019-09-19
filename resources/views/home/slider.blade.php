
<section id="home" class="divider parallax layer-overlay overlay-white-8est" data-bg-img="{{asset('images/Doctor4.jpg')}}">
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container pt-100 pb-100">
                <div class="row">
                    <div class="col-md-6">
                        <div class="home-content pt-90">
                            <h1 class="text-white text-uppercase font-40">CARDIO<span class="text-theme-colored">MOBILE</span></h1>
                            <h5 class="text-white font-weight-400">La Solution N°1 Camerounaise dédié à votre santé CARDIOVASCULAIRE</h5>
                            <a class="btn btn-colored btn-theme-colored btn-flat mt-15" href="/itineraire/create">COMMANDER UNE AMBULANCE</a>
                        </div>
                    </div>



                    <div class="col-md-2 container"> </div>

                    <div class="col-md-4">
                        <script src="{{ asset('wizard/js/step-form-wizard.js') }}"></script>

                            <div class="site-index">
                                    <div class="body-content">
                                        <div class="row">
                                                <div class="col-md-12">
                        {!! Form::open(['method' =>'POST', 'action' => 'UrgenceFormReceivingMedecinController@store', 'class' => 'bg-theme-colored p-30', 'id' => 'wizard_example']) !!}
                        <h3 class="mt-0 text-white mb-20 text-center">MEDECIN D'URGENCE</h3>
                            <h4 class="mt-0 text-white mb-20 text-center"><i>Vous Souhaitez Prendre un de RDV?</i></h4>

                    <fieldset>

                               <div class="form-group mb-5 text-theme-colored">
                                {!! Form::label('name', 'Votre Nom') !!}
                                {!! Form::text('name', null, ['class' => 'form-control ', 'placeholder' => 'Votre Nom Complet']) !!}
                               </div>

                               <div class="form-group mb-10 text-theme-colored">
                                     {!! Form::label('phone', 'Téléphone:') !!}
                                     {!! Form::tel('phone', null, ['class' => 'form-control', 'placeholder' => 'Votre Numéro de Téléphone']) !!}
                               </div>

                                <div class="form-group mb-10 text-theme-colored">
                                    {!! Form::label('ville_id', 'Ville:') !!}
                                    {!! Form::select('ville_id', [null => 'Veuillez choisir votre Ville de résidence'] + $villes , null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group mb-10 text-theme-colored">
                                {!! Form::label('quartier_id', 'Quartier:') !!}
                                    <select name="quartier_id" class="form-control">
                                        <option value="" selected = "selected">Veuillez choisir un quartier</option>

                                </select>
                                </div>
                                  <div class="form-group mb-0 text-theme-colored">
                                        <h6 class="text-theme-colored text-center">Veuillez nous décrire ce que vous ressentez physiquement
                                            comme malaise</h6>
                                  </div>
                    </fieldset>

                    <fieldset>
                            {{--<legend>Etape 2/3 </legend>--}}


                                <div class="form-group mb-10 text-theme-colored text-center">
                                        {!! Form::label('description', "Qu'est -ce que vous ressentez?") !!}
                                        {!! Form::textarea('description', null, ['class' => 'form-control',
                                        'placeholder' => "Description Ici"]) !!}
                                 </div>

                             <div class="form-group mb-10 text-theme-colored text-center">

                                        <div class="custom-control custom-radio mb-10">
                                            <input class="custom-control-input" type="radio" name="urgence_type" id="example-radio2" value="clinique">
                                            <label class="custom-control-label" for="clinique">
                                            <h5 class="text-theme-colored custom-control-input">Passer à la Clinique</h5>
                                        </label>
                                        </div>

                                     <div class="custom-control custom-radio mb-10">
                                     <input class="custom-control-input" type="radio" name="urgence_type" id="example-radio1" value="domicile" >
                                    <label class="custom-control-label" for="domicile">
                                            <h5 class="text-theme-colored custom-control-input">Déplacer le Médecin</h5>
                                        </label>
                                    </div>

                                </div>
                    </fieldset>

   {{--          <fieldset>
                --}}{{--<legend>Etape 3/3 </legend>--}}{{--
                --}}{{--Confirmation de Rendez - Vous--}}{{--

                                <div class= "form-group mb-10 text-theme-colored">
                                      {!! Form::label('meeting_datetime', 'Date et heure:') !!}
                                      {!! Form::text('meeting_datetime', null, ['class' => 'datetime form-control' , 'id' => 'datetimeDemo']) !!}
                                 </div>

                              --}}{{--   <div class="form-group mb-10 text-theme-colored">
                                     {!! Form::label('time', 'Heure:') !!}
                                     {!! Form::text('time', null, ['class' => 'datetime form-control' , 'id' => 'datetimeDemo']) !!}
                                 </div>
--}}{{--
                                 <div class="custom-control custom-radio mb-10">
                                    {!! Form::label('payment_method', 'Moyens de Paiements:') !!}

                                 <div class="custom-control custom-radio mb-10">
                                     <input class="custom-control-input" type="radio" name="payment_method" id="example-radio2" value="momo">
                                            <label class="custom-control-label" for="momo">
                                                <h5 class="text-theme-colored custom-control-input">Mtn Mobile Money</h5>
                                            </label>
                                 </div>

                                 <div class="custom-control custom-radio mb-10">
                                     <input class="custom-control-input" type="radio" name="payment_method" id="example-radio2" value="paypal">
                                           <label class="custom-control-label" for="visa">
                                                 <h5 class="text-theme-colored custom-control-input">Carte Visa</h5>
                                            </label>
                                 </div>

                                 <div class="custom-control custom-radio mb-10">
                                      <input class="custom-control-input" type="radio" name="payment_method" id="example-radio2" value="caisse">
                                             <label class="custom-control-label" for="caisse">
                                                 <h5 class="text-theme-colored custom-control-input">Payer à la caisse</h5>
                                             </label>
                                </div>
                                </div>

             </fieldset>
--}}

                                @include('includes.form_error')

                        {!! Form::close() !!}

                    </div>
                    </div>
                </div>
            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="{{ asset('js/custom.js') }}"></script>
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
        })
        var month = new Date().getMonth();
    </script>
</section>
