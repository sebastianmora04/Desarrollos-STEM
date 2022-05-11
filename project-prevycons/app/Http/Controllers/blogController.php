<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlog;
class blogController extends Controller
{
    
    public function index(){
        $blogs = Blog::where('is_draft',0)->orderBy('created_at','desc')->simplePaginate(3);
        return view('blog.index',compact('blogs'));
    }
    public function create(){
        return view('blog.create');
    }
    public function store(StoreBlog $request){

        $blog = New Blog();
        $blog->titulo=$request->titulo;
        $blog->informacion=$request->informacion;
        $blog->categoria=$request->categoria;
        
        $blog->save();

        return redirect()->route('blog.show' , $blog);
    }
    public function show(Blog $blog) {

       /* $blog = Blog::find($id); */

        return view('blog.show',compact('blog'));
    }
    public function edit(Blog $blog){

        return view('blog.edit',compact('blog'));

       /* return view('blog.edit',);*/
    }
    public function update(Request $request,Blog $blog){

        $request->validate([
            'titulo' => 'required',
            'informacion' => 'required|min:10',
            'categoria' => 'required'
        ]);

        $blog->titulo=$request->titulo;
        $blog->informacion=$request->informacion;
        $blog->categoria=$request->categoria;
        
        $blog->save();

        return redirect()->route('blog.show' , $blog);
    }
}
