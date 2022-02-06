<?php

namespace App\Models;

use Illuminate\Support\Carbon;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Subcategory
 *
 * @property int $id
 *
 * @property string $slug
 * @property string $title_ru
 * @property string $title_uz
 *
 * @property int $parent_id
 *
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property-read Category $category
 *
 * @mixin Builder
 */
final class Subcategory extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @var string
     */
    protected $table = 'subcategories';

    /**
     * @var array
     */
    protected $fillable = [
        'slug',
        'title_ru',
        'title_uz',
        'parent_id',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'id' => 'int',
        'slug' => 'string',
        'title_ru' => 'string',
        'title_uz' => 'string',
        'parent_id' => 'int',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id', 'category');
    }
}
