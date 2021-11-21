<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $items = Book::with('author')->get();
        return view('book.index', ['items' => $items]);
    }
}
