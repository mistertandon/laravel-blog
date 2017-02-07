<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class PrivateUserController extends Controller {

    /**
     * This function is used to retrieve users list without authenticating
     * the request.
     * 
     * @return type
     */
    public function getUsersList() {

        return User::all();
    }

    /**
     * This function is used to recognize user by analyzing passed JWT.
     * 
     * @return type
     */
    public function recognizeUser() {

        return JWTAuth::parseToken()->toUser();
    }

}
