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
        Route::get('/fokus/iterasi/{iterasi}', 'ReadingPretestController@fokus')->name('fokus');
        Route::get('/kata/iterasi/{iterasi}', 'ReadingPretestController@kata')->name('kata');
        Route::get('/pernyataan/iterasi/{iterasi}', 'ReadingPretestController@pernyataan')->name('pernyataan');
        Route::get('/pernyataan/iterasi/{iterasi}/jawab/{jawaban}', 'ReadingPretestController@postPernyataan')->name('postPernyataan');
        Route::get('/recall/iterasi/{iterasi}', 'ReadingPretestController@recall')->name('recall');
        Route::post('/postRecall/iterasi/{iterasi}', 'ReadingPretestController@postRecall')->name('postRecall');
        // Route::prefix('/1')->name('1.')->group(function(){
        //     Route::get('/kata', 'ReadingPretestController@kata1')->name('kata');
        //     Route::get('/pernyataan', 'ReadingPretestController@pernyataan1')->name('pernyataan');
        //     Route::get('/pernyataan/jawab/{jawaban}', 'ReadingPretestController@postPernyataan1')->name('postPernyataan');
        //     Route::get('/recall', 'ReadingPretestController@recall1')->name('recall');
        //     Route::post('/postRecall', 'ReadingPretestController@postRecall1')->name('postRecall');
        // });
        // Route::prefix('/2')->name('2.')->group(function(){
        //     Route::get('/kata', 'ReadingPretestController@kata2')->name('kata');
        //     Route::get('/pernyataan', 'ReadingPretestController@pernyataan2')->name('pernyataan');
        //     Route::get('/recall', 'ReadingPretestController@recall2')->name('recall');
        //     Route::post('/postRecall', 'ReadingPretestController@postRecall2')->name('postRecall');
        // });
        // Route::prefix('/3')->name('3.')->group(function(){
        //     Route::get('/kata', 'ReadingPretestController@kata3')->name('kata');
        //     Route::get('/pernyataan', 'ReadingPretestController@pernyataan3')->name('pernyataan');
        //     Route::get('/recall', 'ReadingPretestController@recall3')->name('recall');
        //     Route::post('/postRecall', 'ReadingPretestController@postRecall3')->name('postRecall');
        // });
        // Route::prefix('/4')->name('4.')->group(function(){
        //     Route::get('/kata', 'ReadingPretestController@kata4')->name('kata');
        //     Route::get('/pernyataan', 'ReadingPretestController@pernyataan4')->name('pernyataan');
        //     Route::get('/recall', 'ReadingPretestController@recall4')->name('recall');
        //     Route::post('/postRecall', 'ReadingPretestController@postRecall4')->name('postRecall');
        // });
        // Route::prefix('/5')->name('5.')->group(function(){
        //     Route::get('/kata', 'ReadingPretestController@kata5')->name('kata');
        //     Route::get('/pernyataan', 'ReadingPretestController@pernyataan5')->name('pernyataan');
        //     Route::get('/recall', 'ReadingPretestController@recall5')->name('recall');
        //     Route::post('/postRecall', 'ReadingPretestController@postRecall5')->name('postRecall');
        // });
    });
    Route::prefix('/main')->name('main.')->group(function(){
        Route::get('/', 'ReadingMainKontrolController@index')->name('index');
        Route::get('/kata/seri/{seri}/iterasi/{iterasi}', 'ReadingMainKontrolController@kata')->name('kata');
        Route::get('/pernyataan/seri/{seri}/iterasi/{iterasi}', 'ReadingMainKontrolController@pernyataan')->name('pernyataan');
        Route::get('/postPernyataan/seri/{seri}/iterasi/{iterasi}/jawaban/{jawaban}', 'ReadingMainKontrolController@postPernyataan')->name('postPernyataan');
        Route::get('/free-recall/seri/{seri}/iterasi/{iterasi}','ReadingMainKontrolController@freeRecall')->name('freeRecall');
        Route::post('/free-recall/seri/{seri}/iterasi/{iterasi}','ReadingMainKontrolController@postFreeRecall')->name('postFreeRecall');
        Route::get('/serial-recall/seri/{seri}/iterasi/{iterasi}','ReadingMainKontrolController@serialRecall')->name('serialRecall');
        Route::post('/serial-recall/seri/{seri}/iterasi/{iterasi}','ReadingMainKontrolController@postSerialRecall')->name('postSerialRecall');
        Route::get('/skor/seri/{seri}/iterasi/{iterasi}','ReadingMainKontrolController@skor')->name('skor');
        // Route::prefix('/kontrol')->name('kontrol.')->group(function(){
        //     Route::get('/', 'ReadingMainKontrolController@index')->name('index');
        //     Route::get('/instruksi', 'ReadingKontrolController@instruksi')->name('instruksi');
        //     Route::prefix('/latihan')->name('latihan.')->group(function(){
        //         Route::get('/kata/iterasi/{iterasi}', 'ReadingMainKontrolController@latihanKata')->name('kata');
        //         Route::get('/pernyataan/iterasi/{iterasi}', 'ReadingMainKontrolController@latihanPernyataan')->name('pernyataan');
        //         Route::get('/postPernyataan/iterasi/{iterasi}/jawaban/{jawaban}', 'ReadingMainKontrolController@latihanPostPernyataan')->name('postPernyataan');
        //         Route::get('/free-recall/iterasi/{iterasi}','ReadingMainKontrolController@latihanFreeRecall')->name('freeRecall');
        //         Route::post('/free-recall/iterasi/{iterasi}','ReadingMainKontrolController@postLatihanFreeRecall')->name('postFreeRecall');
        //     });
        //     Route::prefix('/0')->name('0.')->group(function(){
        //         Route::get('/kata', 'ReadingKontrolController@kata0')->name('kata');
        //         Route::get('/pernyataan', 'ReadingKontrolController@pernyataan0')->name('pernyataan');
        //         Route::get('/recall1', 'ReadingKontrolController@recall10')->name('recall1');
        //         Route::post('/postRecall1', 'ReadingKontrolController@postRecall10')->name('postRecall1');
        //         Route::get('/recall2', 'ReadingKontrolController@recall20')->name('recall2');
        //         Route::post('/postRecall2', 'ReadingKontrolController@postRecall20')->name('postRecall2');
        //         Route::get('/skor', 'ReadingKontrolController@skor0')->name('skor');
        //     });
        //     Route::prefix('/1')->name('1.')->group(function(){
        //         Route::get('/kata/{seriKe}/{ulangan}', 'ReadingKontrolController@kata1')->name('kata');
        //         Route::get('/pernyataan/{seriKe}/{ulangan}', 'ReadingKontrolController@pernyataan1')->name('pernyataan');
        //         Route::get('/recall1/{seriKe}/{ulangan}', 'ReadingKontrolController@recall11')->name('recall1');
        //         Route::post('/postRecall1/{seriKe}/{ulangan}', 'ReadingKontrolController@postRecall11')->name('postRecall1');
        //         Route::get('/recall2/{seriKe}/{ulangan}', 'ReadingKontrolController@recall21')->name('recall2');
        //         Route::post('/postRecall2/{seriKe}/{ulangan}', 'ReadingKontrolController@postRecall21')->name('postRecall2');
        //     });
        // });
    });
});