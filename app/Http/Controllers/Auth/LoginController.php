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
// use Illuminate\Support\Facades\Auth;

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
      $this->validation($request);
      if(Auth::attempt(['username'=>$request->username,'password'=>md5($request->password)])){
        // return 'berhasil login';
        return View('home');
      }
      else{
        // return 'gagal login';
        return view('auth.login');
      }
    }


    //Change laravel_belanegara\vendor\laravel\framework\src\Illuminate\Auth\Authenticatable.php
    // Authenticable
    // public function getAuthPassword()
    // {
    //     return bcrypt($this->password);

    // }
    public function username()
    {
        return 'username';
    }
    public function validation($request){
      return $this->validate($request,[
        'username' => 'required|max:225',
        'password' => 'required|max:225'
      ]);
    }
  }
