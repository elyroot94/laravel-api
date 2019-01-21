<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEleves extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GS_eleves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('adresse')->nullable();
            $table->string('correspondantTelephone')->nullable();
            $table->integer('groupe_id')->unsigned()->index();
            $table->foreign('groupe_id')->references('id')->on('GS_groupes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('GS_eleves', function (Blueprint $table) {
            //
        });
    }
}
