<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PerthEmotionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('perth_emotionals', function (Blueprint $table) {
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
