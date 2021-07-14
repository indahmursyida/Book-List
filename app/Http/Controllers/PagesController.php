<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class PagesController extends Controller
{
    public function home()
    {
        $books = Book::all();
        return view('index', compact('books'));
    }
    public function about()
    {
        return view('about', ['nama' => 'Indah Mursyida']);
    }
    public function show(Book $book)
    {
        //
    }
}
