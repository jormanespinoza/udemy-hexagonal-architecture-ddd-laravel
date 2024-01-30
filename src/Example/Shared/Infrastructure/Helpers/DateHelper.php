<?php

namespace Src\Example\Shared\Infrastructure\Helpers;

use Carbon\Carbon;

trait DateHelper
{
    public function getCurrentDate(): string
    {
        return Carbon::now();
    }
}
