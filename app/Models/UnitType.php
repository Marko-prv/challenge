<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property float $size
 * @property string|null $short_description
 * @property string|null $description
 * @property bool $is_archived
 * @property int $location_id
 * @property int $language_id
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Location $location

 */
class UnitType extends Model
{
    protected $table = 'unittypes';
    protected $guarded = ['id', 'created_at', 'updated_at' ];
    protected $fillable = ['name', 'size','short_description', 'description', 'is_archived', 'language_id'];

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }

}
