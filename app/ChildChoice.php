<?php

namespace App;

use App\Concerns\MenuChoices;
use Illuminate\Database\Eloquent\Model;

class ChildChoice extends Model
{
    use MenuChoices;
    protected $with = ['starter', 'main_course', 'dessert'];
    protected $table = 'child_choices';
    protected $fillable = ['rsvp_uuid', 'name', 'dietary', 'starter_id', 'main_course_id', 'dessert_id'];
}
