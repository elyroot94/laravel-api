<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTrimestes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GS_trimestes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trimeste');
            $table->year('anne');
        });
        Schema::table('GS_notes',function (Blueprint $table){
           $table->integer('trimeste_id')->unsigned()->index();
            $table->foreign('trimeste_id')->references('id')->on('GS_trimestes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('GS_trimestes', function (Blueprint $table) {
            //
        });
    }
}
