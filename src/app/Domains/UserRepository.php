<?php

namespace App\Domains;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository
{
    /**
     * ユーザーの全取得
     *
     * @return Collection
     */
    public function getAllUsers(): Collection
    {
        return User::all();
    }

}
