<?php
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Testing\TestController;
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
    //return view('welcome');
    return view('talk');
})->name('homepage');

//Auth::routes();

Route::get('/authtest', 'Auth\AuthController@login')->name('login');

Route::get('/authtest/logout', 'Auth\AuthController@logout')->name('logout');

Route::post('/authtest', 'Auth\AuthController@authenticate');

Route::get('/authtest/messageAuth', 'Auth\AuthController@messageAuth')->name('auth');

Route::post('/authtest/register', 'Auth\AuthController@register')->name('register');

Route::get('/todo/{id}', 'TodoController@destroy');

Route::get('/todo', 'TodoController@index');

Route::post('/todo', 'TodoController@update');

Route::delete('/todo/{id}', 'TodoController@destroy');

//Auth::routes();

Route::get('/DB', function(){
	return view('database');
});

Route::get('test/create', [TestController::class, 'create']);

Route::post('test', [TestController::class, 'store']);
