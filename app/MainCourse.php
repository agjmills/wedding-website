<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCourse extends Model
{
    protected $table = 'main_courses';

    protected $fillable = ['name', 'children'];
}
