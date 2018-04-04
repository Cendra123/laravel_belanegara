<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
<<<<<<< HEAD
=======
public function postLogin(Request $request)
{
    // $this->validate($request, [
    //     'email' => 'required|email', 'password' => 'required',
    // ]);

    // $credentials = $request->only('email', 'password');
    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = bcrypt($value);
    // }
    $this->validate($request, [
            'name' => 'required|name', 'password' => 'required',
        ]);

        if ($this->auth->validate(['username' => $request->name, 'password' => md5($credentials['password']), 'status' => 0])) {
            return redirect($this->loginPath())
                ->withInput($request->only('username', 'remember'))
                ->withErrors('Your account is Inactive or not verified');
        }


    if ($this->auth->attempt($credentials, $request->has('remember')))
    {
        /* Check if the user is Activated */
        $userID = \Auth::user()->id;
        $user = new \App\User;
        $result = $user->isUserActivated($userID);

        if($result[0]->status == 1)
        {
            return redirect()->intended($this->redirectPath());
        }
        else if($result[0]->status == 0)
        {
            Session::flash('alert-danger', 'Your account is not yet Activated.');
            return Redirect::to('auth/login');
        }

    }

    return redirect($this->loginPath())
                ->withInput($request->only('username', 'remember'))
                ->withErrors([
                    'username' => $this->getFailedLoginMessage(),
                ]);
}
>>>>>>> theme
}
