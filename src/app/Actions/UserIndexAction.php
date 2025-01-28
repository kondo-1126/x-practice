<?php

namespace App\Actions;

use App\Domains\User\Repositories\UserRepository;
use App\Responders\UserIndexResponder;
use Illuminate\Contracts\View\View;

class UserIndexAction
{
    /**
     * レスポンダーのインスタンス化
     *
     * @var UserRepository
     * @var UserIndexResponder
     */
    protected $userRepository;
    protected $responder;

    /**
     * クラスをインスタンス化する
     *
     * @param UserRepository $userRepository
     * @param UserIndexResponder $userIndexResponder
     */
    public function __construct(UserRepository $userRepository, UserIndexResponder $responder)
    {
        $this->userRepository = $userRepository;
        $this->responder = $responder;
    }

    public function __invoke(): View
    {
        // Domain（リポジトリ）からデータ取得
        $users = $this->userRepository->getAllUsers();

        // Responderに結果を渡して処理を委ねる
        return $this->responder->respond($users);
    }
}
