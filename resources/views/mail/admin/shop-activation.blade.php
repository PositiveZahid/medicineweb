@component('mail::message')
# Shop Activation Request

<h3>Shop Name: {{ $shop->name }}</h3>
<h4>Owner: {{ $shop->owner->name }}</h4>

@component('mail::button', ['url' => url('/admin/shops')])
Manage Shops
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
