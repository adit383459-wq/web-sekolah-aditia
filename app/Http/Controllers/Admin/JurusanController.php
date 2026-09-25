<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class JurusanController extends Controller
{
    public function index()
    {
        return view('admin.jurusan.index', [
            'items' => Jurusan::latest()->paginate(10),
        ]);
    }

    public function create()
    {
        return view('admin.jurusan.form', [
            'item' => new Jurusan
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => ['required', 'string', 'max:150'],
            'kode' => ['required', 'string', 'max:20', 'unique:jurusans,kode'],
            'deskripsi' => ['nullable', 'string'],
            'icon' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'aktif' => ['required', 'boolean'],
        ]);

        $data['nama'] = trim($data['nama']);
        $data['kode'] = strtoupper(trim($data['kode']));

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('jurusan', 'public');
        }

        Jurusan::create($data);

        return redirect()
            ->route('admin.jurusan.index')
            ->with('success', 'Data jurusan berhasil ditambahkan.');
    }

    public function edit(Jurusan $item)
    {
        return view('admin.jurusan.form', compact('item'));
    }

    public function update(Request $request, Jurusan $item)
    {
        $data = $request->validate([
            'nama' => ['required', 'string', 'max:150'],
            'kode' => [
                'required',
                'string',
                'max:20',
                Rule::unique('jurusans', 'kode')->ignore($item->id),
            ],
            'deskripsi' => ['nullable', 'string'],
            'icon' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'aktif' => ['required', 'boolean'],
        ]);

        $data['nama'] = trim($data['nama']);
        $data['kode'] = strtoupper(trim($data['kode']));

        if ($request->hasFile('icon')) {
            if ($item->icon) {
                Storage::disk('public')->delete($item->icon);
            }

            $data['icon'] = $request->file('icon')->store('jurusan', 'public');
        } else {
            unset($data['icon']);
        }

        $item->update($data);

        return redirect()
            ->route('admin.jurusan.index')
            ->with('success', 'Data jurusan berhasil diperbarui.');
    }

    public function destroy(Jurusan $item)
    {
        if ($item->icon) {
            Storage::disk('public')->delete($item->icon);
        }

        $item->delete();

        return back()->with('success', 'Data jurusan berhasil dihapus.');
    }
}
