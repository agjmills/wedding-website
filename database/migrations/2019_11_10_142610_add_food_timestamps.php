<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFoodTimestamps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('starters', function (Blueprint $table) {
           $table->timestamps();
        });
        Schema::table('main_courses', function (Blueprint $table) {
           $table->timestamps();
        });
        Schema::table('desserts', function (Blueprint $table) {
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
        //
    }
}
