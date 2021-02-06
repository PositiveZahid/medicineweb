<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
	public function add(Product $product)
	{
		\Cart::session(auth()->id())->add(array(
			'id' => $product->id,
			'name' => $product->name,
			'price' => $product->unit_price,
			'quantity' => 1,
			'attributes' => array(),
			'associatedModel' => $product
		));

		return back();
	}

	public function index()
	{
		$cartItems = \Cart::session(auth()->id())->getContent();
		
		return view('cart.index', compact('cartItems'));
	}

	public function destroy($itemId)
	{
		\Cart::session(auth()->id())->remove($itemId);
		
		return back();
	}

	public function update($rowId)
	{
		\Cart::session(auth()->id())->update($rowId, [
			'quantity' => array(
				'relative' => false,
				'value' => request('quantity')
			)
		]);

		return back();
	}

	public function checkout()
	{
		if (\Cart::session(auth()->id())->getContent()->count() == 0) {
			return back();
		}
		
		return view('cart.checkout');
	}
}
