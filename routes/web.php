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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Routing untuk reading span task
Route::prefix('/reading')->name('reading.')->group(function(){
    Route::get('/', 'ReadingController@instruksi_pretest')->name('main');
    Route::prefix('/pretest')->name('pretest.')->group(function(){
        Route::prefix('/1')->name('1.')->group(function(){
            Route::get('/kata', 'ReadingPretestController@kata1')->name('kata');
            Route::get('/pernyataan', 'ReadingPretestController@pernyataan1')->name('pernyataan');
            Route::get('/recall', 'ReadingPretestController@recall1')->name('recall');
            Route::post('/postRecall1', 'ReadingPretestController@postRecall1')->name('postRecall1');
        });
        Route::prefix('/2')->name('2.')->group(function(){
            Route::get('/kata', 'ReadingPretestController@kata2')->name('kata');
            Route::get('/pernyataan', 'ReadingPretestController@pernyataan2')->name('pernyataan');
            Route::get('/recall', 'ReadingPretestController@recall2')->name('recall');
            // Route::post('/postRecall1', 'ReadingPretestController@postRecall1')->name('postRecall1');
        });
    });
});