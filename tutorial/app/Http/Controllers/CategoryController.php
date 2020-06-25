<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Category;
use Image;
use DB;
use Storage;
use Response;
use Redirect;
use View;
class CategoryController extends Controller
{
 

    public function index() {
    	$categories = Category::all();
    	return view('category.index', compact('categories'));
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
        

        $category = Category::create($validatedData);

      if ($request->hasfile('image')) {

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = storage_path('app/public/images/') . $filename;
        Image::make($image)->save($location);
        $category->image = $filename;
        $category->save();
      }
       
    if ($request->hasfile('pdf')) {
         $pdf = $request->file('pdf');
         $filename = time().'.'.$pdf->getClientOriginalName();
         Storage::disk('local')->put(
        'public/pdfs/'.$filename,$pdf);
         $category->pdf = $filename;
         $category->save();
       }
     
    
      return redirect('category');   
}       
     public function edit($id) {
          	$category = Category::find($id);
          	return view('category.edit', compact('category'));
      }


    public function update($id, Request $request) {
        $validatedData = $this->validate($request, [
       'name'         => 'required|min:3|max:255',
        'email'         => 'required|min:3',
        'image'         => 'sometimes|image',
        'pdf' => 'sometimes|image' 
      ]);
        $category = Category::find($id); 
       $category->update($validatedData);

      if ($request->hasfile('image')) {
        Storage::disk('public')->delete("images/$category->image");
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = storage_path('images/') . $filename;
        Image::make($image)->save($location);
        $category->image = $filename;
        $category->save();
      }
     
    	return redirect('category');
    }

    public function destory($id) {
      $category = Category::find($id);
      Storage::disk('public')->delete("images/$category->image"); 
      $category->delete();

    return redirect('category');
    } 
        public function download(Request $request, $id){
            
        $category = Category::find($id);
                $pdf= public_path(). "/pdfs".$category->pdf;

                $headers = array(
                        'Content-Type: application/pdf',
                      );
                return Response::download($pdf,$category->pdf,$headers);
        }

        

}




