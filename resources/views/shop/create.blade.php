@extends('layouts.app')

@section('content')

<h2>Create shop</h2>

<form action="{{ route('shop.store') }}" method="post">
	@csrf

	<div class="form-group">
		<label for="name">Shop Name</label>
		<input type="text" class="form-control" name="name">
	</div>

	<div class="form-group">
		<label for="location">Location</label>
		<input type="text" class="form-control" name="location">
	</div>

	<div class="form-group">
		<label for="address">Description</label>
		<textarea class="form-control" name="description" rows="3"></textarea>
	</div>

	<button type="submit" class="btn btn-outline-success">Submit</button>
	
</form>

@endsection