<?php

namespace App\Responders;

use Illuminate\Http\RedirectResponse;

class PostStoreResponder
{
    /**
     * 投稿完了後,リダイレクト
     */
    public function response($postData): RedirectResponse
    {
        return redirect()
            ->route('posts.index')
            ->with('success', '投稿が完了しました！');
    }
}
