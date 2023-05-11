<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function book()
    {
        $book=Book::get();
        return view ('main.book',compact('book'));
    }

    public function category()
    {
        $category=Book::get();
        return view ('main.category',compact('category'));
    }

    public function bookCreate(Request $request){
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'release' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);


        Book::create($request->all());
        return redirect('book');
    }
}
