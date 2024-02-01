<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books=Book::all();
        return view('admin.books',compact('books'));
        
    }
    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('admin.books');
        // dd($request);
    }
    public function destroy(Book $book)
    {
        $book->delete();
        // return to_route('admin.books')->with('success','book deleted successfully');
        // dd($book);
        return redirect()->route('admin.books');
    }
    public function edit(Book $book)
    {
        return view('admin.editBook',compact('book'));
    }
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('admin.books');
    }
}
