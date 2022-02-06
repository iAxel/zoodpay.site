<?php

namespace App\Models;

use Illuminate\Support\Carbon;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

/**
 * App\Models\User
 *
 * @property int $id
 *
 * @property string $name
 * @property string $email
 * @property string $password
 *
 * @property string|null $remember_token
 *
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @mixin Builder
 */
final class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authorizable;
    use Authenticatable;

    /**
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @var string
     */
    protected $table = 'users';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'id' => 'int',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
