@component('mail::message')
# MEDECIN D'URGENCE

Bonjour docteur DJOMOU
<?php $payment_method = $data['payment_method'];
if($payment_method == 'momo'){
    $payment_method = 'MTN MOBILE MONEY';
}elseif($payment_method == 'visa'){
    $payment_method = 'CARTE VISA';
}else{
    $payment_method = 'CAISSE';
}
?>

M/Mme/Mlle : {{$data['name']}}<br>
Numéro de téléphone : {{$data['phone']}}<br>
Domicilié à : {{$data['ville']}} , {{$data['quartier']}}<br>
Sollicite un rendez - vous le : {{$data['meeting_datetime']}}<br>
Pour les raisons suivantes : {{$data['description']}}<br>
Méthode de Paiement : <?php echo $payment_method;?><br>
Numéro de Transaction : {{$data['transaction']}}<br><br>

Si vous êtes disponibles à la date et heure sollicitée, merci de cliquer sur le bouton pour le confirmer
<?php $transaction = $data['transaction'];

?>

@component('mail::button', ['url' => "https://cardio.medical/urgence/confirm-disponibility/$transaction/Med4/673004266"])
Cliquez Ici pour confirmer votre disponibilité
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
