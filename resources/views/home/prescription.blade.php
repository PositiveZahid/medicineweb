@extends('layouts.app')

@section('content')

<div class="container">
	<form action="{{ route('prescription-order.store') }}" method="post" enctype="multipart/form-data">
		@csrf

		<h3>Upload Prescription</h3>
		<div class="form-group d-flex flex-column">
			<input type="file" name="image" class="py-3">
		</div>

		<div class="form-group">
			<label for="">Number of Days</label>
			<input type="text" name="n_days" class="form-control">
		</div>

		<h3>Shipping Address</h3>
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

		<button type="submit" class="mt-3 btn btn-outline-success">Place Order</button>
	</form>
</div>

@endsection
