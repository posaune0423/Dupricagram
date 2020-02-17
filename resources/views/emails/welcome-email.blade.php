@component('mail::message')
# Welcome to Dupricagram, posaune0423

We're so happy you've joined us.
Here's a quick rundown on how to get the most out of your Dupricagram experience.

@component('mail::button', ['url' => ''])
Open Dupricagram
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
