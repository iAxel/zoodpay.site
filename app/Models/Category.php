<?php

namespace App\Models;

use Illuminate\Support\Carbon;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Category
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
 * @property-read Collection $subcategories
 *
 * @mixin Builder
 */
final class Category extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @var string
     */
    protected $table = 'categories';

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

    /**
     * @return HasMany
     */
    public function subcategories(): HasMany
    {
        return $this->hasMany(Subcategory::class, 'parent_id', 'id');
    }
}
