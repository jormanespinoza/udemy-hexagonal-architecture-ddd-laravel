<?php

namespace Src\Example\User\Domain;

use Src\Example\User\Domain\ValueObject\{
    UserUsername,
    UserFullname,
    UserEmail,
    UserPassword,
    UserTimestamp
};

final class User
{
    private $userUsername;
    private $userFullname;
    private $userEmail;
    private $userPassword;
    private $userTimestamp;

    public function __construct(
        UserUsername $userUsername,
        UserFullname $userFullname,
        UserEmail $userEmail,
        UserPassword $userPassword,
        UserTimestamp $userTimestamp
    ) {
        $this->userUsername = $userUsername;
        $this->userFullname = $userFullname;
        $this->userEmail = $userEmail;
        $this->userPassword = $userPassword;
        $this->userTimestamp = $userTimestamp;
    }

    public function getUserUsername(): UserUsername
    {
        return $this->userUsername;
    }

    public function getUserFullname(): UserFullname
    {
        return $this->userFullname;
    }

    public function getUserEmail(): UserEmail
    {
        return $this->userEmail;
    }

    public function getUserPassword(): UserPassword
    {
        return $this->userPassword;
    }

    public function getUserTimestamp(): UserTimestamp
    {
        return $this->userTimestamp;
    }
}