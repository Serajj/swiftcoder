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
    return view('screens.index');
});

Route::get('/projects', function () {
    return view('screens.project.index');
});

Route::get('/contact', function () {
    return view('screens.contact');
});

Route::get('/dashboard', function () {
    return view('screens.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Auth::routes(['verify'=>true]);


Route::group(['middleware' => ['auth','verified']], function () {

    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

    Route::get('/components', function(){
        return view('components');
    })->name('components');


    Route::resource('users', 'App\Http\Controllers\UserController');

    Route::get('/profile/{user}', 'App\Http\Controllers\UserController@profile')->name('profile.edit');

    Route::post('/profile/{user}', 'App\Http\Controllers\UserController@profileUpdate')->name('profile.update');

    Route::resource('roles', 'App\Http\Controllers\RoleController')->except('show');

    Route::resource('permissions', 'App\Http\Controllers\PermissionController')->except(['show','destroy','update']);

    Route::resource('category', 'App\Http\Controllers\CategoryController')->except('show');

    Route::resource('post', 'App\Http\Controllers\PostController');

    Route::get('/activity-log', 'App\Http\Controllers\SettingController@activity')->name('activity-log.index');

    Route::get('/settings', 'App\Http\Controllers\SettingController@index')->name('settings.index');

    Route::post('/settings', 'App\Http\Controllers\SettingController@update')->name('settings.update');


    Route::get('media', function (){
        return view('media.index');
    })->name('media.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
