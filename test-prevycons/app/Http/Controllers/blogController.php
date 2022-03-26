<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class blogController extends Controller
{
    
    public function index(){
        $blogs = Blog::paginate();
        return view('blog.index',compact('blogs'));
    }
    public function create(){
        return view('blog.create');
    }
    public function show($variable) {
        return view('blog.show',['variable'=> $variable]);
    }
}
