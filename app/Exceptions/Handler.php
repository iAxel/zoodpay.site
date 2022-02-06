<?php

namespace App\Exceptions;

use Throwable;

use Illuminate\Foundation\Exceptions\Handler as BaseHandler;

final class Handler extends BaseHandler
{
    /**
     * @return void
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
