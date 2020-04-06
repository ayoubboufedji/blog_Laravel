<?php


use App\Mail\ContactMessageCreated;
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
Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'HomeController@index');
//Route::get('/Articles/{post_name}', 'ArticlesController@show');
//Route::get('/Articles', 'ArticlesController@index');
Route::resource('Articles', 'ArticlesController');




Route::get('/Contact', [
    'as'=> 'contact_path',
    'uses' => 'ContactController@create'
    ] );

Route::post('/Contact', [
'as'=> 'contact_path',
'uses' => 'ContactController@store'
] );



