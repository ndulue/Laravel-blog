<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

/*
|--------------------------------------------------------------------------
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'index.get'
]);

//Auth::routes();
Route::get('/post/postid={id}',[
    'uses' => 'DetailController@getDetail',
    'as' => 'detail.get'
]);

Route::post('/post/postid={id}',[
    'uses' => 'DetailController@postDetail',
    'as' => 'detail.post'
]);

Route::get('/category={category}',[
    'uses' => 'CategoryController@getCategory',
    'as' => 'category.get'
]);
Route::get('/contact',[
    'uses' => 'ContactController@getContact',
    'as' => 'contact.get'
]);
Route::get('/about',[
    'uses' => 'AboutController@getAbout',
    'as' => 'about.get'
]);
Route::get('/portfolio',[
    'uses' => 'PortfolioController@getPortfolio',
    'as' => 'portfolio.get'
]);
Route::post('/contact',[
    'uses' => 'ContactController@postContact',
    'as' => 'contact.post'
]);
