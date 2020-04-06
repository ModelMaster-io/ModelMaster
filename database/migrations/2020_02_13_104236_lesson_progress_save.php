<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LessonProgressSave extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('save_lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('lesson_id');
            $table->integer('user_id');
            $table->longText('lesson');
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
        Schema::dropIfExists('save_lessons');
    }
}
