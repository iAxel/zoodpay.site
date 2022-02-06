<?php

namespace App\Models;

use Illuminate\Support\Carbon;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Position
 *
 * @property int $id
 *
 * @property string $slug
 * @property string $title_ru
 * @property string $title_uz
 *
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @mixin Builder
 */
final class Position extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @var string
     */
    protected $table = 'positions';

    /**
     * @var array
     */
    protected $fillable = [
        'slug',
        'title_ru',
        'title_uz',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'id' => 'int',
        'slug' => 'string',
        'title_ru' => 'string',
        'title_uz' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
