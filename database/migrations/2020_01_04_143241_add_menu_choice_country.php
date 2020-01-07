<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMenuChoiceCountry extends Migration
{
    public function up()
    {
        Schema::table('adult_choices', function (Blueprint $table) {
            $table->string('wedding');
        });
    }

    public function down()
    {
        Schema::table('adult_choices', function (Blueprint $table) {
            $table->dropColumn(['wedding']);
        });
    }
}
