<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth'], 'prefix' => 'admin/', 'name' => 'admin.'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::get('/create/short-url', 'DashboardController@create')->name('admin.create.short_url');
    Route::post('/store/short-url', 'DashboardController@store')->name('admin.store.short_url');
    Route::get('/destroy/short-url/{id}', 'DashboardController@destroy')->name('admin.short_url.delete');
});



require __DIR__ . '/auth.php';
