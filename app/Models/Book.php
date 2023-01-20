<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Book extends Model
{
    public function getBook ()
    {
        $books = DB::table('book')
            ->select("book.name as book_name" , "author.name as author_name", "book.description as description")
            ->leftJoin('author', 'book.author_id', '=', 'author.id')
            ->get();

        return $books;
    }
    public function create($data)
    {
        DB::table('book')
            ->insert([
                'name' => $data['name'],
                'author_id' => $data['author_id'],
                'description' => $data['description'],
                'page_count' => $data['page_count'],
                ]);
    }
};

