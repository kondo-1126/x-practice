<?php

namespace App\Responders;

use Illuminate\Http\Response;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Database\Eloquent\Collection;

class PostIndexResponder
{
    protected Response $response;
    protected ViewFactory $view;

    /**
     * コンストラクタ
     *
     * @param Response $response
     * @param ViewFactory $view
     */
    public function __construct(Response $response, ViewFactory $view)
    {
        $this->response = $response;
        $this->view     = $view;
    }

    /**
     * 投稿一覧をビューに渡してレスポンスを返す
     *
     * @param Collection $posts
     * @return Response
     */
    public function response(Collection $posts): Response
    {
        $this->response->setContent(
            $this->view->make('posts.index', ['posts' => $posts])
        );

        return $this->response;
    }
}
