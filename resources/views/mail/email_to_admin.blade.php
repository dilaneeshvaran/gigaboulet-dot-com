@component('mail::message')
<strong>Name:</strong>  {{ $name }}<br>
<strong>Email:</strong>  {{ $email }}<br>
{{-- <strong>Subject:</strong> {{ $object }} <br><br> --}}
<strong>Message:</strong><br> {{ $message }}
@component('mail::button', ['url' => $mailData['url']])
Visit Our Website
@endcomponent 
Thanks,
{{ config('app.name') }}
@endcomponent