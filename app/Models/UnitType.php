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
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Location $location

 */
class UnitType extends Model
{
    protected $table = 'unittypes';

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }

}
