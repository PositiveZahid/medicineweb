@component('mail::message')
# Congratulations

Your Shop is now active

@component('mail::button', ['url' => route('shop.show', $shop->id)])
Click here to start
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
