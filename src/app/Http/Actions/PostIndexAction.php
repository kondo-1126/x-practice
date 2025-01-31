<?php

namespace App\Http\Actions;

use App\Domains\PostDomain;
use App\Responders\PostIndexResponder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class PostIndexAction extends Controller
{
    protected PostDomain $domain;
    protected PostIndexResponder $responder;

    public function __construct(PostDomain $domain, PostIndexResponder $responder)
    {
        $this->domain = $domain;
        $this->responder = $responder;
    }

    /**
     * 投稿一覧を取得する
     *
     * @return Response
     */
    public function __invoke(): Response
    {
        return $this->responder->response(
            $this->domain->getAllPosts()
        );
    }
}
