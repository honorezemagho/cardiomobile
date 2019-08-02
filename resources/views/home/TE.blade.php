 <div class="row">
                                    <fieldset> Etape 1

                                    <div class="col-sm-12">
                                    <div class="form-group mb-10 text-white">
                                    {!! Form::label('name', 'Noms:') !!}
                                    {!! Form::text('name', null, ['class' => 'form-group ']) !!}
                                    </div>
                                </div>

                                    <div class="col-sm-12">
                                        <div class="form-group mb-10 text-white">
                                            {!! Form::label('name', 'Ville:') !!}
                                            {!! Form::text('name', null, ['class' => 'form-group ']) !!}
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group mb-10 text-white">
                                            {!! Form::label('name', 'Quartier:') !!}
                                            {!! Form::text('name', null, ['class' => 'form-group  ']) !!}
                                        </div>
                                    </div>
                                    </fieldset>
                                </div>

                                            <div class="row">
                                                <fieldset> Etape 2
                                            <div class="col-sm-12">
                                                <div class="form-group mb-10 text-white">
                                                    {!! Form::label('tel', 'Téléphone:') !!}
                                                    {!! Form::tel('tel', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group mb-10 text-white">
                                                    {!! Form::label('description', 'Description:') !!}
                                                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                                </fieldset>
                                        </div>

