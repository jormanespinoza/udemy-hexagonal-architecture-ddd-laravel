<?php

namespace Src\Example\User\Domain\Contracts;

use Src\Example\User\Domain\ValueObject\UserCreateRequest;
use Src\Example\User\Domain\ValueObject\UserId;

interface UserRepositoryContract
{
    /**
     * Get all users.
     *
     * @return \User[]
     */
    public function findAll(): array;

    /**
     * Get user by id.
     *
     * @return \User[]
     */
    public function findById(UserId $id): ?array;

    public function deleteById(UserId $id): bool;

    public function create(UserCreateRequest $userCreateRequest): ?int;
}