<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Usuarios;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->is_logged) {

            $this->guard()->logout();
            
            $request->session()->invalidate();

            return redirect("/")->with("error", "");

        }else{

            $user->is_logged = true;
            $user->save();

        }

        return redirect($this->redirectPath());

    }

    public function logout(Request $request)
    {
        $user = Usuarios::find(auth()->id());

        $user->is_logged = false;

        $user->save();

        $this->guard()->logout();
        
        $request->session()->invalidate();

        return $this->loggedOut($request) ? : redirect('/');
    }

    public function loggedOut(Request $request)
    {
        return redirect("/")->with("success", "");
    }
}
