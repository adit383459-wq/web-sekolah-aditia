@extends('admin.layout')

@section('title', $item->exists ? 'Edit Berita' : 'Tambah Berita')
@section('heading', $item->exists ? 'Edit Berita' : 'Tambah Berita')

@section('content')

<div class="admin-card form-card">

<form
    method="POST"
    action="{{ $item->exists ? route('admin.berita.update', $item) : route('admin.berita.store') }}"
    enctype="multipart/form-data"
>

@csrf

@if($item->exists)
    @method('PUT')
@endif

<label>Judul</label>
<input
    name="judul"
    value="{{ old('judul', $item->judul) }}"
    required
>

<label>Slug</label>
<input
    name="slug"
    value="{{ old('slug', $item->slug) }}"
    placeholder="contoh: berita-sekolah"
    required
>

<label>Ringkasan</label>
<textarea
    name="ringkasan"
    rows="4"
>{{ old('ringkasan', $item->ringkasan) }}</textarea>

<label>Isi Berita</label>
<textarea
    name="isi"
    rows="10"
>{{ old('isi', $item->isi) }}</textarea>

<label>Foto Berita</label>

@if($item->exists && $item->gambar)
    <div style="margin:10px 0;">
        <img
            src="{{ asset('storage/' . $item->gambar) }}"
            alt="Foto {{ $item->judul }}"
            style="width:200px;height:130px;object-fit:cover;border-radius:12px;"
        >
    </div>
@endif

<input
    type="file"
    name="gambar"
    accept="image/jpeg,image/png,image/webp"
>

<small>
    Format JPG, JPEG, PNG, WEBP. Maksimal 5 MB.
</small>

<label>Tanggal Terbit</label>
<input
    type="datetime-local"
    name="published_at"
    value="{{ old('published_at', optional($item->published_at)->format('Y-m-d\TH:i')) }}"
>

<div class="form-actions">

    <a
        class="btn ghost"
        href="{{ route('admin.berita.index') }}"
    >
        Batal
    </a>

    <button
        class="btn primary"
        type="submit"
    >
        Simpan Data
    </button>

</div>

</form>

</div>

@endsection
