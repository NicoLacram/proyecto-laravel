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

//cualquier persona
Route::get('/', 'WelcomeController@welcome');
Route::get('/faq', 'FaqController@index');
Route::get('/listadoCursos','CourseController@index');
Route::get('/DetalleCurso/{id}','CourseController@show');

//Admin de Cursos = Role 7
Route::get('/adminCourses','AdminCourseController@index')->middleware('role');
Route::get('/createCourses','AdminCourseController@create')->middleware('role');
Route::post('/saveCourses','AdminCourseController@save')->middleware('role');
Route::get('/DetalleCurso/{id}/editCourses','AdminCourseController@edit')->middleware('role');
Route::patch('/DetalleCursoUpdate/{id}', 'AdminCourseController@update')->middleware('role');
Route::get('/DetalleCursoAdmin/{id}','AdminCourseController@show')->middleware('role');
Route::get('/deleteCourse/{id}','AdminCourseController@delete')->middleware('role');


//AdmUser
Route::get('/adminUser','AdmUserController@index')->middleware('role');
Route::get('/detalleUserAdmin/{id}','AdmUserController@show')->middleware('role');
Route::get('/detalleUserAdmin/{id}/editUser','AdmUserController@edit')->middleware('role');
Route::patch('/detalleUserAdmin/{id}','AdmUserController@update')->middleware('role');
Route::get('/deleteUserAdmin/{id}','AdmUserController@destroy')->middleware('role');


//User
Route::get('/UserPerfil/{id}','UserController@profile')->middleware('auth');
Route::get('/UserPerfil/{id}/EditPerfil','UserController@edit')->middleware('auth');
Route::patch('/UserPerfilUpdate/{id}', 'UserController@update')->middleware('auth');

//Carrito
Route::get('cart/add/{id}', "CartController@add")->name('cart.add')->middleware('auth');
//Carrito de compras elimino productos
Route::get('cart/remove/{id}', "CartController@remove")->name('cart.remove')->middleware('auth');
//Muestro los productos del carrito
Route::get('/cart', 'CartController@show');

//Opciones de cursos
Route::get('/blend', 'CourseController@indexblend');
Route::get('/presencial', 'CourseController@indexpresencial');
//buscador
Route::get('/search', 'CourseController@search')->name('product.search');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


