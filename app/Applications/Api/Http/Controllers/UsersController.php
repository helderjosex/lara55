<?php

namespace App\Applications\Api\Http\Controllers;

use App\Domains\User\Entities\User;

class UsersController extends BaseController
{

    /**
     * @var User
     */
    private $users;

    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        return $this->users->all();
    }
}