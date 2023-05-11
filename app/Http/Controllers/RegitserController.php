<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;

class RegitserController extends Controller
{
    public function register()
    {
        return view('loginregister.register');
    }

    public function registeracount(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $credentials['password'] = bcrypt($credentials['password']);

        User::create($credentials);

        return redirect('login');
    }
}
