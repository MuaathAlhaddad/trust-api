<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attribute extends Model
{
    use HasFactory;

    /**********************************
     *           Relations
     ********************************/

    /**
     * Get the ad
     *
     * @return BelongsTo
     */
    public function ad(): BelongsTo
    {
        return $this->belongsTo( Ad::class );
    }
}
