<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "id",
        "title",
        "thumbnail",
        "content",
    ];

    public static function getPost($id = null) {
        if ($id == null) {
            return Berita::all();
        }

        return Berita::where('id', $id)->first();
    }
}

