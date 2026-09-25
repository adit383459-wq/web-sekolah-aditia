<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::latest()->get();

        return view('admin.photos.index', compact('photos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $path = $request->file('image')->store('photos', 'public');

        Photo::create([
            'title' => $request->title,
            'image' => $path,
        ]);

        return redirect()
            ->route('admin.photos.index')
            ->with('success', 'Foto berhasil ditambahkan.');
    }

    public function destroy(Photo $photo)
    {
        if ($photo->image) {
            Storage::disk('public')->delete($photo->image);
        }

        $photo->delete();

        return redirect()
            ->route('admin.photos.index')
            ->with('success', 'Foto berhasil dihapus.');
    }
}

