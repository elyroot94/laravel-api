<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGroupes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GS_groupes', function (Blueprint $table) {
           $table->increments('id');
           $table->string('Nomgroupe');
           $table->timestamps();
        });
        Schema::table('GS_groupes', function (Blueprint $table) {
            $table->integer('classe_id')->unsigned()->index();
            $table->foreign('classe_id')->references('id')->on('GS_classes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('GS_goupes', function (Blueprint $table) {
            //
        });
    }
}
