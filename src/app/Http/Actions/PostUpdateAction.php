<?php

namespace App\Http\Actions;

use App\Domains\PostDomain;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

/**
 * 投稿を更新するアクション
 */
class PostUpdateAction extends Controller
{
    protected PostDomain $domain;

    /**
     * コンストラクタ
     *
     * @param PostDomain $domain ドメイン層
     */
    public function __construct(PostDomain $domain)
    {
        $this->domain = $domain;
    }

    /**
     * 投稿を更新
     *
     * @param PostRequest $request
     * @param int $postId
     * @return RedirectResponse
     */
    public function __invoke(PostRequest $request, int $postId): RedirectResponse
    {
        $this->domain->updatePost($postId, $request->validated());
        return redirect()->route('posts.index')->with('success', '投稿が更新されました。');
    }
}

