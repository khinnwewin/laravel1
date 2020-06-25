<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hh', function () {

	return strtoupper('hello');
});

/*

//insert
Route::get('insert', function () {
	DB::table('staff')->insert(
	    ['name' => 'khin nwe win','address' => 'kyaukpadaung']
	);
});
//select
Route::get('select', function () {
	$staff = DB::table('staff')->get();
	return $staff;

	
});

//update
Route::get('update',function(){
	DB::table('staff')
        ->where('id', 1)
	    ->update(['address' => 'magway']);

});
// REST API => GET POST PUT DELETE
// HTTP Verb => 200, 404, 500

*/
//True
Route::get('category', 'CategoryController@index');

Route::get('category/create', 'CategoryController@create');
Route::post('category', 'CategoryController@store');
Route::get('category/{id}/edit', 'CategoryController@edit');
Route::post('category/{id}/update', 'CategoryController@update');
Route::get('category/{id}/destory', 'CategoryController@destory');

Route::get('category/{id}/download', 'CategoryController@download');




//Route::get('teacher','TeacherController@index');
// Route::get('teacher/create','TeacherController@create');
// Route::post('teacher','TeacherController@store');


//tester
// Route::get('insert', function () {
// 	DB::table('first_year')->insert(
// 	    ['book_title' => 'PHP', 'book_author' => 'Mrs Jone']
// 	);
// });a

 //Route::get('school', 'SchoolController@index');

//Route::get('class', 'ClassController@index');
Auth::routes();
Route::get('dress', 'DressController@index')->name('dress');
Route::get('dress/create', 'DressController@create');
Route::post('dress', 'DressController@store');
Route::get('dress/{id}/edit', 'DressController@edit');
Route::post('dress/{id}/update', 'DressController@update');
Route::get('dress/{id}/destory', 'DressController@destory');


Route::get('art', 'ArtController@index');
Route::get('art/create', 'ArtController@create');
Route::post('art', 'ArtController@store');
Route::get('art/{id}/edit', 'ArtController@edit');
Route::post('art/{id}/update', 'ArtController@update');
Route::get('art/{id}/destory', 'ArtController@destory');


// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');


// Auth::routes();

// Route::get('/dress', 'DressController@index')->name('dress');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('food', 'FoodController@index');
Route::get('food/create', 'FoodController@create');
Route::post('food', 'FoodController@store');
Route::get('food/{id}/edit', 'FoodController@edit');
Route::post('food/{id}/update', 'FoodController@update');
Route::get('food/{id}/destory', 'FoodController@destory');

Route::get('food/{id}/download', 'FoodController@download');



Route::get('module', 'ModuleController@index');
Route::get('module/create', 'ModuleController@create');
Route::post('module', 'ModuleController@store');
Route::get('module/{id}/edit', 'ModuleController@edit');
Route::post('module/{id}/update', 'ModuleController@update');
Route::get('module/{id}/destory', 'ModuleController@destory');



Route::get('post', 'PostController@index');
Route::get('post/create', 'PostController@create');
Route::post('post', 'PostController@store');
Route::get('post/{id}/p_edit', 'PostController@edit');
Route::post('post/{id}/p_update', 'PostController@update');
Route::get('post/{id}/destory', 'PostController@destory');

Route::get('admin',function(){
	return view('admin.index');
});

use App\Module;

Route::get('post/{id}',function($id){

	$module=Module::find($id);
	foreach($module->post as $post){
		echo $post->name , $post->description;
	}
});
use App\Sir;
Route::get('sir/{id}/role',function($id){
	$sir = Sir::find($id);
	//echo $sir->name;
foreach($sir->role as $role){
	echo $role->rank;
}

});




use App\Country;
Route::get('country/{id}/gps',function($id){

$country=Country::find($id);
//echo $country->name;
	foreach ($country->gps as $gps) {

 		echo $gps->title;
	}
});
