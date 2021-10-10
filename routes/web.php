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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::resource('author', AuthorController::class);

Route::get('search','SearchController@index');

Route::resource('post', PostController::class);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/store', 'PostController@store')->name('post.store');
Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/post/show/{id}', 'PostController@show')->name('post.show');

Route::get('/post/edit/{id}', 'PostController@edit')->name('post.edit');
Route::put('/post/edit/{id}', 'PostController@update')->name('post.update');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');

Route::get('/userposts', 'PostController@userposts')->name('userposts');

Route::get('/aboutme', 'PostController@aboutme')->name('aboutme');
Route::get('/booklist', 'PostController@booklist')->name('booklist');


Route::get('/book/create', 'BookController@create')->name('book.create');
Route::get('/book', 'BookController@index')->name('book');
Route::get('/book/show/{id}', 'BookController@show')->name('book.show');



Route::resource('contact', 'ContactController');
Route::get('contact', 'ContactController@index')->name('contact.index');
Route::get('contact/create', 'ContactController@create')->name('contact.create');
Route::get('contact/store', 'ContactController@store')->name('contact.store');

Route::get('search', 'ContactController@search')->name('search');

Route::resource('category', 'CategoryController');


Route::resource('products', ProductController::class);
//Route::get('products', 'ProductController@index')->name('products');
//Route::get('product/create', 'ProductController@create')->name('product.create');
//Route::get('showbooks', 'ProductController@showbook')->name('showbooks');



Route::get('/aboutme', 'ContactController@aboutme')->name('aboutme');
Route::get('/blog', 'ContactController@blog')->name('blog');
Route::get('showbooks', 'ContactController@showbook')->name('showbooks');



Route::get('search','SearchController@index');
Route::get('search', [SearchController::class, 'index'])->name('search');
Route::get('autocomplete', [SearchController::class, 'autocomplete'])->name('autocomplete');

Route::get('/search/', 'ContactController@search')->name('search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('school', 'SchoolController');

Route::get('contactus', 'SchoolController@contactus');
Route::get('medical', 'SchoolController@medical');
Route::get('school', 'SchoolController@index');
Route::get('notices', 'SchoolController@notices');
Route::get('admission', 'SchoolController@admission');


Route::resource('static', 'SchoolstaticController');
Route::get('aboutus', 'SchoolstaticController@aboutus');
Route::get('tsc', 'SchoolstaticController@tsc');
Route::get('library', 'SchoolstaticController@library');

Route::resource('department', 'SchooldepartmentController');
Route::get('department', 'SchooldepartmentController@department');
Route::get('cost', 'SchooldepartmentController@cost');


Route::resource('student', 'StudentController');
Route::get('result', 'StudentController@result');
Route::get('profile', 'StudentController@profile');






