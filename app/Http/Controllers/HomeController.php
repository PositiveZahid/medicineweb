<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		$products = Product::take(10)->get();
		$cartItems = \Cart::session(auth()->id())->getContent();
		
		return view('home', ['products' => $products, 'cartItems' => $cartItems]);
		return view('home');
	}

	public function prescription()
	{
		return view('home.prescription');
	}

	//API Functions
	public function products()
	{
		return Product::all();
	}

	public function cart_items()
	{
		return \Cart::session(auth()->id())->getContent();
	}
}
