<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index() { return view('admin.guru.index', ['items' => Guru::latest()->paginate(10)]); }
    public function create() { return view('admin.guru.form', ['item' => new Guru]); }
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'=>['required','max:150'],
            'nip'=>['nullable','max:255'],
            'jabatan'=>['nullable','max:255'],
            'mapel'=>['nullable','max:255'],
            'foto'=>['nullable','max:255']
        ]);
        if (isset($data['nama'])) $data['nama'] = trim($data['nama']);
        Guru::create($data);
        return redirect()->route('admin.guru.index')->with('success', 'Data berhasil ditambahkan.');
    }
    public function edit(Guru $item) { return view('admin.guru.form', compact('item')); }
    public function update(Request $request, Guru $item)
    {
        $data = $request->validate([
            'nama'=>['required','max:150'],
            'nip'=>['nullable','max:255'],
            'jabatan'=>['nullable','max:255'],
            'mapel'=>['nullable','max:255'],
            'foto'=>['nullable','max:255']
        ]);
        $item->update($data);
        return redirect()->route('admin.guru.index')->with('success', 'Data berhasil diperbarui.');
    }
    public function destroy(Guru $item)
    {
        $item->delete();
        return back()->with('success', 'Data berhasil dihapus.');
    }
}
