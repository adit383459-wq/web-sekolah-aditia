<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Ekstrakurikuler;
use App\Models\Guru;
use App\Models\Jurusan;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'jurusan' => Jurusan::where('aktif', true)->orderBy('nama')->get(),
            'guruCount' => Guru::count(),
            'guru' => Guru::orderBy('id')->take(8)->get(),
            'ekskul' => Ekstrakurikuler::where('aktif', true)->orderBy('nama')->get(),
            'berita' => Berita::latest('published_at')->take(5)->get(),
        ]);
    }

    public function jurusan() { return view('pages.jurusan', ['jurusan' => Jurusan::where('aktif', true)->get()]); }
    public function guru() { return view('pages.guru', ['guru' => Guru::latest()->get()]); }
    public function ekstrakurikuler() { return view('pages.ekstrakurikuler', ['ekskul' => Ekstrakurikuler::where('aktif', true)->get()]); }
    public function berita() { return view('pages.berita', ['berita' => Berita::latest('published_at')->paginate(9)]); }
    public function showBerita(Berita $berita) { return view('pages.berita-detail', compact('berita')); }
}
