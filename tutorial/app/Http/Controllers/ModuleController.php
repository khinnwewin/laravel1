<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Module;

use DB;
use Storage;
use Response;
use Redirect;
use View;
class ModuleController extends Controller
{
 

    public function index() {
    	$modules = Module::all();
    	return view('module.index', compact('modules'));
    }

    public function create() {
    	return view('module.create');
    }

    public function store(Request $request) {
        
        
        Module::create($request->all());
        return redirect('module');
    }
      public function edit($id) {
        $module = Module::find($id);
        return view('module.edit', compact('module'));
    }
    public function update($id, Request $request) {
        Module::find($id)->update($request->all());
        return redirect('module');
    }

    public function destory($id) {
        Module::find($id)->delete();
        return redirect('module');
    } 

}





