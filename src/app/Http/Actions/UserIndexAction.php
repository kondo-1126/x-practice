<?php

namespace App\Http\Actions;

use App\Domains\UserDomain;
use App\Responders\UserIndexResponder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class UserIndexAction extends Controller
{
    protected  $domain;
    protected  $responder;

    /**
     * インスタンス化する
     *
     * @param UserDomain $domain
     * @param UserIndexResponder $responder
     */
    public function __construct(UserDomain $domain, UserIndexResponder $responder)
    {
        $this->domain = $domain;
        $this->responder = $responder;
    }

    /**
     * ユーザー一覧を取得してレスポンスを返す
     *
     * @return Response
     */
    public function __invoke(): Response
    {
        return $this->responder->response(
            $this->domain->getAllUsers()
        );
    }
}
