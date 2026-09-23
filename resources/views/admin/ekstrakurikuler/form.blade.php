@extends('admin.layout')

@section('title', $item->exists ? 'Edit Ekstrakurikuler' : 'Tambah Ekstrakurikuler')
@section('heading', $item->exists ? 'Edit Ekstrakurikuler' : 'Tambah Ekstrakurikuler')

@section('content')
<div class="admin-card form-card">
    <form method="POST" action="{{ $item->exists ? route('admin.ekstrakurikuler.update', $item) : route('admin.ekstrakurikuler.store') }}">
        @csrf
        @if($item->exists) @method('PUT') @endif

        <label>Nama</label>
        <input name="nama" value="{{ old('nama', $item->nama) }}" required>

        <label>Deskripsi</label>
        <textarea name="deskripsi" rows="4">{{ old('deskripsi', $item->deskripsi) }}</textarea>

        <label>Jadwal</label>
        <input name="jadwal" value="{{ old('jadwal', $item->jadwal) }}">

        <label>Pembina</label>
        <input name="pembina" value="{{ old('pembina', $item->pembina) }}">

        <label>Icon</label>
        <input name="icon" value="{{ old('icon', $item->icon) }}" placeholder="Contoh: 🏐">

        <label class="check">
            <input type="hidden" name="aktif" value="0">
            <input type="checkbox" name="aktif" value="1" @checked(old('aktif', $item->exists ? $item->aktif : true))>
            Aktif
        </label>

        <div class="form-actions">
            <a class="btn ghost" href="{{ route('admin.ekstrakurikuler.index') }}">Batal</a>
            <button type="submit" class="btn primary">Simpan Data</button>
        </div>
    </form>
</div>
@endsection
