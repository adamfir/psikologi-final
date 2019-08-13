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
    Route::namespace('Latihan')->prefix('/latihan')->name('latihan.')->group(function(){
        Route::get('/', 'IndexController@index')->name('index');
        Route::get('/kata/deskripsi', 'IndexController@deskipsiSeriKata')->name('kata.deskripsi');
        Route::get('/kata', 'IndexController@displayKata')->name('kata.display');
        Route::get('/kata/free-recall', 'IndexController@freeRecall')->name('kata.free.recall');
        Route::post('/kata/free-recall', 'IndexController@postFreeRecall')->name('post.kata.free.recall');
        Route::get('/kata/serial-recall', 'IndexController@serialRecall')->name('kata.serial.recall');
        Route::post('/kata/serial-recall', 'IndexController@postSerialRecall')->name('post.kata.serial.recall');
        Route::get('/kata/result', 'IndexController@resultKata')->name('kata.result');
    });
    Route::prefix('/pretest')->name('pretest.')->group(function(){
        Route::get('/fokus/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@fokus')->name('fokus');
        Route::get('/kata/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@kata')->name('kata');
        Route::get('/pernyataan/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@pernyataan')->name('pernyataan');
        Route::get('/pernyataan/seri/{seri}/iterasi/{iterasi}/jawab/{jawaban}', 'ReadingPretestController@postPernyataan')->name('postPernyataan');
        Route::get('/recall/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@recall')->name('recall');
        Route::post('/postRecall/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@postRecall')->name('postRecall');
    });
    Route::prefix('/main')->name('main.')->group(function(){
        Route::get('/', 'ReadingMainController@index')->name('index');
        Route::get('/fokus/seri/{seri}/iterasi/{iterasi}', 'ReadingMainController@fokus')->name('fokus');
        Route::get('/fokus-2/seri/{seri}/iterasi/{iterasi}', 'ReadingMainController@fokus2')->name('fokus2');
        Route::get('/gambar/seri/{seri}/iterasi/{iterasi}', 'ReadingMainController@gambar')->name('gambar');
        Route::get('/kata/seri/{seri}/iterasi/{iterasi}', 'ReadingMainController@kata')->name('kata');
        Route::get('/pernyataan/seri/{seri}/iterasi/{iterasi}', 'ReadingMainController@pernyataan')->name('pernyataan');
        Route::get('/postPernyataan/seri/{seri}/iterasi/{iterasi}/jawaban/{jawaban}', 'ReadingMainController@postPernyataan')->name('postPernyataan');
        Route::get('/free-recall/seri/{seri}/iterasi/{iterasi}','ReadingMainController@freeRecall')->name('freeRecall');
        Route::post('/free-recall/seri/{seri}/iterasi/{iterasi}','ReadingMainController@postFreeRecall')->name('postFreeRecall');
        Route::get('/serial-recall/seri/{seri}/iterasi/{iterasi}','ReadingMainController@serialRecall')->name('serialRecall');
        Route::post('/serial-recall/seri/{seri}/iterasi/{iterasi}','ReadingMainController@postSerialRecall')->name('postSerialRecall');
        Route::get('/skor/seri/{seri}/iterasi/{iterasi}','ReadingMainController@skor')->name('skor');
    });
    Route::prefix('/postest')->name('postest.')->group(function(){
        Route::get('/', 'ReadingPostestController@index')->name('index');
    });
});