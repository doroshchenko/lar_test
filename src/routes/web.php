<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ManageController;
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

Route::controller(ArticleController::class)->group(function () {
    Route::get('/', 'getList');
    Route::get('/articles/{id}', 'getOne');
});

// add auth (basic)
Route::group(['prefix' => 'manage'], function () {
    Route::controller(ManageController::class)->group(function () {
        Route::get('/', 'getList');
        Route::get('/articles/{id}', 'getOne');
        Route::post('/articles', 'create');
        Route::patch('articles/{id}', 'update');
        Route::post('/articles', 'delete');
    });
});
