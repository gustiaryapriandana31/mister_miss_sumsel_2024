<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MisterMissSumselController extends Controller
{
    public function index () {
        $data = [
            'title' => 'Mister Miss Sumsel',
        ];

        return view('mistermiss.index', $data);
    }

    public function finalis () {
        $data = [
            'title' => 'Daftar Finalis | Mister Miss Sumsel',
        ];

        return view('comingsoon', $data);
    }


}
