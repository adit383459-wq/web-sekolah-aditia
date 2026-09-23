@extends('admin.layout')

@section('title', $item->exists ? 'Edit Jurusan' : 'Tambah Jurusan')
@section('heading', $item->exists ? 'Edit Jurusan' : 'Tambah Jurusan')

@section('content')
<div class="admin-card form-card">
    <form method="POST" action="{{ $item->exists ? route('admin.jurusan.update', $item) : route('admin.jurusan.store') }}">
        @csrf
        @if($item->exists) @method('PUT') @endif

        <label>Nama Jurusan</label>
        <input name="nama" value="{{ old('nama', $item->nama) }}" required>

        <label>Kode Jurusan</label>
        <input name="kode" value="{{ old('kode', $item->kode) }}" maxlength="20" required>

        <label>Deskripsi</label>
        <textarea name="deskripsi" rows="4">{{ old('deskripsi', $item->deskripsi) }}</textarea>

        <label>Icon</label>
        <input name="icon" value="{{ old('icon', $item->icon) }}" placeholder="Contoh: 💻">

        <label class="check">
            <input type="hidden" name="aktif" value="0">
            <input type="checkbox" name="aktif" value="1" @checked(old('aktif', $item->exists ? $item->aktif : true))>
            Aktif
        </label>

        <div class="form-actions">
            <a class="btn ghost" href="{{ route('admin.jurusan.index') }}">Batal</a>
            <button type="submit" class="btn primary">Simpan Data</button>
        </div>
    </form>
</div>
@endsection
