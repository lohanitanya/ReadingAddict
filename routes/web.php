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

// Route::get('/', function () {
//     return view('homepage');
// });

/*
Route::post('test',function(){});


Route::get('test',function(){
	echo 'form action="test "method ="POST">';
	echo '<input type="submit">';
	echo '</form>';
});*/

Route::get('reader',function(){
	return view('reader');
});

Route::get('/reader/{id}', 'ReaderController@reader');//,firstname,lastname

Route::get('/reader/fill', function(){
	return view('reader');
});

Route::get('/submit', 'ReaderController@submit');

// Route::get('reader/{id}', 'ReaderController@reader');


// Route::get('/', function () {
	
// 	return view('reader',compact('readers'));
// });