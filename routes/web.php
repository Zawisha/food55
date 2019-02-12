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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// СВЯЗАТЬ ТаБЛИЦУ CATEGORY и ARTICLES

//Route::get('/about',['middleware'=>'auth','uses'=>'AboutController@execute','as'=>'about']);

Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'index']);

Route::get('/about',['uses'=>'AboutController@execute','as'=>'about']);

Route::get('/recipes',['uses'=>'RecipesController@execute','as'=>'recipes']);

Route::get('/blog',['uses'=>'BlogController@execute','as'=>'blog']);

Route::get('/blog_single/{id}',['uses'=>'BlogSingleController@execute','as'=>'blog_single']);

Route::get('/category/{name}',['uses'=>'CategoryController@execute','as'=>'category']);

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::match(['get','post'],'/add_article',['uses'=>'AddArticleController@execute','as'=>'add']);

    Route::match(['get','post'],'/edit_article',['uses'=>'EditArticleController@execute','as'=>'edit']);

    Route::delete('/delete_article/{articles}',['uses'=>'DeleteArticleController@execute','as'=>'admin.article.destroy']);

    Route::match(['get','post'],'/edit_one_article/{articles}',['uses'=>'EditOneArticleController@execute','as'=>'edit_one_article']);

    Route::get('/adminka',['uses'=>'AdminCabController@execute','as'=>'adminka']);

    Route::match(['get','post'],'/edit_users',['uses'=>'UsersChangeController@execute','as'=>'users_change']);


});

