<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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
 
Route::get('/commentaire',function () { return view('commentaire');});
 
Route::controller(ArticleController::class)->group(function(){
    Route::get('/articles','index')->name('articles'); 
    Route::get('/articles/create', 'create')->name('article.create');
    Route::post('/articles/store', 'store')->name('article.store');
    Route::get('/articles/{id}/edit', 'edit')->name('article.edit');
    Route::get('/articles/{id}', 'show')->name('article.show');
    Route::put('/articles/{id}/update','update')->name('article.update');
    Route::delete('/articles/{id}/delete','delete')->name('article.delete'); 
 });
 
 