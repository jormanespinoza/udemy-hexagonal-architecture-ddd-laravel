<?php

namespace Src\Example\Shared\Infrastructure\Helpers;

trait StringHelper
{
    public function formatErrorsRequest(array $validators): string
    {
        $message = '';
        array_walk($validators, function ($value) use (&$message) {
            $message .= $value . '|';
        });

        return substr($message, 0, -1);
    }
}
