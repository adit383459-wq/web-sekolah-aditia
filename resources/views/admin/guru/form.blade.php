@extends('admin.layout')
@section('title', $item->exists ? 'Edit Data Guru' : 'Tambah Data Guru')
@section('heading', $item->exists ? 'Edit Data Guru' : 'Tambah Data Guru')
@section('content')
<div class="admin-card form-card">
<form method="POST" action="{{ $item->exists ? route('admin.guru.update',$item) : route('admin.guru.store') }}">
@csrf @if($item->exists) @method('PUT') @endif
<label>Nama</label><input name="nama" value="{{ old('nama', $item->nama) }}" required>
<label>NIP</label><input name="nip" value="{{ old('nip', $item->nip) }}">
<label>Jabatan</label><input name="jabatan" value="{{ old('jabatan', $item->jabatan) }}">
<label>Mapel</label><input name="mapel" value="{{ old('mapel', $item->mapel) }}">
<label>Foto (opsional)</label><input name="foto" value="{{ old('foto', $item->foto) }}" placeholder="contoh: images/nama-foto.jpg">
<div class="form-actions"><a class="btn ghost" href="{{ route('admin.guru.index') }}">Batal</a><button class="btn primary">Simpan Data</button></div>
</form></div>
@endsection
