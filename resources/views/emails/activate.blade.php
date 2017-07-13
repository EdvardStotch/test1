@component('mail::message')
# Activation your accaunt!

The body of your message.
@php

@endphp
@component('mail::button', ['url' => $url ])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
