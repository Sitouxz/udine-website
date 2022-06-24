<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('responden', 30);
            $table->date('timecreated');
            $table->string('comments');
            $table->string('linkpicture', 50);
            $table->integer('rating');
            $table->string('type', 2);
            $table->string('mealtime', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('response');
    }
}
