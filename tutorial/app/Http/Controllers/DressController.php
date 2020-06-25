<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;


class DressController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
   
    

    public function index() {
    	$dresses = Dress::all();
    	return view('dress.index', compact('dress'));
    }
     public function create() {
    	return view('dress.create');
    }

     public function store(Request $request) {
        // $this->validate($request,[

        //     'select_file' => 'required|photo|mimes:jpeng,png,jpg,fif|max:2048'
        // ]);
        // $photo = $request->file('select_file');
        // $new_name=$random().'.'.$photo -> getClientOriginalExtension();
        // $photo->move(public_path("photo"),$new_name);
        // return black()->with('dress','Image Uploade')->with('path',$new_name);
        
        Dress::create($request->all());
        return redirect('dress');
    }

    public function edit($id) {
        $dress = Dress::find($id);
        return view('dress.edit', compact('dress'));
    }
    public function update($id, Request $request) {
    	Dress::find($id)->update($request->all());
    	return redirect('dress');
    }

    public function destory($id) {
    	Dress::find($id)->delete();
    	return redirect('dress');
    } 
    
  

}
