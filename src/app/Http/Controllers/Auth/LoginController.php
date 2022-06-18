<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Administrator;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    //管理者ログインフォーム
    public function adminLoginForm(){
        return view('admin.login', ['authgroup' => 'admin']);
    }

    public function adminAuthentication(Request $request){
        //認証機能
        $admin = Administrator::first();
        if(Hash::check($request->password, $admin->password)){
            $request->session()->regenerate();

            Auth::guard('admin')->login($admin);

            return redirect()->route('admin.show');
        }
        return back()->withErrors([
            'password' => 'パスワードが一致しません',
        ]);
    }
}
