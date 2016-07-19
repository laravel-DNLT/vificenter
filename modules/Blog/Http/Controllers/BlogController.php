<?php namespace Modules\Blog\Http\Controllers;


use App\Jobs\BlogIndexData;
use Illuminate\Http\Request;
use Pingpong\Modules\Routing\Controller;
use Carbon\Carbon;
use Modules\Blog\Entities\Post;
class BlogController extends Controller {

	public function index(Request $request)
	{
		$tag = $request->get('tag');
		$data = $this->dispatch(new BlogIndexData($tag));
		$layout = 'blog.index';

		return view($layout, $data);
	}

	public function showPost($slug, Request $request)
	{
		$post = Post::with('tags')->whereSlug($slug)->firstOrFail();
		$tag = $request->get('tag');
		if ($tag) {
			$tag = Tag::whereTag($tag)->firstOrFail();
		}
		$post->layout='blog.post';
		return view($post->layout, compact('post', 'tag'));
	}

	
}