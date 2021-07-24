<?php

namespace App\Controllers;

use AElnemr\RestFullResponse\CoreJsonResponse;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    use CoreJsonResponse;

    public function index()
    {
        return $this->body(
            User::all()->toArray(),
            'success'
        );
    }

    public function show($id)
    {
        return User::query()->findOrFail($id);
    }
}