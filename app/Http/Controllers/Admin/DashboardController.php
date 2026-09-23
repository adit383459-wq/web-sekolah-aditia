<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Ekstrakurikuler;
use App\Models\Guru;
use App\Models\Jurusan;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'jurusanCount' => Jurusan::count(),
            'guruCount' => Guru::count(),
            'ekskulCount' => Ekstrakurikuler::count(),
            'beritaCount' => Berita::count(),
            'latestNews' => Berita::latest()->take(5)->get(),
        ]);
    }
}
