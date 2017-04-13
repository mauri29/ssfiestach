<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Post $post)
    {
        //Alert::info('Wir hoffen, diese Infos gefallen dir | Esperamos, esta información sea de tu agrado', 'Blog Time!')->persistent("Super Fiesta")->autoclose(10000);
    	return view('blog.blog')->with(['posts' => $post->latestFirst()->isLive()->get(), 'posts' => Post::paginate(21)]);
    }

    public function tagged(Tag $tag)
    {
    	return view('posts.tag')->with([
    		'posts' => $tag->posts()->latestFirst()->isLive()->get(),
    		'tag' => $tag,
    		//'posts' => $post->latestFirst()->get(),
    	]);
    }
}
