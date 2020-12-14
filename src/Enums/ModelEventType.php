<?php

namespace Buoy\LighthouseSubscriptions\Enums;

use BenSampo\Enum\Enum;

final class ModelEventType extends Enum
{
    public const CREATED = 'Created';
    public const UPDATED = 'Updated';
    public const DELETED = 'Deleted';
}
