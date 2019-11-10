<?php

namespace App;

use App\Concerns\MenuChoices;
use Illuminate\Database\Eloquent\Model;

class AdultChoice extends Model
{
    use MenuChoices;

    protected $table = 'adult_choices';
    protected $fillable = ['rsvp_uuid', 'name', 'dietary', 'starter_id', 'main_course_id', 'dessert_id'];
}
