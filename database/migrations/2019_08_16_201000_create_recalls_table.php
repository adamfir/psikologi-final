<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recalls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('seri'); // seri Ke- yang sebenarnya
            $table->string('iterasi'); // iterasi ke-
            $table->string('test_category'); // pre, main, or post test
            $table->integer('true_answer'); // depend on user answer
            $table->integer('false_answer'); // depend on user answer
            $table->integer('time'); // depend on time remaining
            $table->string('type'); // free or serial recall
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recalls');
    }
}
