<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Art;
use Image;
use Storage;
use Response;
use Redirect;
use App\Http\Requests\ArtRequest;
class ArtController extends Controller
{
   public function index() {
    	 $arts = Art::all();
    	 return view('art.index', compact('arts'));
    }

    public function create() {
    	return view('art/create');
    }

	public function store(ArtRequest $request) {     
			// $art=$request->all();  
			// $filename=$this->imageUpload($request);
			// $art['image'] = $filename;
			// $art=Art::create($art); 
	  //     return redirect('art'); 

        if ($request->hasfile('image')) {

          foreach ($request->file('image') as $image)
           {
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/',$name);
            $data[]=$name;
            //var_dump($data);           
          }
          $form=$request->all();
          $form['image']=json_encode($data);
          Art::create($form);
         return redirect('art');
        }
       
	}

 	public function edit($id) {
    	$art = Art::find($id);
    	return view('art.edit', compact('art'));


    }

    public function update($id,Request $request) {
      if ($request->hasfile('image')) {

          foreach ($request->file('image') as $image)
           {
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/storage/images/',$name);
            $data[]=$name;
            //var_dump($data);           
          }
        }
          $form=$request->all();
          if (!empty($data)) {
            $form['image']=json_encode($data);
          }
          
          Art::find($id)->update($form);

         return redirect('art');
        
     
     
    }

    public function destory($id) {
      $art = Art::find($id);
      Storage::disk('public')->delete("images/$art->image"); 
      $art->delete();
      return redirect('art');
    } 

      public function imageUpload($request){
      	if ($request->hasfile('image')) {
	        $image = $request->file('image');
	        $filename = time() . '.' . $image->getClientOriginalExtension();
	        $location = storage_path('app/public/images/') . $filename;
	        Image::make($image)->save($location);
			return $filename;	        
        }
      }
      
      
}
