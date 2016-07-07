<?php namespace Modules\Product\Http\Controllers;


use Illuminate\Support\Facades\Session;
use Modules\Product\Entities\Cart;
use Modules\Product\Entities\Product;
use Pingpong\Modules\Routing\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller {
	
	public function index()
	{
		$products = Product::all();
		return view('pages.shop-list', ['products' => $products]);
	}

	public function AddToCart(Request $request, $id) {
		$product = Product::find($id);
		$oldCart = Session::has('cart') ? Session::get('cart') : null;
		$cart = new Cart($oldCart);
		$cart->add($product, $product->id);

		$request->session()->put('cart', $cart);
		dd($request->session()->get('cart'));
		return redirect()->route('pages.shop-list');
	}
}