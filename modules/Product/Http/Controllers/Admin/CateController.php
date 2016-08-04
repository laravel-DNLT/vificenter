<?php namespace Modules\Product\Http\Controllers\Admin;

use Modules\Product\Entities\Cate;
use Modules\Product\Http\Requests\CateCreateRequest;
use Modules\Product\Http\Requests\CateUpdateRequest;
use Pingpong\Modules\Routing\Controller;

class CateController extends Controller {
	
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$cate = Cate::all();
		return view('admin.cate.index',['cate' => $cate]);
	}

	public function create() {
		$parent = Cate::select('id','title','alias','parent_id')->get()->toArray();
		return view('admin.cate.create',['parent' => $parent]);
	}

	public function store(CateCreateRequest $request) {
		$cate = new Cate;
		$cate->title = $request->title;
		$cate->alias = changeTitle($request->title);
		$cate->parent_id = $request->sltParent;
		$cate->save();
		return redirect()->route('admin.cate.index')->withSuccess('New Category Successfully Created');
	}
	
	public function edit($id) {
		$cate = Cate::findOrFail($id);
		$parent = Cate::select('id','title','parent_id')->get()->toArray();
		return view('admin.cate.edit', compact('cate','parent','id'));
	}
	
	public function update(CateUpdateRequest $request, $id ) {
		$cate = Cate::findOrFail($id);
		$cate->title = $request->title;
		$cate->alias = changeTitle($request->title);
		$cate->parent_id = $request->sltParent;
		$cate->save();
		return redirect()->route('admin.cate.index')->withSuccess('Category Successfully Updated');
	}
	
	public function destroy ($id) {
		$parent = Cate::where('parent_id',$id)->count();
		if($parent == 0){
			$cate = Cate::find($id);
			$cate->delete($id);
			return redirect()->route('admin.cate.index')->withSuccess('Category Successfully Deleted');
		}else {
			echo"<script type='text/javascript'>
				window.alert('Error! Can not Delete This Category');
				window.location = '";
			echo route('admin.cate.index');
			echo"'
			</script>";
		}
	}
}