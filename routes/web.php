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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/about', function () {
//    return view('about');
//});
Route::get('/about', 'PageController@about')->name('about.index');
Route::get('/team', 'PageController@team');

// Название сущности в URL во множественном числе, контроллер в единственном
Route::get('/articles', 'ArticleController@index')
    ->name('articles.index'); // имя маршрута, нужно для того чтобы не создавать ссылки руками

Route::get('/articles/create', 'ArticleController@create')
    ->name('articles.create');

// POST запрос
Route::post('/articles', 'ArticleController@store')
    ->name('articles.store');

# id – параметр, который зависит от конкретной статьи
# Фигурные скобки нужны для описания параметров маршрута
Route::get('/articles/{id}', 'ArticleController@show')
    ->name('articles.show');

Route::get('/articles/{id}/edit', 'ArticleController@edit')
    ->name('articles.edit');

// Метод PATCH
Route::patch('/articles/{id}', 'ArticleController@update')
    ->name('articles.update');

Route::delete('/articles/{id}', 'ArticleController@destroy')
    ->name('articles.destroy');
