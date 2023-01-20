<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Author extends Model {
    public function create ($name) {
        $author = DB::table('author')
            ->select("*")
            ->where('name', '=', $name)
            ->first();

        if ($author) {
            return $author->id;
        }
        $data = DB::table('author')
            ->insertGetId([
                'name' => $name,
            ]);
        return $data;
    }
}
