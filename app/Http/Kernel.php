<?php

namespace App\Http;

use App\Http\Middleware\TrustHosts;
use App\Http\Middleware\TrimStrings;
use App\Http\Middleware\TrustProxies;
use App\Http\Middleware\EncryptCookies;
use App\Http\Middleware\VerifyCsrfToken;

use Fruitcake\Cors\HandleCors;

use Illuminate\Foundation\Http\Kernel as BaseKernel;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;
use Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull;

use Illuminate\Session\Middleware\StartSession;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

final class Kernel extends BaseKernel
{
    /**
     * @var array
     */
    protected $middleware = [
        TrustHosts::class,
        TrustProxies::class,
        HandleCors::class,
        ValidatePostSize::class,
        TrimStrings::class,
        ConvertEmptyStringsToNull::class,
    ];

    /**
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            EncryptCookies::class,
            AddQueuedCookiesToResponse::class,
            StartSession::class,
            ShareErrorsFromSession::class,
            VerifyCsrfToken::class,
            SubstituteBindings::class,
        ],

        'api' => [
            SubstituteBindings::class,
        ],
    ];
}
