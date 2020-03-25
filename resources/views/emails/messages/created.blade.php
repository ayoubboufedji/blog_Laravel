@component('mail::message')
# Hey Admin.
- {{ $name }}
- {{ $email }}

@component('mail::panel')
- {{ $msg }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
