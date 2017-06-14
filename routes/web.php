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
use App\Article;
Route::get('/', function () {
	//$articles = Article::all();
	//$articles = Article::orderBy('created_at','desc')->get();
	//$articles = Article::inRandomOrder()->get()->take(3);
	$articles = Article::inRandomOrder()->paginate(10);
	$title = 'VeBLoG';
    return view('welcome',['title'=>$title, 'articles'=>$articles]);
});

Route::group(['middleware'=> 'App\Http\Middleware\AdminMiddleware'], function(){
	Route::get('/article', function(){
		return view('postarticle');
	});
});

//new
Route::get('/articles', 'ArticleController@listarticles');

Route::get('/viewarticles{id}', 'ArticleController@thearticles');

Route::post('/uploadarticle', 'ArticleController@articlepost');

Route::post('/uploadcomment', 'ArticleController@commentupload');

Route::get('/about', 'ArticleController@aboutVe');

Route::post('/postmail', 'ArticleController@mailpost');

Route::get('/subscribers', 'ArticleController@viewsubs');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
