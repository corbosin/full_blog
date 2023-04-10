<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
   //     $posts = Post::paginate(3);
    //    $randomPosts = Post::get()->random(2);
    //    $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);
     //   return view('main.index', compact('posts','randomPosts', 'likedPosts'));
    }
}
