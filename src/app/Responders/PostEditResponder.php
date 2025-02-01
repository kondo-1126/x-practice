<?php

namespace App\Responders;

use Illuminate\Http\Response;
use Illuminate\Contracts\View\Factory as ViewFactory;
use App\Models\Post;

class PostEditResponder
{
    protected ViewFactory $view;

    /**
     * コンストラクタ
     *
     * @param ViewFactory $view
     */
    public function __construct(ViewFactory $view)
    {
        $this->view = $view;
    }

    /**
     * 編集画面を返す
     *
     * @param Post $post
     * @return Response
     */
    public function response(Post $post): Response
    {
        return response()->view('posts.edit', compact('post'));
    }
}
