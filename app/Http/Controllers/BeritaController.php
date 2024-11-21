<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    public function index () {
        $data = [
            'title' => 'Berita | B Management',
            'nav' => [
                'active' => 'Berita'
            ],
            'posts' => Berita::all()->sortByDesc('created_at'),
        ];

        return view('berita.index', $data);
    }

    public function display($id) {
        $post = Berita::getPost($id);

        $data = [
            'title' => $post['title'],
            'nav' => [
                'active' => 'Berita'
            ],
            'post' => $post,
            'posts' => Berita::where('id', '!=', $id)->get()->sortByDesc('created_at')->take(3),
        ];

        return view('berita.display', $data);
    }

        public function dashboard() {
        $data = [
            'title' => 'Dashboard Berita | B Management',
            'nav' => [
                'active' => 'Berita'
            ],
            'posts' => Berita::all()->sortByDesc('created_at'),
        ];

        return view('admin.dashboard.berita', $data);
    }

    public function formInsertBerita() {
        $data = [
            'title' => 'Dashboard',
            'nav' => [
                'active' => 'Berita',
                'method' => 'Insert',
            ],
        ];

        return view('admin.dashboard.form-berita', $data);
    }

    public function insertBerita(Request $request) {
        $request->validate([
            'title' => ['required', 'string'],
            'content' => ['required', 'string'],
            'thumbnail' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        if($request->file('thumbnail')) {
            $foto = $request->file('thumbnail');
            $fileFoto = date('mdYHis').'_'.uniqid().'_'.$foto->getClientOriginalName();

            $post = new Berita(array_merge($request->all(), ['thumbnail' => $fileFoto]));

            if ($post->save()) {
                $foto->move(public_path('img/berita'), $fileFoto);
                $request->session()->regenerate();
                return redirect()->route('admin-berita')->with("success", "Postingan berhasil ditambahkan");
            }
        }

        return back()->with("error", "Gagal menambahkan postingan");
    }

    public function formUpdateBerita($id) {
        $data = [
            'title' => 'Dashboard',
            'nav' => [
                'active' => 'Berita',
                'method' => 'Update',
            ],
            'post' => Berita::getPost($id),
        ];

        return view('admin.dashboard.form-berita', $data);
    }

    public function updateBerita(Request $request) {
        $request->validate([
            'id' => ['required'],
            'title' => ['required', 'string'],
            'content' => ['required', 'string'],
            'thumbnail' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $post = Berita::getPost($request->id);

        if ($post) {
            if ($request->file('thumbnail')) {
                $foto = $request->file('thumbnail');
                $fileFoto = date('mdYHis').'_'.uniqid().'_'.$foto->getClientOriginalName();

                $oldPath = public_path('img/berita/').$post['thumbnail'];

                if(File::exists($oldPath)) {
                    File::delete($oldPath);

                    $foto->move(public_path('img/berita'), $fileFoto);
                    $post->update(array_merge($request->all(), ['thumbnail' => $fileFoto]));
                }
            } else {
                $post->update($request->all());
            }

            $request->session()->regenerate();
            return redirect()->route('admin-berita')->with("success", "Postingan berhasil diperbaharui");
        }

        return back()->with("error", "Gagal memperbaharui postingan");
    }

    public function deleteBerita(Request $request) {
        $post = Berita::getPost($request->id);

        if ($post) {
            $path = public_path('img/berita/').$post['thumbnail'];;

            if(File::exists($path)) {
                File::delete($path);
            }

            $post->delete();

            $request->session()->regenerate();
            return redirect()->route('admin-berita')->with("success", "Postingan berhasil dihapus");
        }

        return back()->with("error", "Gagal menghapus postingan");
    }
}
