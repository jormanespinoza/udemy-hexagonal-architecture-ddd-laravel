<?php

namespace Src\Example\User\Infrastructure\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;

final class User extends Model
{
    protected $table = 'users';
    protected $hidden = ['password'];
    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'email',
        'password'
    ];
}
