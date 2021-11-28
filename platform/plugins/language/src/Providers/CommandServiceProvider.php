<?php

namespace Botble\Language\Providers;

use Botble\Language\Commands\SyncOldDataCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            SyncOldDataCommand::class,
        ]);
    }
}
