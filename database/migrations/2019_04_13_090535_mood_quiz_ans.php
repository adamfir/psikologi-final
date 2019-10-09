<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MoodQuizAns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('moodQuizs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userId');
            $table->integer('q10');
            $table->integer('q11');

            $table->integer('q20');
            $table->integer('q21');

            $table->integer('q30');
            $table->integer('q31');

            $table->integer('q40');
            $table->integer('q41');

            $table->integer('q50');
            $table->integer('q51');

            $table->integer('q60');
            $table->integer('q61');

            $table->integer('q70');
            $table->integer('q71');

            $table->integer('q80');
            $table->integer('q81');

            $table->integer('q90');
            $table->integer('q91');

            $table->integer('q100');
            $table->integer('q101');

            $table->integer('q110');
            $table->integer('q111');

            $table->integer('q120');
            $table->integer('q121');

            $table->integer('q130');
            $table->integer('q131');

            $table->integer('q140');
            $table->integer('q141');

            $table->integer('q150');
            $table->integer('q151');

            $table->integer('q160');
            $table->integer('q161');

            $table->integer('q170');
            $table->integer('q171');

            $table->integer('q180');
            $table->integer('q181');

            $table->integer('q190');
            $table->integer('q191');

            $table->integer('q200');
            $table->integer('q201');

            $table->integer('q210');
            $table->integer('q211');

            $table->integer('q220');
            $table->integer('q221');

            $table->integer('q230');
            $table->integer('q231');

            $table->integer('q240');
            $table->integer('q241');

            $table->integer('q250');
            $table->integer('q251');

            $table->integer('q260');
            $table->integer('q261');

            $table->integer('q270');
            $table->integer('q271');

            $table->integer('q280');
            $table->integer('q281');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
