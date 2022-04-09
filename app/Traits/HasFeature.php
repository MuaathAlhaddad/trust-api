<?php


namespace App\Traits;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasFeature
{
    /**
     * Get the ad's feature.
     *
     * @return MorphMany
     */
    public function features(): MorphMany
    {
        return $this->morphMany( Feature::class, 'featureable' );
    }

}
