<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AjouterChampeProffeseurId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* Schema::table('GS_matieres', function (Blueprint $table) {
            $table->integer('professeur_id')->unsigned()->index()->nullable();
            $table->foreign('professeur_id')->references('id')->on('gs_professeurs')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('GS_matieres', function (Blueprint $table) {
            $table->dropColumn('professeur_id');
        });
    }
}
