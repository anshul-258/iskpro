<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
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
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login(Request $request)
    {
        //dd($request->all());
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,'status'=>'active'])) {
        // Authentication passed...
            if(Auth::user()->role_id ==1 || Auth::user()->role_id ==2 || Auth::user()->role_id ==3)
        return redirect()->intended('admin/user/list');
            else
              return redirect()->intended('home');  
        }
        else
        {
            return redirect()->back()->with('message','Invalid Login credential');
        }
    }
}
