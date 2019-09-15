<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeChoiceTablesNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('adult_choices', function (Blueprint $table) {
           $table->string('name')->nullable()->change();
           $table->unsignedInteger('starter_id')->nullable()->change();
           $table->unsignedInteger('main_course_id')->nullable()->change();
           $table->unsignedInteger('dessert_id')->nullable()->change();
           $table->text('dietary')->nullable()->change();
        });
        Schema::table('child_choices', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->unsignedInteger('starter_id')->nullable()->change();
            $table->unsignedInteger('main_course_id')->nullable()->change();
            $table->unsignedInteger('dessert_id')->nullable()->change();
            $table->text('dietary')->nullable()->change();
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
