<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Input extends Model
{
    public function dishes(): BelongsToMany
    {
        return $this->belongsToMany(Dishes::class);
    }
}
