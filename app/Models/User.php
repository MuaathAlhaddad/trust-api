<?php

namespace App\Models;

use App\Traits\HasAttachment;
use App\Traits\HasFeature;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes,
        HasAttachment, HasApiTokens, HasFeature;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_no',
        'gender',
        'phone_verified_at',
        'country_id',
        'city_id',
        'email',
        'phone_no'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /************************
     *        Relations
     ************************/
    /**
     * Get all user's Ads
     *
     * @return HasMany
     */
    public function ads(): HasMany
    {
        return $this->hasMany( Ad::class );
    }

    /**
     * Get the user's city
     *
     * @return BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo( City::class );
    }
}
