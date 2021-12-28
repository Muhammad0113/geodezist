<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToSpecialist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $specialists = array(
            array('id' => '1','name_uz' => 'Geodezist','name_cyrl' => 'krill'),
            array('id' => '2','name_uz' => 'Topograf','name_cyrl' => 'krill'),
            array('id' => '3','name_uz' => 'Geolog','name_cyrl' => 'krill'),
            array('id' => '4','name_uz' => 'Injener geodezist','name_cyrl' => 'krill'),
            array('id' => '5','name_uz' => 'Injener topograf','name_cyrl' => 'krill'),
            array('id' => '6','name_uz' => 'Injener geolog','name_cyrl' => 'krill'),
            array('id' => '7','name_uz' => 'Texnik geodezist','name_cyrl' => 'krill'),
            array('id' => '8','name_uz' => 'Texnik topograf','name_cyrl' => 'krill'),
            array('id' => '9','name_uz' => 'Texnik geolog','name_cyrl' => 'krill'),
            array('id' => '10','name_uz' => 'Yetakchi injener topograf','name_cyrl' => 'krill'),
            array('id' => '11','name_uz' => 'Burg‘ulovchi','name_cyrl' => 'krill'),
            array('id' => '12','name_uz' => 'Yordamchi burg‘ulovchi','name_cyrl' => 'krill'),
            array('id' => '13','name_uz' => 'Podzemshik','name_cyrl' => 'krill'),
            array('id' => '14','name_uz' => 'Injener podzemshik','name_cyrl' => 'krill'),
            array('id' => '15','name_uz' => 'Kartograf','name_cyrl' => 'krill'),
            array('id' => '16','name_uz' => 'Injener kartograf','name_cyrl' => 'krill'),
            array('id' => '17','name_uz' => 'Kameralchik','name_cyrl' => 'krill'),
            array('id' => '18','name_uz' => 'Shofyor','name_cyrl' => 'krill'),
        );
        DB::table('specialists')->insert($specialists);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialist', function (Blueprint $table) {
            //
        });
    }
}
