<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Post;
class FrontBlogController extends Controller
{
    public function index()
    {
        //$posts = Post::orderBy('created_at', 'desc')->get();
        $posts = DB::table('posts')->paginate(10);
        $lposts = Post::orderBy('created_at', 'desc')->take(5)->get();
        return view('blog', compact('posts','lposts'));
    }
    public function blog_details($slug)
    {
        $post_details = Post::where('slug', $slug)->first();
        $lposts = Post::orderBy('created_at', 'desc')->take(5)->get();
        //dd($lposts);
        return view('blog_details', compact('post_details','lposts'));
    }
}
