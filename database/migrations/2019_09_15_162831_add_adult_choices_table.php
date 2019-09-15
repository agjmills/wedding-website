<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdultChoicesTable extends Migration
{
    public function up()
    {
        Schema::create('starters', function (Blueprint $table) {
           $table->increments('id');
           $table->string('name');
           $table->boolean('children');
        });

        Schema::create('main_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('children');
        });

        Schema::create('desserts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('children');
        });

        Schema::create('adult_choices', function (Blueprint $table) {
           $table->increments('id');
           $table->uuid('rsvp_uuid');
           $table->string('name');
           $table->unsignedInteger('starter_id');
           $table->unsignedInteger('main_course_id');
           $table->unsignedInteger('dessert_id');
           $table->text('dietary');
           $table->timestamps();
           $table->foreign('starter_id')->references('id')->on('starters');
           $table->foreign('main_course_id')->references('id')->on('main_courses');
           $table->foreign('dessert_id')->references('id')->on('desserts');
        });

        Schema::create('child_choices', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('rsvp_uuid');
            $table->string('name');
            $table->unsignedInteger('starter_id');
            $table->unsignedInteger('main_course_id');
            $table->unsignedInteger('dessert_id');
            $table->text('dietary');
            $table->timestamps();
            $table->foreign('starter_id')->references('id')->on('starters');
            $table->foreign('main_course_id')->references('id')->on('main_courses');
            $table->foreign('dessert_id')->references('id')->on('desserts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('adult_choices');
        Schema::dropIfExists('child_choices');
        Schema::dropIfExists('starters');
        Schema::dropIfExists('main_courses');
        Schema::dropIfExists('desserts');
    }
}
