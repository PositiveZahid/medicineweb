@extends('layouts.app')

@section('content')

<div class="container">
	<h2>Checkout</h2>
	<h3>Shipping Address</h3>
	<form action="{{ route('order.store') }}" method="post">
		@csrf

		<div class="form-group">
			<label for="">Name</label>
			<input type="text" name="name" class="form-control">
		</div>

		<div class="form-group">
			<label for="">Address</label>
			<input type="text" name="address" class="form-control">
		</div>

		<div class="form-group">
			<label for="">Phone</label>
			<input type="text" name="phone" class="form-control">
		</div>

		<h4>Payment</h4>

		<div class="form-check">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="payment_method" value="cash_on_delivery">
				Cash on delivery
			</label>
		</div>

		<div class="form-check">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="payment_method" value="bkash">
				bKash
			</label>
		</div>

		<button type="submit" class="btn btn-outline-success mt-3">Place Order</button>
	</form>
</div>

@endsection
