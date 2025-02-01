<?php

namespace App\Http\Actions;

use App\Domains\PostDomain;
use App\Responders\PostDeleteResponder;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class PostDeleteAction extends Controller
{
    protected $domain;
    protected $responder;

    /**
     * コンストラクタ
     *
     * @param PostDomain $domain
     * @param PostDeleteResponder $responder
     */
    public function __construct(PostDomain $domain, PostDeleteResponder $responder)
    {
        $this->domain = $domain;
        $this->responder = $responder;
    }

    /**
     * 投稿を削除する
     *
     * @param int $postId
     * @return RedirectResponse
     */
    public function __invoke(int $postId): RedirectResponse
    {
        $this->domain->deletePost($postId);
        return $this->responder->response();
    }
}
