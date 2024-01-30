<?php

namespace Src\Example\User\Application\Delete;

use Src\Example\User\Domain\Contracts\UserRepositoryContract;
use Src\Example\User\Domain\ValueObject\UserId;
use Src\Example\User\Domain\Exceptions\UserException;

final class UserDeleteByIdUseCase
{
    private $repository;

    public function __construct(UserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(int $id): array
    {
        $response = $this->repository->deleteById(new UserId($id));
        if (!$response) {
            $this->exception();
        }

        return [
            'message' => 'OK'
        ];
    }

    private function exception()
    {
        throw new UserException('Usuario no eliminado', 500);
    }
}
