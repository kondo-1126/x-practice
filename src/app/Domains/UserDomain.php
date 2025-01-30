<?php

namespace App\Domains;

use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;

class UserDomain
{
    protected $userRepository;

    /**
     * コンストラクタ
     *
     * @param UserRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * ユーザーの全取得
     *
     * @return Collection
     */
    public function getAllUsers(): Collection
    {
        return $this->userRepository->getAllUsers();
    }
}
