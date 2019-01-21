<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AjouteCleEtranger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     /* Schema::table('gs_groupes', function (Blueprint $table) {
            $table->integer('classe_id')->unsigned()->index();
            $table->foreign('classe_id')->references('id')->on('gs_classes')->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('GS_groupes', function (Blueprint $table) {
            //
        });
    }
}
