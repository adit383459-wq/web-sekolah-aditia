@extends('layouts.app')
@section('title','SMK Negeri 1 Cijati | Beranda')

@section('content')
<section class="hero hero-home hero-photo">
    <div class="hero-photo-overlay"></div>
    <div class="container hero-grid">
        <div class="hero-copy">
            <div class="hero-badge hero-badge-light"><span class="dot"></span> SELAMAT DATANG DI WEBSITE RESMI</div>
            <h1>SMK NEGERI 1 <span>CIJATI</span></h1>
            <div class="hero-motto">Bersama Mendidik Generasi Unggul,<br>Berkarakter dan Berdaya Saing</div>
            <p class="hero-lead">SMK Negeri 1 Cijati hadir sebagai lembaga pendidikan kejuruan yang berkomitmen mencetak lulusan yang kompeten, berkarakter, dan siap menghadapi dunia kerja maupun melanjutkan pendidikan.</p>
            <div class="hero-actions">
                <a class="btn hero-yellow" href="{{ route('jurusan') }}">📚 Lihat Jurusan <span>→</span></a>
                <a class="btn hero-outline-light" href="#profil">ⓘ Profil Sekolah</a>
            </div>
            <div class="hero-stats hero-stats-light">
                <div><strong>{{ $jurusan->count() }}</strong><span>Program Keahlian</span></div>
                <div><strong>{{ $guruCount }}</strong><span>Guru & Pegawai</span></div>
                <div><strong>{{ $ekskul->count() }}</strong><span>Ekstrakurikuler</span></div>
            </div>
        </div>
        <div class="hero-photo-side">
            <img src="{{ asset('images/hero-sekolah-cijati.png') }}" alt="Lingkungan SMK Negeri 1 Cijati">
            <div class="hero-photo-caption"><b>SMK Bisa, SMK Hebat</b><span>Cianjur • Jawa Barat</span></div>
        </div>
    </div>
</section>

<section class="welcome-strip">
    <div class="container welcome-inner">
        <div>
            <span class="eyebrow">SELAMAT DATANG</span>
            <h2>Ruang informasi digital SMK Negeri 1 Cijati</h2>
        </div>
        <p>Temukan informasi sekolah, program keahlian, guru, kegiatan siswa, dan berita terbaru.</p>
    </div>
</section>

<section class="section" id="profil">
    <div class="container">
        <div class="section-head">
            <div><span class="eyebrow">PROFILE SEKOLAH</span><h2>Mengenal SMK Negeri 1 Cijati</h2></div>
        </div>
        <div class="cards two">
            <article class="card large profile-card">
                <span class="eyebrow">IDENTITAS SEKOLAH</span>
                <h2>SMK Negeri 1 Cijati</h2>
                <p>Website profil sekolah sebagai pusat informasi digital mengenai identitas sekolah, program keahlian, guru, kegiatan siswa, berita, galeri, dan layanan kontak.</p>
                <div class="profile-pills"><span>Akreditasi A</span><span>Cianjur • Jawa Barat</span></div>
            </article>
            <article class="card large">
                <span class="eyebrow">VISI & MISI</span>
                <h2>Unggul • Berkarakter • Kompeten</h2>
                <p>Bagian ini disiapkan untuk menampilkan visi dan misi resmi sekolah sesuai data yang dikelola administrator.</p>
                <a class="btn primary" href="{{ route('admin.login') }}">Kelola Data Profil →</a>
            </article>
        </div>
    </div>
</section>

<section class="section soft" id="fasilitas">
    <div class="container">
        <div class="section-head">
            <div><span class="eyebrow">SARANA & PRASARANA</span><h2>Fasilitas Sekolah</h2></div>
        </div>
        <div class="cards four">
            <article class="card facility"><div class="facility-icon">🏫</div><h3>Lingkungan Sekolah</h3><p>Ruang untuk menampilkan informasi sarana dan prasarana sekolah.</p></article>
            <article class="card facility"><div class="facility-icon">💻</div><h3>Laboratorium</h3><p>Tempat menampilkan fasilitas praktik dan pembelajaran berbasis kompetensi.</p></article>
            <article class="card facility"><div class="facility-icon">📚</div><h3>Perpustakaan</h3><p>Bagian informasi fasilitas literasi dan sumber belajar sekolah.</p></article>
            <article class="card facility"><div class="facility-icon">🔧</div><h3>Sarana Praktik</h3><p>Bagian informasi fasilitas praktik sesuai program keahlian.</p></article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <div><span class="eyebrow">PROGRAM KEAHLIAN</span><h2>4 Jurusan Pilihan</h2></div>
            <a class="text-link" href="{{ route('jurusan') }}">Lihat semua →</a>
        </div>

        <div class="cards four">
            @foreach($jurusan as $j)
            <article class="card major major-modern">
                <div class="major-top">
                    <div class="icon-box">{{ $j->icon ?: '🎓' }}</div>
                    <span class="code">{{ $j->kode }}</span>
                </div>
                <h3>{{ $j->nama }}</h3>
                <p>{{ $j->deskripsi }}</p>
                <a href="{{ route('jurusan') }}">Pelajari jurusan <span>→</span></a>
            </article>
            @endforeach
        </div>
    </div>
