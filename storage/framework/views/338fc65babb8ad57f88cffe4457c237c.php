<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title><?php echo $__env->yieldContent('title','SMK Negeri 1 Cijati'); ?></title>
<meta name="description" content="Website resmi SMK Negeri 1 Cijati">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
<header class="navbar">
 <div class="container nav-inner">
  <a class="brand" href="<?php echo e(route('home')); ?>"><img class="brand-logo" src="<?php echo e(asset('images/logo-smkn1-cijati.png')); ?>" alt="Logo SMK Negeri 1 Cijati"><span><b>SMK NEGERI 1 CIJATI</b><small>Berkarakter • Kompeten • Berdaya Saing</small></span></a>
  <button class="menu-btn" type="button" aria-expanded="false" aria-label="Buka menu">☰</button>
  <nav class="nav-links">
   <a href="<?php echo e(route('home')); ?>">Beranda</a><a href="<?php echo e(route('home')); ?>#profil">Profil</a><a href="<?php echo e(route('home')); ?>#fasilitas">Fasilitas</a><a href="<?php echo e(route('jurusan')); ?>">Jurusan</a><a href="<?php echo e(route('home')); ?>#guru">Guru</a><a href="<?php echo e(route('ekstrakurikuler')); ?>">Ekskul</a><a href="<?php echo e(route('berita')); ?>">Berita</a><a href="<?php echo e(route('home')); ?>#kontak">Kontak</a>
   <a class="nav-admin" href="<?php echo e(route('admin.login')); ?>">Admin</a>
  </nav>
 </div>
</header>
<?php if(session('success')): ?> <div class="flash success"><?php echo e(session('success')); ?></div> <?php endif; ?>
<main><?php echo $__env->yieldContent('content'); ?></main>
<footer class="footer"><div class="container footer-grid"><div><div class="brand footer-brand"><img class="brand-logo" src="<?php echo e(asset('images/logo-smkn1-cijati.png')); ?>" alt="Logo SMK Negeri 1 Cijati"><span><b>SMK NEGERI 1 CIJATI</b><small>Portal Informasi Sekolah</small></span></div><p>Website sekolah dengan tampilan modern untuk informasi pendidikan, program keahlian, kegiatan, dan berita.</p></div><div><h4>Menu</h4><a href="<?php echo e(route('jurusan')); ?>">Jurusan</a><a href="<?php echo e(route('guru')); ?>">Data Guru</a><a href="<?php echo e(route('berita')); ?>">Berita</a></div><div><h4>Kontak</h4><p>SMK Negeri 1 Cijati<br>Cianjur, Jawa Barat<br>Indonesia</p></div></div><div class="copyright">© <?php echo e(date('Y')); ?> SMK Negeri 1 Cijati. All rights reserved.</div></footer>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body></html><?php /**PATH /data/data/com.termux/files/home/web-sekolah-aditia/resources/views/layouts/app.blade.php ENDPATH**/ ?>