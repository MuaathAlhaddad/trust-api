<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taxonomy extends Model
{
    use HasFactory, SoftDeletes;

    /************************
     *        Types
     ************************/
    public const TYPE_SHAPE        = 'shape';
    public const TYPE_BRAND        = 'brand';
    public const TYPE_MODEL        = 'model';
    public const TYPE_TYPE         = 'type';
    public const TYPE_ENGINE_MODEL = 'engine_model';
    public const TYPE_YEAR         = 'year';
    public const TYPE_TAG          = 'tag';

    /************************
     *        Relations
     ************************/
    /**
     * get the taxonomy contents of a taxonomy
     *
     * @return HasMany
     */
    public function contents(): HasMany
    {
        return $this->hasMany( TaxonomyContent::class );
    }
}
