<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;

class PersController extends Controller
{
    public function dashboard()
    {
        $book=Book::count();
        $data=User::count();
        return view ('main.dashboard', compact('data','book'));
        
    }
    public function user()
    {
        return view ('main.user');
    }

    

    public function rentlogs()
    {
        return view ('main.rentlogs');
    }

    public function dashUser(){
        $card=Book::get();
        return view('userdashboard.userdash', compact('card'));
    }
}
