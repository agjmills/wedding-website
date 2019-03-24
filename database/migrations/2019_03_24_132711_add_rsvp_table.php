<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRsvpTable extends Migration
{
    public function up()
    {
        Schema::create('rsvp', function (Blueprint $table) {
           $table->increments('id');
           $table->text('name');
           $table->string('email');
           $table->string('telephone');
           $table->boolean('attending');
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
        Schema::dropIfExists('rsvp');
    }
}
