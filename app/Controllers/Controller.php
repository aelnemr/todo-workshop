<?php


namespace App\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $request;

    public function __construct()
    {
        $this->request = Request::capture();
    }
}