<?php

namespace App\Responders;

use Illuminate\Http\Response;
use Illuminate\Contracts\View\Factory as ViewFactory;

class PostCreateResponder
{
    protected Response $response;
    protected ViewFactory $view;

    public function __construct(Response $response, ViewFactory $view)
    {
        $this->response = $response;
        $this->view = $view;
    }

    /**
     * 新規投稿フォームを返す
     * @return Response
     */
    public function response(): Response
    {
        $this->response->setContent($this->view->make('posts.create'));
        return $this->response;
    }
}
