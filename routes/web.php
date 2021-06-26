<?php

use App\Http\Controllers\TodoController;
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
// Route::middleware('auth')->group(function(){
    Route::resource('/todo',TodoController::class);
    Route::put('/todos/{todo}/complete', 'App\Http\Controllers\TodoController@complete')->name('todo.complete');
    Route::delete('/todos/{todo}/incomplete', 'App\Http\Controllers\TodoController@incomplete')->name('todo.incomplete');
// });


// Route::get('/todos', 'App\Http\Controllers\TodoController@index')->name('todo.index');
// Route::get('/todos/create', 'App\Http\Controllers\TodoController@create');
// Route::post('/todos/create', 'App\Http\Controllers\TodoController@store');
// Route::get('/todos/{todo}/edit', 'App\Http\Controllers\TodoController@edit');
// Route::patch('/todos/{todo}/update', 'App\Http\Controllers\TodoController@update')->name('todo.update');
// Route::delete('/todos/{todo}/delete', 'App\Http\Controllers\TodoController@delete')->name('todo.delete');

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');

Route::get('/users', 'App\Http\Controllers\UserController@index');

// Route::post('/upload', 'UserController@uploadAvatar');


/*Route::get('/user', function () {
     return 'the is user mode';
}); */






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');