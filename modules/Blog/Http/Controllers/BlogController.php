<?php namespace Modules\Blog\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Carbon\Carbon;
use Modules\Blog\Entities\Post;
class BlogController extends Controller {
	
	public function index()
	{
		$posts = Post::where('published_at', '<=', Carbon::now())
			->orderBy('published_at', 'desc')
			->paginate(config('blog.posts_per_page'));

		return view('blog.index', compact('posts'));
	}
	public function showPost($slug)
	{
		$post = Post::whereSlug($slug)->firstOrFail();

		return view('blog.post')->withPost($post);
	}

	
}