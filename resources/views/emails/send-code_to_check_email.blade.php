@component('mail::message')
<h1>Assalam aalaikum warahmatullahi wabarakat</h1>
<h2>We have received your request to reset your account password</h2>
<p>You can use the following code to check your email validation:</p>

@component('mail::panel')
{{ $code }}
@endcomponent

<p>The allowed duration of the code is one hour from the time the message was sent</p>
@endcomponent