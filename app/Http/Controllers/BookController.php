<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::all();
        return view('book.index', compact(['book']));
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token', 'submit']));
        Book::create($request->except(['_token', 'submit']));
        return redirect('/book');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('book.edit', compact(['book']));
    }

    public function update($id, Request $request)
    {
        $book = Book::find($id);
        $book->update($request->except(['_token', 'submit']));
        return redirect('/book');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/book');
    }
}
