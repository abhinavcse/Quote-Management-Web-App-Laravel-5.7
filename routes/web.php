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

Route::get('/','IndexController@index')->name('index');
Route::get('/authors','IndexController@getAuthors')->name('authors');

Route::get('/submit-contact','IndexController@getContact')->name('contact');
Route::post('/submit-contact','IndexController@submitContact')->name('contact_submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post-quote', 'HomeController@postQuote')->name('post_quote');
Route::post('/post-quote', 'HomeController@postQuoteSubmit')->name('quote_submit');
Route::post('/quote-update-submit', 'HomeController@postQuoteUpdate')->name('quote_update_submit');

Route::get('/quote-delete/{id}', 'HomeController@quoteDelete')->name('quotedelete');
Route::get('/quote-update/{id}', 'HomeController@quoteUpdate')->name('quoteupdate');

Route::get('/update-quote', 'HomeController@updateQuote')->name('update_quote');
Route::get('/query', 'HomeController@insertQuery')->name('query');
Route::post('/query','HomeController@sendMail')->name('sendmail');

Route::get('ajax/getmorequotes/{count}','AjaxController@getmorequotes');
Route::post('/upload-author-photo','HomeController@uploadAuthorPhoto')->name('upload_author_photo');

Route::get('/admin-home','AdminController@index')->name('AdminHome');
Route::get('/add-user','AdminController@addUser')->name('AddUser');
Route::get('/query-reply','AdminController@queryReply')->name('QueryReply');
//Only For Test to Get Data from Database

Route::get('/generateCache','IndexController@createCache');
Route::get('/fetchCache','IndexController@fetchCache');


