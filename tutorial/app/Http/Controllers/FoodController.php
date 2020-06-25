<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use Image;
use Storage;
use Response;
class FoodController extends Controller
{

    public function index() {
    	$foods = Food::all();
    	return view('food.index', compact('foods'));
    }

    public function create() {
    	return view('category.create');
    }

    public function store(Request $request) {
         $validatedData = $this->validate($request, [
        'name'         => 'required|min:3|max:255',
        'email'         => 'required|min:3',
        'image'         => 'sometimes|image',
        //'pdf'  => 'required|mimes:doc,docx,pdf,txt|max:2048'
        'pdf'  => 'sometimes|file'
 
      ]);
        

        $food= Food::create($validatedData);

      if ($request->hasfile('image')) {

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = storage_path('app/public/images/') . $filename;
        Image::make($image)->save($location);
        $food->image = $filename;
        $food->save();
      }

    if ($request->hasfile('pdf')) {
         $pdf = $request->file('pdf');
         $filename = time().'.'.$pdf->getClientOriginalName();
         Storage::disk('local')->put(
        'public/pdfs/'.$filename,$pdf);
         $food->pdf = $filename;
         $food->save();
       }
      
      return redirect('food');   
}       
     public function edit($id) {
          	$food = Food::find($id);
          	return view('food.edit', compact('food'));
      }


    public function update($id, Request $request) {
        $validatedData = $this->validate($request, [
       'name'         => 'required|min:3|max:255',
        'email'         => 'required|min:3',
        'image'         => 'sometimes|image',
        'pdf' => 'sometimes|image' 
      ]);
        $food = Food::find($id); 
       $food->update($validatedData);

      if ($request->hasfile('image')) {
        Storage::disk('public')->delete("images/$category->image");
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = storage_path('images/') . $filename;
        Image::make($image)->save($location);
        $food->image = $filename;
        $food->save();
      }
     
    	return redirect('category');
    }

    public function destory($id) {
      $food = Food::find($id);
      Storage::disk('public')->delete("images/$food->image"); 
      $food->delete();

    return redirect('food');
    } 


        public function download($id,Request $request){
            
                $food = Food::find($id);
                $path= public_path(). "pdfs".$food->pdf;

                $headers = array(
                        'Content-Type: application/pdf',
                      );
                return Response::download($path,$food->pdf,$headers);
                

        }


}




