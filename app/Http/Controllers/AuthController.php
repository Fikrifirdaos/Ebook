<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function main()
    {
        return view ('layout.main');
    }

    public function welcome()
    {
        return view ('welcome');
    }



    public function login()
    {
        return view('loginregister.login');
    }
    
    public function auth(Request $request){
        $credentials = $request->only('email', 'password');
 
        if (Auth::attempt($credentials)) 
        {
            $request->session()->regenerate();
            if(Auth::User() && Auth::User()->IsAdmin == true){
                return redirect('dashboard');
            }
            return redirect()->intended('/dashboard/User');
        }
  
    }

    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}
    
}

