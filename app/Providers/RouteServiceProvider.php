<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

final class RouteServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->routes(function () {
            Route::group(['as' => 'web.', 'middleware' => 'web'], base_path('routes/web.php'));
            Route::group(['as' => 'api.', 'prefix' => 'api', 'middleware' => 'api'], base_path('routes/api.php'));
        });
    }
}
