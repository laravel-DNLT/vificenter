<?php namespace Modules\Product\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Modules\Product\Entities\Cart;
use Modules\Product\Entities\Cate;
use Modules\Product\Entities\Product;
use Pingpong\Modules\Routing\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller {
	
//	public function index()
//	{
//		$products = Product::all();
//		return view('pages.shop-list', ['products' => $products]);
//	}
//
//	public function AddToCart(Request $request, $id) {
//		$product = Product::find($id);
//		$oldCart = Session::has('cart') ? Session::get('cart') : null;
//		$cart = new Cart($oldCart);
//		$cart->add($product, $product->id);
//
//		$request->session()->put('cart', $cart);
//		dd($request->session()->get('cart'));
//		return redirect()->route('pages.shop-list');
//	}

	public function cate($id) {
		$product_cate = DB::table('products')->select('id','title','imagePath','price','description','cate_id')->where('cate_id', $id)->paginate(5);
		$cate = DB::table('cates')->select('parent_id')->where('id',$product_cate[0]->cate_id)->first();
		$menu_cate = DB::table('cates')->select('id','title','alias')->where('parent_id',$cate->parent_id)->get();
		$name_cate = DB::table('cates')->select('title')->where('id',$id)->first();
		return view('pages.cate',compact('product_cate','cate','menu_cate','name_cate'));
	}

	public function product($id) {
		$product = DB::table('products')->where('id', $id)->first();
		$product_cate = DB::table('products')->select('id','title','imagePath','price','description')->orderBy('id','DESC')->take(4)->get();
		$name_cate = DB::table('cates')->select('title')->first();
		return view('pages.product',compact('product','product_cate','name_cate'));
	}

	public function index() {
		$product = DB::table('products')->select('id','title','imagePath','price','description')->orderBy('id','DESC')->skip(0)->take(4)->get();
		$products = DB::table('products')->select('id','title','imagePath','price','description')->orderBy('id','ASC')->skip(0)->take(4)->get();

		return view('pages.home', compact('product','products'));
	}
}