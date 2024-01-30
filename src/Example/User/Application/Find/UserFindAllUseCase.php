<?php

namespace Src\Example\User\Application\Find;

use Src\Example\User\Domain\Contracts\UserRepositoryContract;

final class UserFindAllUseCase
{
    private $repository;

    public function __construct(UserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(): array
    {
        return $this->repository->findAll();
    }
}
