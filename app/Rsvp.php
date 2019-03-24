<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    protected $table = 'rsvp';

    protected $fillable = ['name', 'email', 'telephone', 'attending'];
}
