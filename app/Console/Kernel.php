<?php

namespace App\Console;

use Illuminate\Foundation\Console\Kernel as BaseKernel;

final class Kernel extends BaseKernel
{
    /**
     * @return void
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');
    }
}
