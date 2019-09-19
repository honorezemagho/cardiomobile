@include('home.head')
@include('home.body')

<section id="home" >
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container  pt-50 pb-5">
                <h3 class="mt-0  pt-20 mb-10 text-theme-colored text-center">MEDECIN D'URGENCE</h3>
                <h4 class="mt-0  pt-10 text-center text-theme-colored"><i>Vous Souhaitez Prendre un de RDV?</i></h4>

                <?php
                use Carbon\Carbon;
                $locale = 'fr_FR';
                $speciality_id = $data['speciality_id'];
                ?>


                {!! Form::open(['method' =>'POST', 'action' => 'UrgenceFormReceivingCliniqueController@store', 'class' => 'bg-theme-colored p-30 text-white']) !!}

                @if ($speciality_id == 1)
                @asyncWidget('CardiologueDisponibilityWidget')

                @elseif ($speciality_id == 2)
                    @asyncWidget('NeurologueDisponibilityWidget')

                @elseif ($speciality_id == 3)
                    @asyncWidget('PneumologueDisponibilityWidget')

                @elseif ($speciality_id == 4)
                    @asyncWidget('DiabetologueDisponibilityWidget')

                @elseif ($speciality_id == 5)
                    @asyncWidget('NephrologueDisponibilityWidget')

                @else

                <h3>Aucune spécialité n'a été sélectionnée,
                    Veuillez sélectionner au moins une specialité</h3>;

                    @endif

                <input type="hidden" value="{{$data['name']}}" name="name">
                <input type="hidden" value="{{$data['phone']}}" name="phone">
                <input type="hidden" value="{{$data['ville_id']}}" name="ville_id">
                <input type="hidden" value="{{$data['quartier_id']}}" name="quartier_id">
                <input type="hidden" value="{{$data['description']}}" name="description">
                <input type="hidden" value="{{$data['urgence_type']}}" name="urgence_type">
                <input type="hidden" value="{{$data['transaction_id']}}" name="transaction_id">
                <input type="hidden" value="{{$data['speciality_id']}}" name="speciality_id">

                <div class = "form-group col-md-11">
                </div>

                <div class = "form-group col-md-1 float-right">
                    {!! Form::Submit ('Je Valide', ['class' => 'bg-theme-colored'] ) !!}
                </div>

                {!! Form::close() !!}

                        </div>
        </div>
    </div>

</section>

@include('home.footer')