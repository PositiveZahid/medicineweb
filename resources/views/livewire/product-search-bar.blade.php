<div class="relative mt-3 md:mt-0">
	<input type="text" name="" class="form-control" placeholder="Search Products" wire:model="query">
	<div>
		<ul class="list-unstyled" style="padding-top: 5">
			@foreach ($searchResults as $result)
			<li>
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">{{ $result->name }}</h4>
						<p class="card-text">{{ $result->unit_price }} Tk.</p>
					</div>
					<div class="card-body">
						<a href="{{ route('cart.add', $result->id) }}" class="card-link">Add to cart</a>
					</div>
				</div>
				@endforeach
			</li>
		</ul>
	</div>
</div>
