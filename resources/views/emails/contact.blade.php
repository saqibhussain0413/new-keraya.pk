@component('mail::message')
@component('mail::panel')
# Hello, {{ $name }}
{{ $message }}
@endcomponent
Thanks,<br>
{{ config('app.name') }}

@component('mail::button', ['url' => 'keraya.pk'])
    visit here...
@endcomponent
@endcomponent
