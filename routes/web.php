<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// Route::get('/student', 'StudentsController@index');
// Route::get('/student/create', 'StudentsController@create');
// Route::get('/student/{student}', 'StudentsController@show');
// Route::post('/student', 'StudentsController@store');
// Route::delete('/student/{student}', 'StudentsController@destroy');
// Route::get('/student/{student}/edit', 'StudentsController@edit');
// Route::patch('/student/{student}', 'StudentsController@update');

*/
Route::get('/', 'SiteController@home');
Route::get('/article', 'SiteController@article');
Route::get('/article/{post:slug}', 'SiteController@singlepost')->name('site.single.post');
Route::get('/article/categories/{category:slug}', 'CategoryController@show');
Route::get('/article/tags/{tag:slug}', 'CategoryController@showTags');
Route::get('/event', 'SiteController@event');
Route::get('/guru', 'SiteController@guru');

Auth::routes([ 'verify' => true ]);

Route::view('pilihan', 'auth/pilihan')->name('pilih');
Route::get('/register', 'AuthController@register');
Route::post('/register/post', 'AuthController@postregister')->name('register');
Route::get('/registerGuru', 'AuthController@registerGuru');
Route::post('/registerGuru/post', 'AuthController@postregisterGuru');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login/post', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function(){
	Route::get('/dashboard', 'DashboardController@index');
	Route::get('/profilesaya', 'DashboardController@profilesaya');
});
	
Route::group(['middleware' => ['auth', 'checkrole:guru']], function(){
		Route::get('/guru/posts', 'PostController@postGuru')->name('PostGuru');
		Route::get('/guru/postsadd', 'PostController@PostGuruAdd');
		Route::post('/guru/post/create', 'PostController@PostGuruCreate');
		Route::get('/guru/post/edit/{post:id}', 'PostController@PostGuruEdit');
		Route::patch('/guru/post/update/{post:id}', 'PostController@PostGuruUpdate');
		Route::delete('/guru/post/delete/{id}', 'PostController@PostGuruDelete');
		Route::get('/profileguru', 'GuruController@profileSaya');
});

Route::group(['middleware' => ['auth', 'checkrole:siswa']], function(){
	Route::get('/siswa/{id}/edit', 'StudentsController@editsiswa');
	Route::patch('/siswa/{student}', 'StudentsController@updatesiswa');
});




Route::group(['middleware' => ['auth', 'checkrole:admin']], function(){
	Route::get('/student/exportExcel', 'StudentsController@exportExcel');
	Route::get('/student/exportPdf', 'StudentsController@exportPdf');
	Route::post('/student/importExcel', 'StudentsController@importExcel')->name('siswa_import');
	Route::post('/student/{student}/addnilai', 'StudentsController@addnilai');
	Route::resource('student', 'StudentsController');
	Route::delete('/student/{student}/{idmapel}/deletenilai', 'StudentsController@deletenilai');
	Route::get('/posts', 'PostController@index');
	Route::get('/postsadd', 'PostController@add');
	Route::post('/post/create', 'PostController@create');
	Route::get('/post/edit/{id}', 'PostController@edit');
	Route::patch('/post/update/{id}', 'PostController@update');
	Route::delete('/post/delete/{id}', 'PostController@delete');
	Route::get('/events', 'EventController@index');
	Route::get('/eventadd', 'EventController@add');
	Route::post('/event/create', 'EventController@create');
	Route::get('/guru/{id}/profile', 'GuruController@profile');

});  



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
