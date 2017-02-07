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

        try {

            $user = JWTAuth::parseToken()->toUser();
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return $this->response->errorUnauthorized('Token has been expired.');
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return $this->response->errorUnauthorized('Token is invalid.');
        } catch (\Tymon\JWTAuth\Exceptions $e) {

            return $this->response->errorUnauthorized('Something went wrong, try after some time.');
        }

        return $this->response->array($user->toArray());
    }

}
