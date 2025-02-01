<?php

namespace App\Http\Actions;

use App\Domains\PostDomain;
use App\Responders\PostEditResponder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * 投稿の編集画面を表示するアクション
 */
class PostEditAction extends Controller
{
    protected PostDomain $domain;
    protected PostEditResponder $responder;

    /**
     * コンストラクタ
     *
     * @param PostDomain $domain ドメイン層
     * @param PostEditResponder $responder レスポンダー
     */
    public function __construct(PostDomain $domain, PostEditResponder $responder)
    {
        $this->domain = $domain;
        $this->responder = $responder;
    }

    /**
     * 投稿の編集画面を表示
     *
     * @param int $postId
     * @return Response
     */
    public function __invoke(int $postId): Response
    {
        $post = $this->domain->getPostById($postId);
        return $this->responder->response($post);
    }
}
