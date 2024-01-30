<?php

namespace Src\Example\User\Application\Create;

use Src\Example\User\Domain\Contracts\UserRepositoryContract;
use Src\Example\User\Domain\ValueObject\UserCreateRequest;
use Src\Example\User\Domain\Exceptions\UserException;

final class UserCreateUseCase
{
    private $repository;

    public function __construct(UserRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(array $request, string $date)
    {
        $response = $this->repository->create(new UserCreateRequest($request, $date));
        if (!$response) {
            $this->exception();
        }

        return [
            'message' => 'OK',
            'id' => $response
        ];
    }

    private function exception()
    {
        throw new UserException('Usuario no creado', 500);
    }
}
