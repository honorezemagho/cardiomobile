<section id="home" class="divider parallax layer-overlay overlay-white-8est" data-bg-img="{{asset('images/Doctor4.jpg')}}">
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container pt-100 pb-100">
                <div class="row">
                    <div class="col-md-6">
                        <div class="home-content pt-90">
                            <h1 class="text-white text-uppercase font-40">CARDIO<span class="text-theme-colored">MOBILE</span></h1>
                            <h5 class="text-white font-weight-400">La Solution N°1 Camerounaise dédié à votre santé</h5>
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
                                        {!! Form::open(['method' =>'POST', 'action' => 'UrgenceFormReceivingController@store', 'class' => 'bg-theme-colored p-30', 'id' => 'wizard_example']) !!}
                                        <h3 class="mt-0 text-white mb-20 text-center">MEDECIN D'URGENCE</h3>
                                        <h4 class="mt-0 text-white mb-20 text-center">Prise de Rendez - Vous</h4>

                                        <fieldset>
                                            <div class="form-group mb-10 text-theme-colored">
                                                {!! Form::label('name', 'Noms:') !!}
                                                {!! Form::text('name', null, ['class' => 'form-control ']) !!}
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

                                            <div class="form-group mb-10 text-theme-colored">
                                                {!! Form::label('datetime', 'Date et heure:') !!}
                                                {!! Form::text('datetime', null, ['class' => 'datetime form-control' , 'id' => 'datetimeDemo']) !!}
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
            static: "#datetime-demo-holder",   /* Used for demonstration */
            classNames: "theme-default",    /* Used for demonstration */
            startOpen: false,                /* Used for demonstration */
            stayOpen: true,
            dateFormat: 'dd-mm-YYYY',
            locale: "fr",
            closeButton: true,
            position : 'top',
            dateBlacklist: true,
        });
        var month = new Date().getMonth();
    </script>
</section>
