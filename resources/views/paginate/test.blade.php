
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

             /*   $response = [
                    'pagination' => [
                        'total' => $data->total(),
                        'per page' => $data->perPage(),
                        'current_page' => $data->currentPage(),
                        'last_page'  => $data->lastPage(),
                        'from' => $data->firstItem(),
                        'to' => $data->lastItem()
                    ],
                    'data' => $data
                ];

                return response()->json($response);*/
                ?>


                {!! Form::open(['method' =>'POST', 'action' => 'UrgenceFormReceivingCliniqueController@store', 'class' => 'bg-theme-colored p-30 text-white']) !!}


    <h3 class="mt-0 text-white mb-10 text-center">Choisir le rendez-vous</h3>


    @forelse($data as $available)
    @if ($loop->first)

        <table class = "table">
            <thead>
            <tr>
                <th> Date </th>
                <th> Heure</th>
                <th>Nom du Médecin</th>
                <th>Choisir</th>
            </tr>
            </thead>

            <tbody>

            @foreach( $data as $available)
                <tr>
                    <td>{{ \Carbon\Carbon::parseFromLocale($available->datetime, $locale)
                                    ->IsoFormat(' Do MMMM YYYY')}}</td>
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

        @include('includes.form_error')

    @endif

    @empty
    <h3 class="text-white text-center"> Aucun rendez - vous n'est disponible pour le moment</h3>
    @endforelse

                <input type="hidden" value="{{$data['name']}}" name="name">
                <input type="hidden" value="{{$data['phone']}}" name="phone">
                <input type="hidden" value="{{$data['ville_id']}}" name="ville_id">
                <input type="hidden" value="{{$data['quartier_id']}}" name="quartier_id">
                <input type="hidden" value="{{$data['description']}}" name="description">
                <input type="hidden" value="{{$data['urgence_type']}}" name="urgence_type">
                <input type="hidden" value="{{$data['transaction_id']}}" name="transaction_id">
                <input type="hidden" value="{{$data['speciality_id']}}" name="speciality_id">




                <div class = "form-group col-md-11">
                    {{$data->links()}}
                </div>

               {{-- <div class = "form-group col-md-1 ">--}}
                    {!! Form::Submit ('Je Valide', ['class' => 'bg-theme-colored'] ) !!}
               {{-- </div>--}}

                {!! Form::close() !!}

            </div>
        </div>
    </div>

</section>

@include('home.footer')