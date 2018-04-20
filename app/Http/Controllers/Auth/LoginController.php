<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use Illuminate\Support\Facedes\Auth;
use Auth;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
      // dd($request->all());
      if(Auth::attemp([
        'username' => $request->username,
        'password' => $request->password,
      ])){
        dd($user = User::where('username', $request->username)->first());
      }


    //    $user = User::where('username', $request->username)
    //                 ->where('password',md5($request->password))
    //                 ->first();
    //    if($user){
    //
    //    }
    //    Auth::login($user);
    //    return redirect('/');
    }
}
