<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GS_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->double('note');
            $table->integer('matiere_id')->unsigned()->index();
            $table->integer('eleve_id')->unsigned()->index();
            $table->foreign('matiere_id')->references('id')->on('GS_matieres')->onDelete('cascade');
            $table->foreign('eleve_id')->references('id')->on('GS_eleves')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('GS_notes', function (Blueprint $table) {
            //
        });
    }
}
