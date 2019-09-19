
<?php
use Carbon\Carbon;
$locale = 'fr_FR';
?>




            @if($disponibility)
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
            @endif


