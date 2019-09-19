<h3 class="mt-0 text-white mb-10 text-center">Choisir le rendez-vous</h3>

@forelse($disponibility as $available)
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

            @foreach( $disponibility as $available)
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

