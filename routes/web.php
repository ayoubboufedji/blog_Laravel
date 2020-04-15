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

Route::group(['middleware' => ['web']], function () {

    //Authentification routes
   // Route::get('auth/login', 'Auth\LoginController@showLoginForm');
    //Route::post('auth/login', 'Auth\LoginController@login');
    //Route::get('auth/logout', 'Auth\LoginController@logout');

    //Registration routes
    //Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
   // Route::post('auth/register', 'Auth\RegisterController@postRegister');
    //Route::get('/Articles/{post_name}', 'ArticlesController@show');
    //Route::get('/Articles', 'ArticlesController@index');
    Route::get('/', 'HomeController@welcome');
    Route::resource('Articles', 'ArticlesController');
    Route::get('Articles/{id}/delete', ['uses' => 'ArticlesController@delete', 'as' => 'Articles.delete']);

   // Route::get('About', 'AboutController@index');
    Route::get('/Contact', [
        'as'=> 'contact_path',
        'uses' => 'ContactController@create'
        ] );
    Route::post('/Contact', [
    'as'=> 'contact_path',
    'uses' => 'ContactController@store'

    ] );
    Route::get('Blog', ['uses' => 'BlogController@getIndex', 'as' => 'Blog.getIndex'] );


    //comments


});
Route::post('comments/{post_id}', ['uses' => 'CommentsController@store',
     'as' => 'comments.store',
     'middleware'=>'auth'
     ]);

Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Password routes

Route::post('/postforgot', 'Auth\ForgotPasswordController@postforgot')->name('postforgot');




Route::post('/verifytoken', 'Auth\VerificationTokenController@verifytoken')->name('verifytoken');


Route::get('admin/home', function(){

    return view('admin/home');

    });


    Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
