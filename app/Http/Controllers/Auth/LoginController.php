<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Este método define el campo que se utilizará para la autenticación
    public function username()
    {
        return 'name'; // Cambia 'email' a 'name'
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password'); // Usa el método username()
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended($this->redirectTo);
    }
}
