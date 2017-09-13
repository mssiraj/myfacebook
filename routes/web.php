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
   // return view('welcome');

    return "Welcome!!!";


});

Route::get('/email', function(){


    $data=['title'=>'This is the title of the email',
        'content'=>'This is the main content of this wonderful email'];


   Mail::send('email.test', $data, function($message){

       $message->to('msiraj@wiuc-ghana.edu.gh','Muhammed Siraj' )->subject('This is to Inform you');

   });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
