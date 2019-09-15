<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdultChoice extends Model
{
    protected $table = 'adult_choices';
    protected $fillable = ['rsvp_uuid', 'name', 'dietary', 'starter_id', 'main_choice_id', 'dessert_id'];
}
