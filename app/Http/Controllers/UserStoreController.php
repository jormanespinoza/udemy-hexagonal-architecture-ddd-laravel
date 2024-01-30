<?php

use App\Models\User;
use Illuminate\Routing\Controller;

class UserStoreController extends Controller
{
    public function store(string $password)
    {
        (new UserAuthValidator())->validateUser();

        $user = new User;
        $user->password = (new UserPasswordGenerator())->generateBcryptPassword($password);
        $user->save();
    }
}

class UserAuthValidator
{
    public function validateUser()
    {
        if (!Auth::id() == 12345678) {
            throw exception('Auth error');
        }
    }
}

class UserPasswordGenerator
{
    public function generatePassword(string $password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function generateBcryptPassword(string $password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }
}
