<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('region_id')->after('name');
            $table->integer('city_id')->after('region_id')->nullable();
            $table->string('phone')->after('city_id');
            $table->boolean('gender')->after('phone');
            $table->integer('old')->after('gender');
            $table->string('specialist')->after('old');
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
