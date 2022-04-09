<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaxonomyContent extends Model
{
    use HasFactory, SoftDeletes;

    /************************
     *        Relations
     ************************/
    /**
     * Get the taxonomyContent's ads
     *
     * @return BelongsToMany
     */
    public function ads(): BelongsToMany
    {
        return $this->belongsToMany( Ad::class, 'ad_taxonomy_content' );
    }

    /**
     * Get the taxonomy of taxonomy content
     *
     * @return BelongsTo
     */
    public function taxonomy(): BelongsTo
    {
        return $this->belongsTo( Taxonomy::class );
    }

    /**
     * Get the taxonomyContent parent
     * TODO: ensure the foreign key is correct
     *
     * @return BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo( self::class, 'parent_id', 'id' );
    }

    /**
     * Get the taxonomyContent children
     * TODO: ensure the foreign key is correct
     *
     * @return HasMany
     */
    public function children(): HasMany
    {
        return $this->hasMany( self::class, 'parent_id', 'id' );
    }
}
