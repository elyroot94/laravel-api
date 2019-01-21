<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfesseurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GS_professeurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('email');
            $table->string('adresse');

        });
        Schema::create('groupe_professeur', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('groupe_id')->unsigned()->index();
            $table->integer('professeur_id')->unsigned()->index();
            $table->foreign('groupe_id')->references('id')->on('GS_groupes')->onDelete('cascade');
            $table->foreign('professeur_id')->references('id')->on('GS_professeurs')->onDelete('cascade');
            $table->year('anne');
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
        Schema::table('GS_professeurs', function (Blueprint $table) {
            //
        });
    }
}
