<?php

namespace App\Responders;

use Illuminate\Contracts\View\View;

class UserIndexResponder
{
    /**
     * ビューにデータを渡す
     *
     * @return View
     */
    public function respond($users): View
    {
        return view('user.index', compact('users'));
    }
}
