<?php

namespace App\Http\Controllers;

use LucaDegasperi\OAuth2Server\Authorizer;

class UserController extends CommonController
{
    public function __construct(Authorizer $authorizer)
    {
        parent::__construct($authorizer);
        $this->middleware('oauth', ['except' => ['store']]);
        $this->middleware('validation');
    }

    private static $_validate = [
        // 'store' => [
            // todo
        // ]
    ];

    public function store()
    {
        // todo
    }
}