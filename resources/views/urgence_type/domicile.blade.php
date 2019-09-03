
@include('home.head')
@include('home.body')


<section id="home" >
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container  pt-50 pb-5">
                <h3 class="mt-0  pt-20 mb-10 text-theme-colored text-center">MEDECIN D'URGENCE</h3>
                <h4 class="mt-0  pt-10 text-center text-theme-colored"><i>Vous Souhaitez Prendre un de RDV?</i></h4>
                <?php
                    use App\Payment;
                use Carbon\Carbon;
                $locale = 'fr_FR';
                $records = $data['available2'];
                $request['payment_amount'] =  Payment::where('id', 1)->value('price');
                ?>

                {!! Form::open(['method' =>'POST', 'action' => 'UrgenceFormReceivingController@store', 'class' => 'bg-theme-colored p-30 text-white']) !!}

                @forelse($records as $available)
                    @if ($loop->first)


                        <h3 class="mt-0 text-white mb-10 text-center">Choisir le rendez-vous</h3>

                        <table class = "table">
                            <thead>
                            <tr>
                                <th> Date </th>
                                <th> Heure</th>
                                <th>Nom du Médecin</th>
                            </tr>

                            </thead>

                            <tbody>

                            @foreach(  $records as $available)
                                <tr>
                                    <td>{{ \Carbon\Carbon::parseFromLocale($available->datetime, $locale)->IsoFormat(' Do MMMM YYYY')}}</td>
                                    <td>{{ \Carbon\Carbon::parseFromLocale($available->datetime, $locale)->toTimeString()}}</td>
                                    <td>DR. {{$available->medecin->name}}</td>
                                    <td>
                                        <input class="custom-control-input" type="radio" name="available_id"  value={{$available->id}} >
                                        <label class="custom-control-label" for="available_id"></label>
                                        <h5 class="text-theme-colored custom-control-input">Choisir</h5>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>







                        <h3 class="mt-0 text-white mb-1 text-center">Moyens de Paiement</h3>


                        <div class="custom-control custom-radio mb-1 text-white centered center-block ">
                            {{--{!! Form::label('payment_method', 'Moyens de Paiements:') !!}--}}
                            <div class="col-md-5"> </div>
                            <div class="custom-control custom-radio mb-1 centered center-block">
                                <input class="custom-control-input" type="radio" name="payment_method"  value="momo">
                                <label class="custom-control-label" for="momo">
                                    <h5 class="text-white custom-control-input">Mtn Mobile Money</h5>
                                </label>
                            </div>

                            <div class="col-md-5"> </div>
                            <div class="custom-control custom-radio mb-1 centered center-block">
                                <input class="custom-control-input" type="radio" name="payment_method"  value="paypal">
                                <label class="custom-control-label" for="visa">
                                    <h5 class="text-white custom-control-input">Carte Visa</h5>
                                </label>
                            </div>

                            <div class="col-md-5"> </div>
                            <div class="custom-control custom-radio mb-1 centered center-block">
                                <input class="custom-control-input" type="radio" name="payment_method"  value="caisse">
                                <label class="custom-control-label" for="caisse">
                                    <h5 class="text-white custom-control-input ">Payer à la caisse</h5>
                                </label>
                            </div>

                            <input type="hidden" value="{{$data['name']}}" name="name">
                            <input type="hidden" value="{{$data['phone']}}" name="phone">
                            <input type="hidden" value="{{$data['ville_id']}}" name="ville_id">
                            <input type="hidden" value="{{$data['quartier_id']}}" name="quartier_id">
                            <input type="hidden" value="{{$data['description']}}" name="description">
                            <input type="hidden" value="{{$data['urgence_type']}}" name="urgence_type">
                            <input type="hidden" value="{{$data['transaction_id']}}" name="transaction_id">
                            <input type="hidden" value="{{$data['payment_amount']}}" name="transaction_id">


                            <div class = "form-group col-md-11"></div>
                            <div class = "form-group col-md-1">
                                {!! Form::Submit ('Je Valide', ['class' => 'bg-theme-colored'] ) !!}
                            </div>




                            {!! Form::close() !!}

                            @include('includes.form_error')

                            @endif

                            @empty
                                <h3 class="text-white text-center"> Aucun rendez - vous n'est disponible pour le moment</h3>

                            @endforelse



                        </div>
            </div>
        </div>
    </div>

</section>

@include('home.footer')