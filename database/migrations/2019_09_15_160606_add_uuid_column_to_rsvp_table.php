<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUuidColumnToRsvpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rsvp', function (Blueprint $table) {
            $table->string('uuid', 36)->nullable();
        });

        \App\Rsvp::all()->each(function (\App\Rsvp $rsvp) {
           $rsvp->uuid = \Ramsey\Uuid\Uuid::uuid4();
           $rsvp->save();
        });

        Schema::table('rsvp', function (Blueprint $table) {
           $table->string('uuid', 36)->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rsvp', function (Blueprint $table) {
            $table->dropColumn('uuid');
        });
    }
}
