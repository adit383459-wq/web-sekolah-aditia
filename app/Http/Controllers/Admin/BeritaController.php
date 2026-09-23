<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index() { return view('admin.berita.index', ['items' => Berita::latest()->paginate(10)]); }
    public function create() { return view('admin.berita.form', ['item' => new Berita]); }
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul'=>['required','max:200'],
            'slug'=>['required','max:220','unique:berita,slug'],
            'ringkasan'=>['nullable','string'],
            'isi'=>['nullable','string'],
            'gambar'=>['nullable','max:255'],
            'published_at'=>['nullable','date']
        ]);
        $data['judul'] = trim($data['judul']);
        $data['slug'] = Str::slug($data['slug']);
        Berita::create($data);
        return redirect()->route('admin.berita.index')->with('success', 'Data berhasil ditambahkan.');
    }
    public function edit(Berita $item) { return view('admin.berita.form', compact('item')); }
    public function update(Request $request, Berita $item)
    {
        $data = $request->validate([
            'judul'=>['required','max:200'],
            'slug'=>['required','max:220','unique:berita,slug,'.$item->id],
            'ringkasan'=>['nullable','string'],
            'isi'=>['nullable','string'],
            'gambar'=>['nullable','max:255'],
            'published_at'=>['nullable','date']
        ]);
        $item->update($data);
        return redirect()->route('admin.berita.index')->with('success', 'Data berhasil diperbarui.');
    }
    public function destroy(Berita $item)
    {
        $item->delete();
        return back()->with('success', 'Data berhasil dihapus.');
    }
}
