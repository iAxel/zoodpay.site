<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

final class VerifyCsrfToken extends Middleware
{
    /**
     * @var array
     */
    protected $except = [
        //
    ];
}
