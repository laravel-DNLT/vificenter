<?php namespace Modules\Product\Http\Controllers\Admin;

use Modules\Product\Entities\Cate;
use Modules\Product\Entities\Product;
use Modules\Product\Http\Requests\ProductCreateRequest;
use Modules\Product\Http\Requests\ProductUpdateRequest;
use Pingpong\Modules\Routing\Controller;

class ProductsController extends Controller {
	
	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
	{
		$product = Product::all();
//		$paginate = Product::select('id','title','imagePath','description')->where('id',$id)->paginate(10);
		return view('admin.product.index', compact('product'));
	}
	
	public function create() {
		$cate = Cate::select('id','title','alias','parent_id')->get()->toArray();
		return view('admin.product.create',['cate' => $cate]);
	}

	public function store(ProductCreateRequest $request) {
		$file_name = $request->file('image')->getClientOriginalName();
		$product = new Product();
		$product->title = $request->title;
		$product->price = $request->price;
		$product->imagePath = $file_name;
		$product->description = $request->descriptions;
		$product->cate_id = $request->sltParent;
		$request->file('image')->move('uploads/wine/image/',$file_name);
		$product->save();
		return redirect()->route('admin.product.index')->withSuccess('New Product Successfully Created');
	}
	
	public function edit($id) {
		$cate = Cate::select('id','title','parent_id')->get()->toArray();
		$product = Product::findOrFail($id);
		return view('admin.product.edit', compact('product','cate','id'));
	}
	
	public function update(ProductUpdateRequest $request, $id) {
		$file_name = $request->file('image')->getClientOriginalName();
		$product = Product::findOrFail($id);
		$product->title = $request->title;
		$product->price = $request->price;
		$product->description = $request->descriptions;
		$product->cate_id = $request->sltParent;
		$product->imagePath = $file_name;
		$request->file('image')->move('uploads/wine/image/',$file_name);
		$product->save();
		return redirect()->route('admin.product.index')->withSuccess('Product Successfully Updated');
	}

	public function destroy($id) {
		$product = Product::findOrFail($id);
		$product->delete();
		return redirect()->route('admin.product.index')->withSuccess('Product Successfully Deleted');
	}
	
}