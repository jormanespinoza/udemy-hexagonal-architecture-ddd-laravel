<?php

namespace Src\Example\User\Infrastructure\Controllers;

use Src\Example\User\Infrastructure\Request\UserCreateRequest;
use Src\Example\User\Application\Create\UserCreateUseCase;
use Src\Example\Shared\Infrastructure\Helpers\DateHelper;

final class UserCreateController
{
    use DateHelper;
    private $userCreateUseCase;

    public function __construct(UserCreateUseCase $userCreateUseCase)
    {
        $this->userCreateUseCase = $userCreateUseCase;
    }

    public function __invoke(UserCreateRequest $request)
    {
        return $this->userCreateUseCase->__invoke($request->all(), $this->getCurrentDate());
    }
}
