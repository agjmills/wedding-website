<?php

namespace App\Concerns;

use App\Dessert;
use App\MainCourse;
use App\Starter;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait MenuChoices
{
    public function starter(): BelongsTo
    {
        return $this->belongsTo(Starter::class);
    }

    public function main_course(): BelongsTo
    {
        return $this->belongsTo(MainCourse::class);
    }

    public function dessert(): BelongsTo
    {
        return $this->belongsTo(Dessert::class);
    }
}
