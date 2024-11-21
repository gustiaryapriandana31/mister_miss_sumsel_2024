<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthUserController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Login Admin',
            'nav' => [
                'active' => 'Admin'
            ],
        ];

        return view('admin.auth.login', $data);
    }

    public function login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt([
            "username" => $request->username,
            "password" => $request->password,
        ])){
            $request->session()->regenerate();

            return redirect()->route('admin-berita')->with("success", "Login berhasil");
        };

        return redirect()->back()->with("error", "Gagal melakukan login");
    }

    public function logout(Request $request) {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("admin-login");
    }
}
