<?php

namespace App\Http\Actions;

use App\Responders\PostCreateResponder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class PostCreateAction extends Controller
{
    protected PostCreateResponder $responder;

    public function __construct(PostCreateResponder $responder)
    {
        $this->responder = $responder;
    }

    /**
     * 新規投稿フォームを表示
     */
    public function __invoke(): Response
    {
        return $this->responder->response();
    }
}
