<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Rsvp extends Model
{
    protected $table = 'rsvp';

    protected $fillable = ['name', 'email', 'telephone', 'attending', 'message'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($rsvp) {
            $rsvp->uuid = Str::uuid();
        });
    }

    public function getKeyType()
    {
        return 'string';
    }

    public function getKeyName()
    {
        return 'uuid';
    }

    public function getIncrementing()
    {
        return false;
    }
}
