<?php

namespace Src\Example\User\Infrastructure\Repositories\Eloquent;

use Src\Example\User\Domain\Contracts\UserRepositoryContract;
use Src\Example\User\Infrastructure\Repositories\Eloquent\User;
use Src\Example\User\Domain\ValueObject\UserId;
use Src\Example\User\Domain\ValueObject\UserCreateRequest;

final class UserRepository implements UserRepositoryContract
{
    private $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function findAll(): array
    {
        return $this->model->all()->toArray();
    }

    public function findById(UserId $userId): ?array
    {
        $user = $this->model->find($userId->value());
        return !$user
            ? null
            : $user->toArray();
    }

    public function deleteById(UserId $userId): bool
    {
        return $this->model->where('id', $userId->value())->delete();
    }

    public function create(UserCreateRequest $request): ?int
    {
        $response = $this->model->create($request->handler());
        return !$response
            ? null
            : $response->id;
    }
}
