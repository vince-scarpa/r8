<?php

namespace Secrethash\R8\Models;

use Illuminate\Database\Eloquent\Model;
use Secrethash\R8\Models\Review;

class RateType extends Model
{

    protected $table = "rate_types";

    protected $gaurded = ['id', 'created_at'];

    /**
     * Reviews Types
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'rating_rate_type')->withPivot('value');
    }
}
