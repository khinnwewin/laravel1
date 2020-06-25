<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;
use App\Module;
use DB;
use Storage;
use Response;
use Redirect;
use View;
class PostController extends Controller
{
 

    public function index() {
    	$posts = Post::all();
    	return view('post.index', compact('posts'));
    }

    public function create() {
    	$modules=Module::all();
 
    	return view('post.create',compact('modules'));
    }

    public function store(Request $request) {        
        Post::create($request->all());
        return redirect('post');
               
    }
     public function edit($id) {
         $post = Post::find($id);
         //var_dump($post);
        // return view('post.edit', compact('post'));
        $modules=Module::all();
        return view('post.edit',compact('post','modules'));
    }
    public function update($id, Request $request) {
        Post::find($id)->update($request->all());
        return redirect('post');
    }

    public function destory($id) {
       Post::find($id)->delete();
        return redirect('post');
    } 

   


}





