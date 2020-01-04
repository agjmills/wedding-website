<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Starter extends Model
{
    protected $table = 'starters';

    protected $fillable = ['name', 'children'];
}
