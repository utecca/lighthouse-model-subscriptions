<?php

namespace Buoy\LighthouseSubscriptions;

use Buoy\LighthouseSubscriptions\Enums\ModelEventType;
use Illuminate\Support\ServiceProvider;
use Nuwave\Lighthouse\Schema\TypeRegistry;
use Nuwave\Lighthouse\Schema\Types\LaravelEnumType;

class SubscriptionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(TypeRegistry $typeRegistry): void
    {
        $typeRegistry->register(new LaravelEnumType(ModelEventType::class));
    }
}
