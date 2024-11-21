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
        "trigger",
    ];

    public static function getPostById($id = null) {
        return Berita::where('id', $id)->first();
    }
}

