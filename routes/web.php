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

//home
Route::get('/', 'PagesController@welcome');

//galerij
Route::get('image-gallery', 'ImageGalleryController@index');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');

//adminpages
Route::get('/admincarcassonne', 'AdminController@carcassonne');
Route::get('/admintoernooischema', 'AdminController@admintoernooischema');
Route::get('/scorestoevoegen', 'AdminController@scorestoevoegen');
Route::get('/dashboard', 'AdminController@dashboard');

//userpages
Route::get('/overons', 'PagesController@overons');
Route::get('/image-gallery', 'ImageGalleryController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/registratievoltooid', 'PagesController@registratievoltooid');
Route::get('/ranglijst', 'PagesController@ranglijst');
Route::get('/algemeneranglijst2019', 'PagesController@algemeneranglijst2019');
Route::get('/toernooiregels', 'PagesController@toernooiregels');
Route::get('/algemenevoorwaarden', 'PagesController@algemenevoorwaarden');
Route::get('/toernooischema', 'PagesController@toernooischema');
Route::get('/carcassonne2019', 'PagesController@carcassonne2019');
Route::get('/inschrijven', 'PagesController@inschrijven');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
