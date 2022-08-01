<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Database\Eloquent\Model;

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
Route::resource('posts', PostController::class);

Route::resource('forms', FormController::class);

Route::resource('products', ProductController::class);

Route::resource('cruds', CrudController::class);

Route::resource('informs', InformController::class);

Route::resource('projects', ProjectController::class);

Route::resource('datas', DataController::class);

Route::resource('customers', CustomerController::class);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::namespace("User")->prefix('user')->group(function(){
// Route::get('/', 'HomeController@index')->name('user.home');

// Route::namespace('Auth')->group(function(){
// Route::get('/login', 'LoginController@showLoginForm')->name('user.login');
// Route::post('/login', 'LoginController@login');
 Route::post('logout', 'LoginController@logout')->name('user.logout');
// 	});
// });
