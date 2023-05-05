@component('mail::message')
<h1 style="font-family: sans-serif;font-style: italic;">Assalam aalaikum warahmatullahi wabarakat</h1>
<h2>We have received your request to check your email validation</h2>
<p>You can use the following code to check it up:</p>

@component('mail::panel')
{{ $code }}
@endcomponent

<p>The allowed duration of the code is one hour from the time the message was sent</p>
@endcomponent