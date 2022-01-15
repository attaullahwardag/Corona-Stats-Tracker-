<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FrontController extends Controller
{
    public function index(){
        //$post= Post::all();
        $post = Post::orderBy('created_at', 'desc')->take(15)->get();
        //dd($post);
        return view('welcome', compact('post'));
    }
    public function country($country){
        return view('country',compact('country'));
    }
    public function covid(){
        return view('covid');
    }
    public function about(){
        return view('about');
    }
    public function privacy()
    {
        return view('privacy');
    }
}
