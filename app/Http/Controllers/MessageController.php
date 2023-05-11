<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\User;
class MessageController extends Controller
{
    public function storeMessage(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'message'=>'required',
        ]);

        Message::create ($request->all());
        return redirect('/');
    }

}

        
       
