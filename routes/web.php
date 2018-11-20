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
    return view('page.index');
});

Route::group(['prefix'=>'admin'],function()
{	Route::get('/',['as'=>'admin.index','uses'=>'AdminController@index']);
});

Route::group(['prefix'=>'admin/article'],function()
{
	Route::get('/',['as'=>'article.list_post','uses'=>'adminControllerArticle@list_post']);
	Route::get('add',['as'=>'article.add','uses'=>'adminControllerArticle@add']);
	Route::post('add',['as'=>'article.store','uses'=>'adminControllerArticle@store']);
});