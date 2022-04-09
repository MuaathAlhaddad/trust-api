<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Feature extends Model
{
    use HasFactory;

    /**********************************
     *           Relations
     ********************************/

    /**
     * Get the resource of the feature
     *
     * @return MorphTo
     */
    public function featureable(): MorphTo
    {
        return $this->morphTo();
    }
}
