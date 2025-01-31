<?php

namespace App\Http\Actions;

use App\Domains\PostDomain;
use App\Responders\PostStoreResponder;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\RedirectResponse;

class PostStoreAction extends Controller
{
    protected PostDomain $domain;
    protected PostStoreResponder $responder;

    public function __construct(PostDomain $domain, PostStoreResponder $responder)
    {
        $this->domain = $domain;
        $this->responder = $responder;
    }

    /**
     * 投稿を保存する
     */
    public function __invoke(PostRequest $request): RedirectResponse
    {
        // バリデーション済みデータを取得
        $validatedData = $request->validated();

        // 投稿を保存
        $post = $this->domain->storePost($validatedData);

        // レスポンダーでリダイレクト処理
        return $this->responder->response($post);
    }
}
