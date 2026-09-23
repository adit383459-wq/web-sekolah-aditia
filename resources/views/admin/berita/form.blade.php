@extends('admin.layout')
@section('title', $item->exists ? 'Edit Berita' : 'Tambah Berita')
@section('heading', $item->exists ? 'Edit Berita' : 'Tambah Berita')
@section('content')
<div class="admin-card form-card">
<form method="POST" action="{{ $item->exists ? route('admin.berita.update',$item) : route('admin.berita.store') }}">
@csrf @if($item->exists) @method('PUT') @endif
<label>Judul</label><input name="judul" value="{{ old('judul', $item->judul) }}" required>
<label>Slug</label><input name="slug" value="{{ old('slug', $item->slug) }}" placeholder="contoh: berita-sekolah" required>
<label>Ringkasan</label><textarea name="ringkasan" rows="4">{{ old('ringkasan', $item->ringkasan) }}</textarea>
<label>Isi Berita</label><textarea name="isi" rows="10">{{ old('isi', $item->isi) }}</textarea>
<label>Gambar (opsional)</label><input name="gambar" value="{{ old('gambar', $item->gambar) }}" placeholder="contoh: images/foto-berita.jpg">
<label>Tanggal Terbit</label><input type="datetime-local" name="published_at" value="{{ old('published_at', optional($item->published_at)->format('Y-m-d\TH:i')) }}">
<div class="form-actions"><a class="btn ghost" href="{{ route('admin.berita.index') }}">Batal</a><button class="btn primary">Simpan Data</button></div>
</form></div>
@endsection
