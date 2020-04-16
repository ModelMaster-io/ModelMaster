<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToLessonSteps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lesson_steps', function (Blueprint $table) {
            $table->longText('direct_starting_screen')->after('error_message');
            $table->boolean('starts_from_previous_user_input')->after('direct_starting_screen')->default(0);
            $table->integer('previous_section')->after('starts_from_previous_user_input');
            $table->integer('previous_step')->after('previous_section');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lesson_steps', function (Blueprint $table) {
             $table->longText('direct_starting_screen');
             $table->boolean('starts_from_previous_user_input');
             $table->integer('previous_section');
             $table->integer('previous_step');
        });
    }
}
