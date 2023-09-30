<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index ()
    {
        $books = [
            (object)['name' => 'Introduction to JAVA', 'author' => 'noname', 'edition' => 55],
            (object)['name' => 'Clean Code', 'author' => 'Uncle Bob', 'edition' => 5],
            (object)['name' => 'Clean Coder', 'author' => 'Uncle Bob', 'edition' => 7]
        ];

        return view('books.getall')->with(compact('books'));
    }
}
