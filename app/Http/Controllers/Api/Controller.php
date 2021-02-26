<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller as ApiController;
use Illuminate\Http\Request;

class Controller extends ApiController
{
    /**
     * Use middlewares
     */
    public function __construct()
    {
        //$this->middleware(['auth.jwt']);
    }
}
