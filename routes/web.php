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
    return redirect('/landing');
});

Route::prefix('tester')->name('tester.')->group(function(){
    Route::prefix('latihan')->name('latihan.')->group(function(){
        Route::get('/instruksi', 'ArraySpanTaskLatihanController@instruksi')->name('instruksi');
        Route::get('/main/{seri}/{iterasi}', 'ArraySpanTaskLatihanController@index')->name('home');
        Route::get('/question/{seri}/{iterasi}', 'ArraySpanTaskLatihanController@question')->name('question');
        Route::get('/questions/{seri}/{iterasi}/{id}/{detik}', 'ArraySpanTaskLatihanController@question1')->name('questions');
        Route::get('/questions2/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ArraySpanTaskLatihanController@question2')->name('questions2');
        Route::get('/arrayQuest1/{seri}/{iterasi}/{id}/{detik}', 'ArraySpanTaskLatihanController@arrayQuest1')->name('arrayQuest1');
        Route::get('/arrayQuest2/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ArraySpanTaskLatihanController@arrayQuest2')->name('arrayQuest2');
        Route::get('/focus/{seri}/{iterasi}', 'ArraySpanTaskLatihanController@focus')->name('focus');
        Route::get('/score/{seri}/{iterasi}/{id}/{id1}/{id2}/{detik}', 'ArraySpanTaskLatihanController@score')->name('score');
    });

    Route::prefix('intro')->name('intro.')->group(function(){
        Route::get('/instruksi', 'ArraySpanTaskIntroController@instruksi')->name('instruksi');
        Route::get('/main/{seri}/{iterasi}', 'ArraySpanTaskIntroController@index')->name('home');
        Route::get('/question/{seri}/{iterasi}', 'ArraySpanTaskIntroController@question')->name('question');
        Route::get('/questions/{seri}/{iterasi}', 'ArraySpanTaskIntroController@question1')->name('questions');
        Route::get('/questions2/{seri}/{iterasi}/{id}/{detik}', 'ArraySpanTaskIntroController@question2')->name('questions2');
        Route::get('/arrayQuest1/{seri}/{iterasi}', 'ArraySpanTaskIntroController@arrayQuest1')->name('arrayQuest1'); //recheck
        Route::get('/arrayQuest2/{seri}/{iterasi}/{id}/{detik}', 'ArraySpanTaskIntroController@arrayQuest2')->name('arrayQuest2'); //recheck
        Route::get('/focus/{seri}/{iterasi}', 'ArraySpanTaskIntroController@focus')->name('focus');
        Route::get('/score/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ArraySpanTaskIntroController@score')->name('score'); //recheck
    });

    Route::prefix('pretest')->name('pretest.')->group(function(){
        Route::get('/instruksi', 'ArraySpanTaskPreTestController@instruksi')->name('instruksi');
        Route::get('/main/{seri}/{iterasi}', 'ArraySpanTaskPreTestController@index')->name('home');
        Route::get('/question/{seri}/{iterasi}', 'ArraySpanTaskPreTestController@question')->name('question');
        Route::get('/questions/{seri}/{iterasi}/{id}/{detik}', 'ArraySpanTaskPreTestController@question1')->name('questions');
        Route::get('/questions2/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ArraySpanTaskPreTestController@question2')->name('questions2');
        Route::get('/arrayQuest1/{seri}/{iterasi}/{id}/{detik}', 'ArraySpanTaskPreTestController@arrayQuest1')->name('arrayQuest1');
        Route::get('/arrayQuest2/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ArraySpanTaskPreTestController@arrayQuest2')->name('arrayQuest2');
        Route::get('/focus/{seri}/{iterasi}/{id}/{id1}/{id2}/{detik}', 'ArraySpanTaskPreTestController@focus')->name('focus');
        Route::get('/focus/{seri}/{iterasi}', 'ArraySpanTaskPreTestController@focusBefore')->name('focus');
        Route::get('/score/{seri}/{iterasi}/{id}/{id1}/{id2}/{detik}', 'ArraySpanTaskPreTestController@score')->name('score');
    });

    Route::prefix('main')->name('main.')->group(function(){
        Route::get('/instruksi', 'ArraySpanTaskMainController@instruksi')->name('instruksi');
        Route::get('/main/{seri}/{iterasi}', 'ArraySpanTaskMainController@index')->name('home');
        Route::get('/question/{seri}/{iterasi}', 'ArraySpanTaskMainController@question')->name('question');
        Route::get('/questions/{seri}/{iterasi}/{id}/{detik}', 'ArraySpanTaskMainController@question1')->name('questions');
        Route::get('/questions2/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ArraySpanTaskMainController@question2')->name('questions2');
        Route::get('/arrayQuest1/{seri}/{iterasi}/{id}/{detik}', 'ArraySpanTaskMainController@arrayQuest1')->name('arrayQuest1');
        Route::get('/arrayQuest2/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ArraySpanTaskMainController@arrayQuest2')->name('arrayQuest2');
        Route::get('/focus/{seri}/{iterasi}/{id}/{id1}/{id2}/{detik}', 'ArraySpanTaskMainController@focus')->name('focus');
        Route::get('/focus/{seri}/{iterasi}', 'ArraySpanTaskMainController@focusBefore')->name('focus');
        Route::get('/score/{seri}/{iterasi}/{id}/{id1}/{id2}/{detik}', 'ArraySpanTaskMainController@score')->name('score');
    });

    Route::prefix('postest')->name('postest.')->group(function(){
        Route::get('/instruksi', 'ArraySpanTaskPostTestController@instruksi')->name('instruksi');
        Route::get('/main/{seri}/{iterasi}', 'ArraySpanTaskPostTestController@index')->name('home');
        Route::get('/question/{seri}/{iterasi}', 'ArraySpanTaskPostTestController@question')->name('question');
        Route::get('/questions/{seri}/{iterasi}/{id}/{detik}', 'ArraySpanTaskPostTestController@question1')->name('questions');
        Route::get('/questions2/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ArraySpanTaskPostTestController@question2')->name('questions2');
        Route::get('/arrayQuest1/{seri}/{iterasi}/{id}/{detik}', 'ArraySpanTaskPostTestController@arrayQuest1')->name('arrayQuest1');
        Route::get('/arrayQuest2/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ArraySpanTaskPostTestController@arrayQuest2')->name('arrayQuest2');
        Route::get('/focus/{seri}/{iterasi}/{id}/{id1}/{id2}/{detik}', 'ArraySpanTaskPostTestController@focus')->name('focus');
        Route::get('/focus/{seri}/{iterasi}', 'ArraySpanTaskPostTestController@focusBefore')->name('focus');
        Route::get('/score/{seri}/{iterasi}/{id}/{id1}/{id2}/{detik}', 'ArraySpanTaskPostTestController@score')->name('score');
    });

    Route::prefix('moodQuiz')->name('moodQuiz.')->group(function(){
        Route::get('/instruksi', 'MoodQuizController@instruksi')->name('instruksi');
        Route::get('/question', 'MoodQuizController@question')->name('question');
        Route::post('/post', 'MoodQuizController@post')->name('moodQuizPost');
    });


    Route::prefix('perthEmotional')->name('perthEmotional.')->group(function(){
        Route::get('/instruksi', 'PerthEmotionalController@instruksi')->name('instruksi');
        Route::get('/question', 'PerthEmotionalController@question')->name('question');
        Route::post('/post', 'PerthEmotionalController@post')->name('perthEmotionalPost');
        Route::get('/finish', 'PerthEmotionalController@finish')->name('finish');
    });

    Route::prefix('control')->name('control')->group(function(){
        Route::prefix('latihan')->name('latihan.')->group(function(){
            Route::get('/instruksi', 'ControlArraySpanTaskLatihanController@instruksi')->name('instruksi');
            Route::get('/main/{seri}/{iterasi}', 'ControlArraySpanTaskLatihanController@index')->name('home');
            Route::get('/question/{seri}/{iterasi}', 'ControlArraySpanTaskLatihanController@question')->name('question');
            Route::get('/questions/{seri}/{iterasi}/{id}/{detik}', 'ControlArraySpanTaskLatihanController@question1')->name('questions');
            Route::get('/questions2/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ControlArraySpanTaskLatihanController@question2')->name('questions2');
            Route::get('/arrayQuest1/{seri}/{iterasi}/{id}/{detik}', 'ControlArraySpanTaskLatihanController@arrayQuest1')->name('arrayQuest1');
            Route::get('/arrayQuest2/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ControlArraySpanTaskLatihanController@arrayQuest2')->name('arrayQuest2');
            Route::get('/focus/{seri}/{iterasi}', 'ControlArraySpanTaskLatihanController@focus')->name('focus');
            Route::get('/score/{seri}/{iterasi}/{id}/{id1}/{id2}/{detik}', 'ControlArraySpanTaskLatihanController@score')->name('score');
            Route::get('/emotional/{seri}/{iterasi}', 'ControlArraySpanTaskLatihanController@emotional')->name('emotional');
        });

        Route::prefix('intro')->name('intro.')->group(function(){
            Route::get('/instruksi', 'ControlArraySpanTaskIntroController@instruksi')->name('instruksi');
            Route::get('/main/{seri}/{iterasi}', 'ControlArraySpanTaskIntroController@index')->name('home');
            Route::get('/question/{seri}/{iterasi}', 'ControlArraySpanTaskIntroController@question')->name('question');
            Route::get('/questions/{seri}/{iterasi}', 'ControlArraySpanTaskIntroController@question1')->name('questions');
            Route::get('/questions2/{seri}/{iterasi}/{id}/{detik}', 'ControlArraySpanTaskIntroController@question2')->name('questions2');
            Route::get('/arrayQuest1/{seri}/{iterasi}', 'ControlArraySpanTaskIntroController@arrayQuest1')->name('arrayQuest1'); //recheck
            Route::get('/arrayQuest2/{seri}/{iterasi}/{id}/{detik}', 'ControlArraySpanTaskIntroController@arrayQuest2')->name('arrayQuest2'); //recheck
            Route::get('/focus/{seri}/{iterasi}', 'ControlArraySpanTaskIntroController@focus')->name('focus');
            Route::get('/score/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ControlArraySpanTaskIntroController@score')->name('score'); //recheck
        });
    
        Route::prefix('pretest')->name('pretest.')->group(function(){
            Route::get('/instruksi', 'ControlArraySpanTaskPreTestController@instruksi')->name('instruksi');
            Route::get('/main/{seri}/{iterasi}', 'ControlArraySpanTaskPreTestController@index')->name('home');
            Route::get('/question/{seri}/{iterasi}', 'ControlArraySpanTaskPreTestController@question')->name('question');
            Route::get('/questions/{seri}/{iterasi}/{id}/{detik}', 'ControlArraySpanTaskPreTestController@question1')->name('questions');
            Route::get('/questions2/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ControlArraySpanTaskPreTestController@question2')->name('questions2');
            Route::get('/arrayQuest1/{seri}/{iterasi}/{id}/{detik}', 'ControlArraySpanTaskPreTestController@arrayQuest1')->name('arrayQuest1');
            Route::get('/arrayQuest2/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ControlArraySpanTaskPreTestController@arrayQuest2')->name('arrayQuest2');
            Route::get('/focus/{seri}/{iterasi}/{id}/{id1}/{id2}/{detik}', 'ControlArraySpanTaskPreTestController@focus')->name('focus');
            Route::get('/focus/{seri}/{iterasi}', 'ControlArraySpanTaskPreTestController@focusBefore')->name('focus');
            Route::get('/score/{seri}/{iterasi}/{id}/{id1}/{id2}/{detik}', 'ControlArraySpanTaskPreTestController@score')->name('score');
            Route::get('/emotional/{seri}/{iterasi}', 'ControlArraySpanTaskPreTestController@emotional')->name('emotional');
        });
    
        Route::prefix('main')->name('main.')->group(function(){
            Route::get('/instruksi', 'ControlArraySpanTaskMainController@instruksi')->name('instruksi');
            Route::get('/main/{seri}/{iterasi}', 'ControlArraySpanTaskMainController@index')->name('home');
            Route::get('/question/{seri}/{iterasi}', 'ControlArraySpanTaskMainController@question')->name('question');
            Route::get('/questions/{seri}/{iterasi}/{id}/{detik}', 'ControlArraySpanTaskMainController@question1')->name('questions');
            Route::get('/questions2/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ControlArraySpanTaskMainController@question2')->name('questions2');
            Route::get('/arrayQuest1/{seri}/{iterasi}/{id}/{detik}', 'ControlArraySpanTaskMainController@arrayQuest1')->name('arrayQuest1');
            Route::get('/arrayQuest2/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ControlArraySpanTaskMainController@arrayQuest2')->name('arrayQuest2');
            Route::get('/focus/{seri}/{iterasi}/{id}/{id1}/{id2}/{detik}', 'ControlArraySpanTaskMainController@focus')->name('focus');
            Route::get('/focus/{seri}/{iterasi}', 'ControlArraySpanTaskMainController@focusBefore')->name('focus');
            Route::get('/score/{seri}/{iterasi}/{id}/{id1}/{id2}/{detik}', 'ControlArraySpanTaskMainController@score')->name('score');
            Route::get('/emotional/{seri}/{iterasi}', 'ControlArraySpanTaskMainController@emotional')->name('emotional');
        });
    
        Route::prefix('postest')->name('postest.')->group(function(){
            Route::get('/instruksi', 'ControlArraySpanTaskPostTestController@instruksi')->name('instruksi');
            Route::get('/main/{seri}/{iterasi}', 'ControlArraySpanTaskPostTestController@index')->name('home');
            Route::get('/question/{seri}/{iterasi}', 'ControlArraySpanTaskPostTestController@question')->name('question');
            Route::get('/questions/{seri}/{iterasi}/{id}/{detik}', 'ControlArraySpanTaskPostTestController@question1')->name('questions');
            Route::get('/questions2/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ControlArraySpanTaskPostTestController@question2')->name('questions2');
            Route::get('/arrayQuest1/{seri}/{iterasi}/{id}/{detik}', 'ControlArraySpanTaskPostTestController@arrayQuest1')->name('arrayQuest1');
            Route::get('/arrayQuest2/{seri}/{iterasi}/{id}/{id1}/{detik}', 'ControlArraySpanTaskPostTestController@arrayQuest2')->name('arrayQuest2');
            Route::get('/focus/{seri}/{iterasi}/{id}/{id1}/{id2}/{detik}', 'ControlArraySpanTaskPostTestController@focus')->name('focus');
            Route::get('/focus/{seri}/{iterasi}', 'ControlArraySpanTaskPostTestController@focusBefore')->name('focus');
            Route::get('/score/{seri}/{iterasi}/{id}/{id1}/{id2}/{detik}', 'ControlArraySpanTaskPostTestController@score')->name('score');
            Route::get('/emotional/{seri}/{iterasi}', 'ControlArraySpanTaskPostTestController@emotional')->name('emotional');
        });
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/landing', 'HomeController@landing')->name('landing');


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
        Route::get('/pernyataan/deskripsi', 'IndexController@deskipsiSeriPernyataan')->name('pernyataan.deskripsi');
        Route::get('/pernyataan', 'IndexController@displayPernyataan')->name('pernyataan.display');
        Route::get('/pernyataan/{jawaban}', 'IndexController@jawabanPernyataan')->name('pernyataan.jawaban');
        Route::get('/pernyataan-result', 'IndexController@resultPernyataan')->name('pernyataan.result');
    });
    Route::prefix('/pretest')->name('pretest.')->group(function(){
        Route::get('/fokus/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@fokus')->name('fokus');
        Route::get('/kata/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@kata')->name('kata');
        Route::get('/pernyataan/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@pernyataan')->name('pernyataan');
        Route::post('/pernyataan/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@postPernyataan')->name('postPernyataan');
        Route::get('/recall/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@recall')->name('recall');
        Route::post('/postRecall/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@postRecall')->name('postRecall');
        Route::get('/serial-recall/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@serialRecall')->name('serial.recall');
        Route::post('/post-serial-recall/seri/{seri}/iterasi/{iterasi}', 'ReadingPretestController@postSerialRecall')->name('serial.recall.post');
    });
    Route::prefix('/main')->name('main.')->group(function(){
        Route::get('/', 'ReadingMainController@index')->name('index');
        Route::get('/fokus/seri/{seri}/iterasi/{iterasi}', 'ReadingMainController@fokus')->name('fokus');
        Route::get('/fokus-2/seri/{seri}/iterasi/{iterasi}', 'ReadingMainController@fokus2')->name('fokus2');
        Route::get('/gambar/seri/{seri}/iterasi/{iterasi}', 'ReadingMainController@gambar')->name('gambar');
        Route::get('/kata/seri/{seri}/iterasi/{iterasi}', 'ReadingMainController@kata')->name('kata');
        Route::get('/pernyataan/seri/{seri}/iterasi/{iterasi}', 'ReadingMainController@pernyataan')->name('pernyataan');
        Route::post('/postPernyataan/seri/{seri}/iterasi/{iterasi}', 'ReadingMainController@postPernyataan')->name('postPernyataan');
        Route::get('/free-recall/seri/{seri}/iterasi/{iterasi}','ReadingMainController@freeRecall')->name('freeRecall');
        Route::post('/free-recall/seri/{seri}/iterasi/{iterasi}','ReadingMainController@postFreeRecall')->name('postFreeRecall');
        Route::get('/serial-recall/seri/{seri}/iterasi/{iterasi}','ReadingMainController@serialRecall')->name('serialRecall');
        Route::post('/serial-recall/seri/{seri}/iterasi/{iterasi}','ReadingMainController@postSerialRecall')->name('postSerialRecall');
        Route::get('/skor/seri/{seri}/iterasi/{iterasi}','ReadingMainController@skor')->name('skor');
    });
    Route::prefix('/postest')->name('postest.')->group(function(){
        Route::get('/', 'ReadingPostestController@index')->name('index');
        Route::get('/break', 'ReadingPostestController@break')->name('break');
        Route::get('/start', 'ReadingPostestController@start')->name('start');
        Route::get('/kata', 'ReadingPostestController@kata')->name('kata');
        Route::get('/pernyataan', 'ReadingPostestController@pernyataan')->name('pernyataan');
        Route::post('/pernyataan', 'ReadingPostestController@jawabPernyataan')->name('pernyataan.jawab');
        Route::get('/recall', 'ReadingPostestController@freeRecall')->name('recall');
        Route::post('/recall', 'ReadingPostestController@postFreeRecall')->name('recall.post');
        Route::get('/serial-recall', 'ReadingPostestController@serialRecall')->name('serial.recall');
        Route::post('/serial-recall', 'ReadingPostestController@postSerialRecall')->name('serial.recall.post');
    });
});
