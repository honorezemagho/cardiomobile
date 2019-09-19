@component('mail::message')
# MEDECIN D'URGENCE

Bonjour docteur DJOMOU

<?php /*$payment_method = $data['payment_method'];
if($payment_method == 'momo'){
    $payment_method = 'MTN MOBILE MONEY';
}elseif($payment_method == 'visa'){
    $payment_method = 'CARTE VISA';
}else{
    $payment_method = 'CAISSE';
}
*/
use App\Available;
use App\Medecin;

$medecin_available = Available::where('id', $data['available_id'])->value('medecin_id');
$medecin_phone = Medecin::where('id', $medecin_available)->value('phone');
$medecin_matricule = Medecin::where('id', $medecin_available)->value('matricule')
?>

M/Mme/Mlle : {{$data['name']}}<br>
Numéro de téléphone : {{$data['phone']}}<br>
Domicilié à : {{$data['ville']}} , {{$data['quartier']}}<br>
Sollicite un rendez - vous le : {{$data['meeting_date']}} à {{$data['meeting_time']}} <br>
Pour les raisons suivantes : {{$data['description']}}<br>
Numéro de Transaction : {{$data['transaction']}}<br><br>


Si vous êtes disponibles à la date et heure sollicitée, merci de cliquer sur le bouton pour le confirmer
<?php $transaction = $data['transaction'];?>

@component('mail::button', ['url' => "https://cardio.dev/urgence/confirm-disponibility/$transaction/$medecin_matricule/$medecin_phone"])
Cliquez Ici pour confirmer votre disponibilité
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
