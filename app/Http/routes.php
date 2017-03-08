<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	/** ini contoh tanpa menggunakan view
    return 'Halaman Homepage.<br>
    		selamat Belajar Laravel';
   	*/

   	return view('pages.homepage');
});

Route::get('about', function(){
	//return view('pages/about'); alternate
	return view('pages.about');
});

/**
function pake alias named route
*/
route::get('halaman-rahasia', ['as' => 'secret', function(){
	return 'Anda sendang melihat <strong> halaman-rahasia </strong>';
}]);
/**pemanggil alias named route secret
*/
route::get('showmesecret', function(){

	return redirect()->route('secret');
});

route::get('siswa', function(){
	$siswa = ['Rasmus Ledorf', 'Taylor Otwel', 'Brendan Eich', 'John Resig'];
	return view('siswa.index', compact('siswa'));
});