<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Media
 *
 * @package App\Models
 *
 * @property string $name
 * @property string $path
 * @property string $mime_type
 * @property int $size
 *
 */
class Media extends Model
{
    use HasTimestamps, SoftDeletes;

    protected $fillable = [
        'name',
        'path',
        'mime_type',
        'size',
    ];

    /**
     * @return HasMany
     */
    public function transcodingJobs() {
        return $this->hasMany(TranscodingJob::class);
    }
}
