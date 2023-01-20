<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function book()
    {
        return view('book', ['books' => (new \App\Models\Book)->getBook()]);
    }

    public function addBook(Request $request)
    {
        $data = array(
            "name" => $request->bookName,
            "author_id" => (new \App\Models\Author)->create($request->authorName),
            "description" => $request->description,
            "page_count" => $request->pageCount,

        );

       (new \App\Models\Book)->create($data);
        return redirect('/book');
   }
}
