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
        Route::get('/fokus/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@fokus')->name('fokus');
        Route::get('/kata/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@kata')->name('kata');
        Route::get('/pernyataan/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@pernyataan')->name('pernyataan');
        Route::get('/pernyataan/seri/{seri}/iterasi/{iterasi}/jawab/{jawaban}', 'ReadingPretestController@postPernyataan')->name('postPernyataan');
        Route::get('/recall/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@recall')->name('recall');
        Route::post('/postRecall/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@postRecall')->name('postRecall');
    });
    Route::prefix('/main')->name('main.')->group(function(){
        Route::get('/', 'ReadingMainKontrolController@index')->name('index');
        Route::get('/fokus/seri/{seri}/iterasi/{iterasi}', 'ReadingMainKontrolController@fokus')->name('fokus');
        Route::get('/fokus-2/seri/{seri}/iterasi/{iterasi}', 'ReadingMainKontrolController@fokus2')->name('fokus2');
        Route::get('/gambar/seri/{seri}/iterasi/{iterasi}', 'ReadingMainKontrolController@gambar')->name('gambar');
        Route::get('/kata/seri/{seri}/iterasi/{iterasi}', 'ReadingMainKontrolController@kata')->name('kata');
        Route::get('/pernyataan/seri/{seri}/iterasi/{iterasi}', 'ReadingMainKontrolController@pernyataan')->name('pernyataan');
        Route::get('/postPernyataan/seri/{seri}/iterasi/{iterasi}/jawaban/{jawaban}', 'ReadingMainKontrolController@postPernyataan')->name('postPernyataan');
        Route::get('/free-recall/seri/{seri}/iterasi/{iterasi}','ReadingMainKontrolController@freeRecall')->name('freeRecall');
        Route::post('/free-recall/seri/{seri}/iterasi/{iterasi}','ReadingMainKontrolController@postFreeRecall')->name('postFreeRecall');
        Route::get('/serial-recall/seri/{seri}/iterasi/{iterasi}','ReadingMainKontrolController@serialRecall')->name('serialRecall');
        Route::post('/serial-recall/seri/{seri}/iterasi/{iterasi}','ReadingMainKontrolController@postSerialRecall')->name('postSerialRecall');
        Route::get('/skor/seri/{seri}/iterasi/{iterasi}','ReadingMainKontrolController@skor')->name('skor');
    });
});