</section>

<section class="section soft" id="guru">
    <div class="container">
        <div class="section-head">
            <div><span class="eyebrow">DATA GURU & PEGAWAI</span><h2>Guru & Pegawai</h2></div>
            <a class="text-link" href="{{ route('guru') }}">Lihat semua {{ $guruCount }} data →</a>
        </div>
        <div class="cards four teacher-home-grid">
            @foreach($guru as $g)
            <article class="card teacher teacher-home-card">
                @if($g->foto)
                    <img class="teacher-photo" src="{{ asset($g->foto) }}" alt="{{ $g->nama }}">
                @else
                    <div class="avatar">{{ strtoupper(substr($g->nama,0,1)) }}</div>
                @endif
                <h3>{{ $g->nama }}</h3>
                <span>{{ $g->jabatan ?: 'Guru / Pegawai' }}</span>
            </article>
            @endforeach
        </div>
    </div>
</section>

<section class="section soft">
    <div class="container">
        <div class="section-head">
            <div><span class="eyebrow">KEGIATAN SISWA</span><h2>Ekstrakurikuler</h2></div>
            <a class="text-link" href="{{ route('ekstrakurikuler') }}">Selengkapnya →</a>
        </div>

        <div class="cards four">
            @foreach($ekskul as $e)
            <article class="card activity activity-modern">
                <div class="big-icon">{{ $e->icon ?: '⭐' }}</div>
                <h3>{{ $e->nama }}</h3>
                <p>{{ $e->deskripsi }}</p>
                <small>📅 {{ $e->jadwal }}</small>
            </article>
            @endforeach
        </div>
    </div>
</section>

<section class="section" id="galeri">
    <div class="container">
        <div class="section-head">
            <div><span class="eyebrow">DOKUMENTASI</span><h2>Galeri Sekolah</h2></div>
            <span class="text-link">Dokumentasi kegiatan</span>
        </div>
        <div class="gallery-grid">
            @foreach($berita->take(3) as $g)
            <div class="gallery-item">
                @if($g->gambar)<img src="{{ asset($g->gambar) }}" alt="{{ $g->judul }}">@else<div class="gallery-placeholder">📷</div>@endif
                <div><strong>{{ $g->judul }}</strong><small>Dokumentasi sekolah</small></div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <div><span class="eyebrow">INFORMASI TERBARU</span><h2>Berita Sekolah</h2></div>
            <a class="text-link" href="{{ route('berita') }}">Semua berita →</a>
        </div>

        <div class="cards three">
            @foreach($berita as $b)
            <article class="card news">
                <div class="news-image">
                    @if($b->gambar)
                        <img src="{{ asset($b->gambar) }}" alt="{{ $b->judul }}">
                    @else
                        <span>📰</span>
                    @endif
                </div>
                <div class="news-body">
                    <small>{{ optional($b->published_at)->translatedFormat('d F Y') }}</small>
                    <h3>{{ $b->judul }}</h3>
                    <p>{{ $b->ringkasan }}</p>
                    <a href="{{ route('berita.show',$b) }}">Baca selengkapnya →</a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>

<section class="section soft" id="kontak">
    <div class="container">
        <div class="section-head">
            <div><span class="eyebrow">HUBUNGI SEKOLAH</span><h2>Kontak & Masukan</h2></div>
        </div>
        <div class="cards two">
            <article class="card large contact-card">
                <span class="eyebrow">ALAMAT</span>
                <h2>SMK Negeri 1 Cijati</h2>
                <p>Jl. Cijati, Kab. Cianjur, Jawa Barat 43284.</p>
                <p class="meta">Gunakan bagian ini untuk informasi kontak resmi sekolah.</p>
            </article>
            <article class="card large contact-card">
                <span class="eyebrow">PESAN PENGUNJUNG</span>
                <h2>Masukan untuk sekolah</h2>
                <p>Form kontak dapat dikembangkan untuk menyimpan pesan dan masukan pengunjung ke dashboard admin.</p>
                <a class="btn primary" href="{{ route('admin.login') }}">Masuk Dashboard →</a>
            </article>
        </div>
    </div>
</section>

<section class="cta cta-modern">
    <div class="container cta-inner">
        <div>
            <span class="eyebrow">SMK NEGERI 1 CIJATI</span>
            <h2>Belajar hari ini, berkarya untuk masa depan.</h2>
            <p>Kenali sekolah dan pilih program keahlian yang sesuai dengan minatmu.</p>
        </div>
        <a class="btn light" href="{{ route('jurusan') }}">Mulai Jelajahi <span>→</span></a>
    </div>
</section>
@endsection
