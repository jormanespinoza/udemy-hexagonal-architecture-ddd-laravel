<?php

namespace Src\Example\User\Infrastructure\Controllers;

use Src\Example\User\Application\Find\UserFindAllUseCase;

final class UserFindAllController
{
    private $userFindAllUseCase;

    public function __construct(UserFindAllUseCase $userFindAllUseCase)
    {
        $this->userFindAllUseCase = $userFindAllUseCase;
    }

    public function __invoke(): array
    {
        return $this->userFindAllUseCase->__invoke();
    }
}
