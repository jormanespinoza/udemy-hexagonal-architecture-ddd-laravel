<?php

namespace Src\Example\Shared\Domain\Exceptions;

class CustomException extends \Exception
{
    public function toException(): array
    {
        $classTemporally = new \ReflectionClass(get_class($this));
        $class = explode('\\', $classTemporally->getName());

        return [
            'status' => $this->getCode(),
            'error' => true,
            'class' => end($class),
            'message' => $this->getMessage(),
        ];
    }
}
