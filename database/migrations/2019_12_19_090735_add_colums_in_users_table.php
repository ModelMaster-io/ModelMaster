<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumsInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
             $table->text('image')->after('remember_token')->nullable();
             $table->text('service_provider')->after('remember_token')->nullable();
             $table->text('provider_id')->after('remember_token')->nullable();
             $table->text('website')->after('remember_token')->nullable();
             $table->text('cellphone')->after('remember_token')->nullable();
             $table->text('officephone')->after('remember_token')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
