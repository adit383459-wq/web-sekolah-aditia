<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        return view('admin.berita.index', [
            'items' => Berita::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.berita.form', [
            'item' => new Berita
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => ['required', 'max:200'],
            'slug' => ['required', 'max:220', 'unique:berita,slug'],
            'ringkasan' => ['nullable', 'string'],
            'isi' => ['nullable', 'string'],
            'gambar' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'published_at' => ['nullable', 'date'],
        ]);

        $data['judul'] = trim($data['judul']);
        $data['slug'] = Str::slug($data['slug']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        }

        Berita::create($data);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Data berita berhasil ditambahkan.');
    }

    public function edit(Berita $item)
    {
        return view('admin.berita.form', compact('item'));
    }

    public function update(Request $request, Berita $item)
    {
        $data = $request->validate([
            'judul' => ['required', 'max:200'],
            'slug' => ['required', 'max:220', 'unique:berita,slug,' . $item->id],
            'ringkasan' => ['nullable', 'string'],
            'isi' => ['nullable', 'string'],
            'gambar' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'published_at' => ['nullable', 'date'],
        ]);

        $data['judul'] = trim($data['judul']);
        $data['slug'] = Str::slug($data['slug']);

        if ($request->hasFile('gambar')) {
            if ($item->gambar) {
                Storage::disk('public')->delete($item->gambar);
            }

            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        } else {
            unset($data['gambar']);
        }

        $item->update($data);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Data berita berhasil diperbarui.');
    }

    public function destroy(Berita $item)
    {
        if ($item->gambar) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return back()->with('success', 'Data berita berhasil dihapus.');
    }
}
