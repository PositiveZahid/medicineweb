<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductSearchBar extends Component
{
	public $query = '';

	public function render()
	{
		$searchResults = [];
		if(strlen($this->query) > 2)
		{
			$searchResults = Product::where('name', 'like', '%'.$this->query .'%')->get();
		}
		
		return view('livewire.product-search-bar', ['searchResults' => $searchResults]);
	}
}
