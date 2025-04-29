<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Dishes extends Model
{
    public function inputs(): BelongsToMany
    {
        return $this->belongsToMany(Input::class);
    }

    public function base(): BelongsTo
    {
        return $this->belongsTo(Base::class);
    }
}
