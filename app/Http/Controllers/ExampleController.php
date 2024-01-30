<?php

/*
    // Falla en el princio de abierto/cerrado / O de SOLID
    class User
    {
        public function identifyUser($user)
        {
            switch ($user) {
                case 'natural':
                    $this->sayHello('Natural User');
                    break;
                case 'bussines':
                    $this->sayHello('Bussinnes User');
                    break;
                case 'admin':
                    $this->sayHello('Admin User');
                    break;
                default:
                    // code
            }
        }

        public function sayHello($user)
        {
            return 'Hello World from ' . $user;
        }
    }
*/

interface User
{
    public function sayHello();
}

class UserImplementation
{
    public function identifyUser(User $user)
    {
        $user->sayHello();
    }
}

class NaturalUser implements User
{
    public function sayHello()
    {
        return 'Hello World from Natural User';
    }
}

class BussinnesUser implements User
{
    public function sayHello()
    {
        return 'Hello World from Bussiness User';
    }
}

class AdminUser implements User
{
    public function sayHello()
    {
        return 'Hello World from Admin User';
    }
}
