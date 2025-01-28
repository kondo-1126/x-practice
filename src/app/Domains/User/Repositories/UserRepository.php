<?php

namespace App\Domains\User\Repositories;

use App\Domains\User\Models\User;
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
