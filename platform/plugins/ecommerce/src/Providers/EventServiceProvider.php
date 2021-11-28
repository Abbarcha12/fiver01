<?php

namespace Botble\Ecommerce\Providers;

use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Ecommerce\Listeners\AddLanguageForVariantsListener;
use Botble\Ecommerce\Listeners\RenderingSiteMapListener;
use Botble\Theme\Events\RenderingSiteMapEvent;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        RenderingSiteMapEvent::class => [
            RenderingSiteMapListener::class,
        ],
        CreatedContentEvent::class  => [
            AddLanguageForVariantsListener::class,
        ],
        UpdatedContentEvent::class  => [
            AddLanguageForVariantsListener::class,
        ],
    ];
}
