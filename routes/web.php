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
    return view('quests.index');
})->name('home');

Route::get('/zlecenia', [
    'uses' => 'QuestController@quests',
    'as' => 'quests.content'
]);

Route::get('/zlecenia/{quest}', [
    'uses' => 'QuestController@show',
    'as' => 'quests.oneq'
]);

Route::get('/add', 'QuestController@add')->name('add');

Route::post('/save', [
    'uses' => 'QuestController@save',
    'as' => 'quests.save'
]);

Route::delete('/zlecenie/{quest}', [
    'uses' => 'QuestController@destroy',
    'as' => 'quests.destroy'
]);

Route::get('/drukuj/{quest}', [
    'uses' => 'QuestController@druk',
    'as' => 'quests.print'
]);

Route::get('zlecenia/edit/{quest}', [
    'uses' => 'QuestController@edit',
    'as' => 'quests.edit'
]);

Route::put('zlecenia/{quest}', [
    'uses' => 'QuestController@update',
    'as' => 'quests.update'
]);

Auth::routes();
Route::get('/home', 'QuestController@quests');
