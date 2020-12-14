<?php

namespace Buoy\LighthouseSubscriptions\GraphQL\Directives;

use Nuwave\Lighthouse\Schema\Directives\BaseDirective;
use Nuwave\Lighthouse\Support\Contracts\DefinedDirective;

class SubscribableDirective extends BaseDirective implements DefinedDirective
{
    public static function definition()
    {
        return /** @lang GraphQL */ <<<'SDL'
directive @subscribable on FIELD_DEFINITION
SDL;
    }
}
