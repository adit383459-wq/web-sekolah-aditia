<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>@yield('title','SMK Negeri 1 Cijati')</title>
<meta name="description" content="Website resmi SMK Negeri 1 Cijati">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header class="navbar">
 <div class="container nav-inner">
  <a class="brand" href="{{ route('home') }}"><img class="brand-logo" src="{{ asset('images/logo-smkn1-cijati.png') }}" alt="Logo SMK Negeri 1 Cijati"><span><b>SMK NEGERI 1 CIJATI</b><small>Berkarakter • Kompeten • Berdaya Saing</small></span></a>
  <button class="menu-btn" type="button" aria-expanded="false" aria-label="Buka menu">☰</button>
  <nav class="nav-links">
   <a href="{{ route('home') }}">Beranda</a><a href="{{ route('home') }}#profil">Profil</a><a href="{{ route('home') }}#fasilitas">Fasilitas</a><a href="{{ route('jurusan') }}">Jurusan</a><a href="{{ route('home') }}#guru">Guru</a><a href="{{ route('ekstrakurikuler') }}">Ekskul</a><a href="{{ route('berita') }}">Berita</a><a href="{{ route('home') }}#kontak">Kontak</a>
   <a class="nav-admin" href="{{ route('admin.login') }}">Admin</a>
  </nav>
 </div>
</header>
@if(session('success')) <div class="flash success">{{ session('success') }}</div> @endif
<main>@yield('content')</main>
<footer class="footer"><div class="container footer-grid"><div><div class="brand footer-brand"><img class="brand-logo" src="{{ asset('images/logo-smkn1-cijati.png') }}" alt="Logo SMK Negeri 1 Cijati"><span><b>SMK NEGERI 1 CIJATI</b><small>Portal Informasi Sekolah</small></span></div><p>Website sekolah dengan tampilan modern untuk informasi pendidikan, program keahlian, kegiatan, dan berita.</p></div><div><h4>Menu</h4><a href="{{ route('jurusan') }}">Jurusan</a><a href="{{ route('guru') }}">Data Guru</a><a href="{{ route('berita') }}">Berita</a></div><div><h4>Kontak</h4><p>SMK Negeri 1 Cijati<br>Cianjur, Jawa Barat<br>Indonesia</p></div></div><div class="copyright">© {{ date('Y') }} SMK Negeri 1 Cijati. All rights reserved.</div></footer>
<script src="{{ asset('js/app.js') }}"></script>
</body></html>