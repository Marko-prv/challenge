<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $country
 * @property string|null $street
 * @property string|null $city
 * @property string|null $postal_code
 * @property string|null $phone
 * @property string|null $email
 * @property int $unittype_id
 * @property int $language_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 */
class Location extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at' ];
    protected $fillable = ['name', 'type','country', 'street', 'city', 'postal_code', 'phone', 'email', 'unittype_id','language_id'];
    public const TYPE_SELF_STORAGE = 'self-storage';
    public const TYPE_CO_WORKING = 'co-working';
    public const TYPE_CO_LIVING = 'co-living';

    public const TYPES = [
        self::TYPE_SELF_STORAGE,
        self::TYPE_CO_WORKING,
        self::TYPE_CO_LIVING,
    ];
}
