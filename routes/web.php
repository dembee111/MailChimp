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
Route::group(['middleware' => ['web']], function(){

      Route::get('/', [
         'as' => 'home',
         'uses' => 'HomeController@index',
      ]);

       Route::post('/newsletter', [
         'as' => 'newsletter.create',
         'uses' => 'NewsletterController@create',
      ]);

});
