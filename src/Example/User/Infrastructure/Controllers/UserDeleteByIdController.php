<?php

namespace Src\Example\User\Infrastructure\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Src\Example\User\Application\Delete\UserDeleteByIdUseCase;

final class UserDeleteByIdController
{
    private $userDeleteByIdUseCase;

    public function __construct(UserDeleteByIdUseCase $userDeleteByIdUseCase)
    {
        $this->userDeleteByIdUseCase = $userDeleteByIdUseCase;
    }

    public function __invoke(Request $request, int $id): array
    {
        return $this->userDeleteByIdUseCase->__invoke($id);
    }
}
