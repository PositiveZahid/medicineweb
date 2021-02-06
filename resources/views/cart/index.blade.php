@extends('layouts.app')

@section('content')

<div class="container">
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

@endsection
