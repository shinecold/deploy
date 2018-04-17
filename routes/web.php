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

//Route::get('/', function () {
//return view('user.blog');
//});


//Route::get('post', function () {
 //   return view('user.post');
//})->name( 'post' ); // name is the link for post to click from blog's first post find - *link on blog

//User Routes


Route::group( [ 'namespace' => 'User'], function(){
    Route::get('/', 'HomeController@index');
    Route::get('/about', 'PostController@about');
    Route::get('/contact', 'PostController@contact');
    Route::get('post/{post}', 'PostController@post')->name( 'post' );



    Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
    Route::get('post/category/{category}','HomeController@category')->name('category');
});


//Admin Routes

Route::group( [ 'namespace' => 'Admin'], function(){
    Route::get( 'admin/home', 'HomeController@index')->name( 'admin.home');


    //User routes
    Route::resource( 'admin/user', 'UserController');

    //Role routes
    Route::resource( 'admin/role', 'RoleController');

    //Permissions routes
    Route::resource( 'admin/permission', 'PermissionController');


    //post routes
    Route::resource( 'admin/post', 'PostController');

    //tag routes
    Route::resource( 'admin/tag', 'TagController');

    //category routes
    Route::resource( 'admin/category', 'CategoryController');

    // Admin Auth Routes
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login', 'Auth\LoginController@login');

});

//Route::get('admin/home', function () {
  //  return view('admin.home');
//})->name( 'post' );


//Route::get('admin/post', function () {
 //   return view('admin.post.post');
//});

//Route::get('admin/tag', function () {
  //  return view('admin.tag.tag');
//});


//Route::get('admin/category', function () {
  //  return view('admin.category.category');
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
