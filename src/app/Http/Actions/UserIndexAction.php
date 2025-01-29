<?php

namespace App\Http\Actions;

use App\Domains\UserRepository AS Domain;
use App\Responders\UserIndexResponder AS Responder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class UserIndexAction extends Controller
{
    /**
     * レスポンダーのインスタンス化
     *
     * @var Domain
     * @var Responder
     */
    protected $Domain;
    protected $Responder;

    /**
     * クラスをインスタンス化する
     *
     * @param Domain $Domain
     * @param Responder $Responder
     */
    public function __construct(Domain $Domain, Responder $Responder)
    {
        $this->Domain = $Domain;
        $this->Responder = $Responder;
    }

    /**
     *
     *  @return Response
     */
    public function __invoke(): Response
    {
        return $this->Responder->response(
            $this->Domain->getAllUsers()
        );
    }
}
