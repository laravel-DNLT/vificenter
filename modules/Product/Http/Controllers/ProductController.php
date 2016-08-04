<?php namespace Modules\Product\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Modules\Product\Entities\Cart;
use Modules\Product\Entities\Cate;
use Modules\Product\Entities\Product;
use Pingpong\Modules\Routing\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller {
	
	public function index()
	{
		$products = DB::table('products')->select('id','title','imagePath','price','description')->orderBy('id','DESC')->skip(0)->take(4)->get();
		$product = DB::table('products')->select('id','title','imagePath','price','description')->orderBy('id','ASC')->skip(0)->take(4)->get();
		return view('pages.homes', compact('products','product'));
	}

	public function blog() {
		$cate = DB::table('cates')->select('parent_id')->first();
		$menu_cate = DB::table('cates')->select('id','title','alias')->where('parent_id',$cate->parent_id)->get();
		return view('pages.blog', compact('menu_cate'));
	}
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

//	public function index() {
//		$nproduct = Product::all();
////		dd($nproduct);
//		return view('pages.home', ['nproduct' => $nproduct]);
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

	public function contact() {
		return view('pages.form.contact');
	}
	public function sale() {
		return view('pages.form.sale-contact');
	}
	public function change() {
		return view('pages.form.change-order');
	}
	public function Crequest() {
		return view('pages.form.change-request');
	}
	public function Porder() {
		return view('pages.form.purchase-order');
	}
	public function Rquote() {
		return view('pages.form.request-quote');
	}
	public function Sform() {
		return view('pages.form.supply-form');
	}
	public function vendor() {
		return view('pages.form.vendor');
	}
}