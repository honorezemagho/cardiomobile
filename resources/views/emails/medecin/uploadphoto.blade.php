@component('mail::message')
# CARDIOMOBILE

Bonjour Monsieur {{$data['name']}}<br>
Domicilié à {{$data['ville']}}, au quartier {{$data['quartier']}}<br>
Numéro de téléphone : {{$data['phone']}}<br>
Email : {{$data['email']}}<br>
Spécialité : {{$data['speciality']}}<br>
Votre Matricule est le "{{$data['matricule']}}"<br><br><br>

Vous avez été inscrit à la plateforme cardiomobile, veuillez maintenant cliquer sur ce lien
pour valider votre compte et envoyer une photo de vous.

<?php
$code = $data['code'];
$medecin_matricule = $data['matricule'];
?>

@component('mail::button', ['url' => "https://cardio.dev/medecin/upload-photo/$code/$medecin_matricule"])
Cliquez ICI pour le valider
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
