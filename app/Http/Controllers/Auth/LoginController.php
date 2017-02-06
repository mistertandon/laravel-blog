<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
     */

use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'posts';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLoginForm() {

        return view('auths.login');
    }

    /**
     * This function is used to authenticate user request using JWT token.
     * 
     */
    public function authenticateRequest(Request $request) {

        $credentials = $request->only('email', 'password');

        try {

            if (!$token = JWTAuth::attempt($credentials)) {

                $this->response->error(['error' => 'Either Email-Address or password is in-correct.'], 500);
            }
        } catch (JWTException $ex) {

            $this->response->error(['error' => 'Something went wrong, try after some time.'], 500);
        }

        return $this->response->array(compact('token'))->setStatusCode(200);
    }

}
