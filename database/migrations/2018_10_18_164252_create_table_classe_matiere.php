<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClasseMatiere extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_matiere', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('classe_id')->unsigned()->index();
            $table->integer('matiere_id')->unsigned()->index();
            $table->foreign('classe_id')->references('id')->on('GS_classes')->onDelete('cascade');
            $table->foreign('matiere_id')->references('id')->on('GS_matieres')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::table('GS_matieres', function (Blueprint $table) {
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
        Schema::table('classe_matiere', function (Blueprint $table) {
            //
        });
    }
}
