@extends('layouts.app')

@section('content')
<div class="container">
	<div class="mt-1 row">
		<div class="col-lg-6">
			<div class="relative mt-1 md:mt-0">
				<h4>Order With Your Doctor's Prescription Instead</h4>
				<a href="{{ route('home.prescription') }}" class="btn btn-outline-success">Take Me There</a>
			</div>
			@livewire('product-search-bar')
			<div class="row" style="padding-top: 25">
				@foreach ($products as $product)
				<div class="col">
					<div class="card">
						<img class="card-img-top" src="{{ asset('images/default.jpg') }}">
						<div class="card-body">
							<h4 class="card-title">{{ $product->name }}</h4>
							<p class="card-text">{{ $product->unit_price }} Tk.</p>
						</div>
						<div class="card-body">
							<a href="{{ route('cart.add', $product->id) }}" class="card-link">Add to cart</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>

		<div class="col-lg-6">
			<h2>Your Cart</h2>
			<table class="table table-inverse">
				<thead>
					<tr>
						<th>Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Subtotal</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($cartItems as $item)
					<tr>
						<td scope="row">{{ $item->name }}</td>
						<td>{{ $item->price }}</td>
						<td>
							<form action="{{ route('cart.update', $item->id) }}">
								<input name="quantity" type="number" value="{{ $item->quantity }}">
								<input type="submit" value="save">
							</form>
						</td>
						<td>
							{{ \Cart::session(auth()->id())->get($item->id)->getPriceSum() }} Tk.
						</td>
						<td>
							<a href="{{ route('cart.destroy', $item->id) }}" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<h2>
				Total Price: Tk. {{ \Cart::session(auth()->id())->getTotal() }}
			</h2>
			<a href="{{ route('cart.checkout') }}" class="btn btn-outline-success">Checkout</a>
		</div>
	</div>
</div>
@endsection
