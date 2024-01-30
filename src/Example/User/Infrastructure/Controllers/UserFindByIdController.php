<?php

namespace Src\Example\User\Infrastructure\Controllers;

use Src\Example\User\Application\Find\UserFindByIdUseCase;
use Symfony\Component\HttpFoundation\Request;

final class UserFindByIdController
{
    private $userFindByIdUseCase;

    public function __construct(UserFindByIdUseCase $userFindByIdUseCase)
    {
        $this->userFindByIdUseCase = $userFindByIdUseCase;
    }

    public function __invoke(Request $request, int $id): array
    {
        return $this->userFindByIdUseCase->__invoke($id);
    }
}
