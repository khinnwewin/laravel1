<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class;

class CategoryController extends Controller
{
    public function index() {
    	$classes = Class::all();
    	return view('class.index', compact('classes'));
    }

  
}





