<?php

namespace App\Responders;

use Illuminate\Http\Response;
use Illuminate\Contracts\View\Factory as ViewFactory;

class UserIndexResponder
{
    protected $response;
    protected $view;

    public function __construct(Response $response, ViewFactory $view)
    {
        $this->response = $response;
        $this->view     = $view;
    }

    /**
     *
     * @return Response
     */
    public function response($users): Response
    {

        $this->response->setContent(
            $this->view->make('user.index', ['users' => $users])
        );

        return $this->response;
    }
}
