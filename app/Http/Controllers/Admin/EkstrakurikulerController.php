<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        return view('admin.ekstrakurikuler.index', [
            'items' => Ekstrakurikuler::latest()->paginate(10),
        ]);
    }

    public function create()
    {
        return view('admin.ekstrakurikuler.form', ['item' => new Ekstrakurikuler]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => ['required', 'string', 'max:150'],
            'deskripsi' => ['nullable', 'string'],
            'jadwal' => ['nullable', 'string', 'max:255'],
            'pembina' => ['nullable', 'string', 'max:255'],
            'icon' => ['nullable', 'string', 'max:255'],
            'aktif' => ['required', 'boolean'],
        ]);

        $data['nama'] = trim($data['nama']);
        Ekstrakurikuler::create($data);

        return redirect()->route('admin.ekstrakurikuler.index')
            ->with('success', 'Data ekstrakurikuler berhasil ditambahkan.');
    }

    public function edit(Ekstrakurikuler $item)
    {
        return view('admin.ekstrakurikuler.form', compact('item'));
    }

    public function update(Request $request, Ekstrakurikuler $item)
    {
        $data = $request->validate([
            'nama' => ['required', 'string', 'max:150'],
            'deskripsi' => ['nullable', 'string'],
            'jadwal' => ['nullable', 'string', 'max:255'],
            'pembina' => ['nullable', 'string', 'max:255'],
            'icon' => ['nullable', 'string', 'max:255'],
            'aktif' => ['required', 'boolean'],
        ]);

        $item->update($data);

        return redirect()->route('admin.ekstrakurikuler.index')
            ->with('success', 'Data ekstrakurikuler berhasil diperbarui.');
    }

    public function destroy(Ekstrakurikuler $item)
    {
        $item->delete();

        return back()->with('success', 'Data ekstrakurikuler berhasil dihapus.');
    }
}
