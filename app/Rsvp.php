<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Rsvp extends Model
{
    protected $table = 'rsvp';

    protected $fillable = ['name', 'email', 'telephone', 'attending', 'message', 'uuid'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($rsvp) {
            $rsvp->uuid = Str::uuid()->toString();
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

    public function adult_choices(): HasMany
    {
        return $this->hasMany(AdultChoice::class);
    }

    public function child_choices(): HasMany
    {
        return $this->hasMany(ChildChoice::class);
    }
}
