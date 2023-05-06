<?php

namespace App\Services\impl;

use App\Services\UserService;
use Illuminate\Support\Facades\DB;

class UserServiceImpl implements UserService
{
    public function login(string $username, string $password): bool
    {
        return DB::table('tbpengguna')
            ->where('username', '=', $username)
            ->where('password', '=', $password)
            ->exists();
    }
}
