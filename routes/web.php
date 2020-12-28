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
*/
/*
localhost/dashboard/
localhost/dashboard/products*/
Route::get('train','TrainController@querybuilder');
Route::get('orm','TrainController@orm');
Route::get('relationship','TrainController@relationship');
Route::get('polyRelation', 'TrainController@polyRelation');
Route::get('encrypt', 'TrainController@encrypt');


Route::get('login', 'AuthController@login')->name('login');
Route::post('authenticate', 'AuthController@authenticate')->name('authenticate');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('register', 'AuthController@register')->name('register');
Route::post('register', 'AuthController@do_register')->name('do_register');


Route:: namespace('Dashboard')->middleware('auth')->name('dashboard.')->prefix('admin')->group(function (){

 Route::get('/','DashboardController@index')->name('home');
 Route::resource('posts','PostController');
 Route::resource('users','UserController');
 Route::resource('categories','CategoryController');
});


Route::get('/','FrontSiteController@showHome')->name('frontSite.index');
Route::get('/about','FrontSiteController@showAbout')->name('frontSite.about');
Route::get('/blog','FrontSiteController@showBlog')->name('frontSite.blog');
Route::get('/contact','FrontSiteController@showContact')->name('frontSite.contact');
Route::get('/proj1','FrontSiteController@showProj1')->name('frontSite.proj1');
Route::get('/projects','FrontSiteController@showProjects')->name('frontSite.projects');
Route::get('/singlePost','FrontSiteController@showSinglePost')->name('frontSite.singlePost');
/*
Route::get('listPosts','Dashboard\PostController@listPosts');
Route::get('showPost','Dashboard\PostController@listPosts');
Route::get('editPost','Dashboard\PostController@listPosts');
Route::get('savePost','Dashboard\PostController@listPosts');
Route::get('deletePost','Dashboard\PostController@listPosts');
Route::get('saveEditPost','Dashboard\PostController@listPosts');
*/
//Route::resource('Users','Dashboard\ UserController');
