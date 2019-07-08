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



/* 
route::get('/about', function(){ 
    return view('pages.about');
});

route::get('/hello',function() { 
    return "<h1>Hello World<h1>";
});


route::get('users/{id}/{name}', function($name, $id){ 
    return 'This is user name: '.$name.' with an ID '.$id;
}); 
 */


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');