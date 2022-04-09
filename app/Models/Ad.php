<?php

namespace App\Models;

use App\Traits\HasAttachment;
use App\Traits\HasFeature;
use BinaryCats\Sku\Concerns\SkuOptions;
use BinaryCats\Sku\HasSku;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;


class Ad extends Model
{

    use HasFactory, HasAttachment, SoftDeletes,
        HasFeature, HasSku;

    protected $fillable = [
        'title',
        'description',
        'location',
        'price',
    ];


    /**
     * Get the options for generating the Sku.
     *
     * @return SkuOptions
     */
    public function skuOptions(): SkuOptions
    {
        return SkuOptions::make()
                         ->from( [ 'price', 'user_id', 'created_at' ] )
                         ->target( 'sku' )
                         ->using( '-' )
                         ->forceUnique( true )
                         ->generateOnCreate( true )
                         ->refreshOnUpdate( false );
    }

    /**********************************
     *           Relations
     ********************************/
    /**
     * Get the ad's user.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo( User::class );
    }

    /**
     * Get ad's attributes
     *
     * @return HasOne
     */
    public function attributes(): HasOne
    {
        return $this->hasOne( Attribute::class );
    }

    /**
     * Get ad's taxonomyContents
     *
     * @return BelongsToMany
     */
    public function taxonomyContents(): BelongsToMany
    {
        return $this->belongsToMany( TaxonomyContent::class, 'ad_taxonomy_content' );
    }

}
