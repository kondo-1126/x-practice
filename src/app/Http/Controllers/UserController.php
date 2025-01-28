<?php

namespace App\Http\Controllers;

use App\Actions\UserIndexAction;

class UserController extends Controller
{
    protected $userIndexAction;

    public function __construct(UserIndexAction $userIndexAction)
    {
        $this->userIndexAction = $userIndexAction;
    }

    public function index()
    {
        // Actionを呼び出す
        return ($this->userIndexAction)();
    }
}
