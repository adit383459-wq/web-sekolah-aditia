@extends('admin.layout')

@section('title', 'Kelola Foto')

@section('content')

<div style="max-width:1100px;margin:auto">

    <h1 style="margin-bottom:20px;">📷 Kelola Foto</h1>

    @if(session('success'))
        <div style="padding:12px;background:#d1fae5;color:#065f46;border-radius:8px;margin-bottom:20px;">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div style="padding:12px;background:#fee2e2;color:#991b1b;border-radius:8px;margin-bottom:20px;">
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <div style="background:white;padding:20px;border-radius:12px;margin-bottom:25px;box-shadow:0 2px 10px rgba(0,0,0,.08);">

        <h2 style="margin-top:0;">Tambah Foto</h2>

        <form action="{{ route('admin.photos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div style="margin-bottom:15px;">
                <label>Judul Foto</label>

                <input
                    type="text"
                    name="title"
                    placeholder="Contoh: Kegiatan Sekolah"
                    required
                    style="width:100%;padding:10px;margin-top:6px;border:1px solid #ddd;border-radius:8px;"
                >
            </div>

            <div style="margin-bottom:15px;">
                <label>Pilih Foto</label>

                <input
                    type="file"
                    name="image"
                    accept="image/*"
                    required
                    style="display:block;margin-top:8px;"
                >
            </div>

            <button
                type="submit"
                style="background:#0066ff;color:white;border:0;padding:11px 20px;border-radius:8px;cursor:pointer;"
            >
                📤 Upload Foto
            </button>

        </form>
    </div>


    <h2>Foto yang Sudah Di-upload</h2>

    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:20px;">

        @forelse($photos as $photo)

            <div style="background:white;border-radius:12px;overflow:hidden;box-shadow:0 2px 10px rgba(0,0,0,.08);">

                <img
                    src="{{ asset('storage/' . $photo->image) }}"
                    alt="{{ $photo->title }}"
                    style="width:100%;height:180px;object-fit:cover;"
                >

                <div style="padding:15px;">

                    <h3 style="margin-top:0;">
                        {{ $photo->title }}
                    </h3>

                    <form
                        action="{{ route('admin.photos.destroy', $photo->id) }}"
                        method="POST"
                        onsubmit="return confirm('Hapus foto ini?')"
                    >
                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            style="background:#dc2626;color:white;border:0;padding:9px 15px;border-radius:7px;"
                        >
                            🗑 Hapus
                        </button>
                    </form>

                </div>

            </div>

        @empty

            <p>Belum ada foto yang di-upload.</p>

        @endforelse

    </div>

</div>

@endsection
