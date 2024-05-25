<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
    public function index()
    {
        $books = Books::all();
        return response()->json(['books' => $books]);
    }

    public function store(Request $request)
    {
        $book = new Books;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publish_date = $request->publish_date;
        $book->save();
        return response()->json(['message' => 'Book added successfully']);
    }

    public function show($id)
    {
        $book = Books::find($id);
        // return response()->json(['book' => $book]);
        if (!empty($book)) {
            return response()->json(['book' => $book]);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        if (empty($book)) {
            return response()->json(['message' => 'Book not found'], 404);
        } else {
            $book = Books::find($id);
            $book->title = $request->title;
            $book->author = $request->author;
            $book->publish_date = $request->publish_date;
            $book->save();
            return response()->json(['message' => 'Book updated successfully']);
        }
    }

    public function destroy($id)
    {
        $book = Books::find($id);
        if (empty($book)) {
            return response()->json(['message' => 'Book not found'], 404);
        } else {
            $book->delete();
            return response()->json(['message' => 'Book deleted successfully']);
        }
    }
}
