<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMylastebreath extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('GS_eleves', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('GS_professeurs', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('GS_notes', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('GS_trimestes', function (Blueprint $table) {
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
        Schema::table('GS_eleves', function (Blueprint $table) {
            //
        });
    }
}
