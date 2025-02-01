<?php

namespace App\Responders;

use Illuminate\Http\RedirectResponse;

class PostDeleteResponder
{
    /**
     * 削除後に投稿一覧へリダイレクト
     *
     * @return RedirectResponse
     */
    public function response(): RedirectResponse
    {
        return redirect()->route('posts.index')->with('success', '投稿を削除しました。');
    }
}
