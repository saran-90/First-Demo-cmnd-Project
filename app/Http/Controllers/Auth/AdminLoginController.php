<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Admin;
class AdminLoginController extends Controller
{
     /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
        protected $guard = 'admin';
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    protected function guard(){
        return Auth::guard('admin');
    }
    
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
     public function login(Request $request)
    {    

          if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => 
            $request->password])){
           return redirect()->intended(route('admin.dashboard'));
           // dd(auth()->guard('admin')->user());

        }
       return back()->withErrors(['email' => 'Email or password are wrong.']);

    }
}
