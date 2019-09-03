@component('mail::message')
    # MEDECIN D'URGENCE

    Bonjour docteur DJOMOU

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
