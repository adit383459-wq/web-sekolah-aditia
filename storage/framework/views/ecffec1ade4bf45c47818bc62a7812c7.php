<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $__env->yieldContent('title','Dashboard Admin'); ?> | SMK Negeri 1 Cijati</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body class="admin-body">
    <aside class="sidebar">
        <a class="brand admin-brand" href="<?php echo e(route('admin.dashboard')); ?>">
            <span class="brand-mark logo-mark"><img src="<?php echo e(asset('images/logo-smkn1-cijati.png')); ?>" alt="Logo SMK Negeri 1 Cijati"></span>
            <span><b>SMK N 1 CIJATI</b><small>ADMIN PANEL</small></span>
        </a>

        <nav>
            <a href="<?php echo e(route('admin.dashboard')); ?>">⌂ Dashboard</a>
            <a href="<?php echo e(route('admin.jurusan.index')); ?>">🎓 Jurusan</a>
            <a href="<?php echo e(route('admin.guru.index')); ?>">👨‍🏫 Data Guru</a>
            <a href="<?php echo e(route('admin.ekstrakurikuler.index')); ?>">🏆 Ekstrakurikuler</a>
            <a href="<?php echo e(route('admin.berita.index')); ?>">📰 Berita</a>
            <a href="<?php echo e(route('home')); ?>">↗ Lihat Website</a>
        </nav>

        <form method="POST" action="<?php echo e(route('admin.logout')); ?>">
            <?php echo csrf_field(); ?>
            <button type="submit" class="logout">↪ Keluar</button>
        </form>
    </aside>

    <div class="admin-main">
        <header class="admin-top">
            <div>
                <span class="eyebrow">ADMINISTRATOR</span>
                <h1><?php echo $__env->yieldContent('heading','Dashboard'); ?></h1>
            </div>
            <div class="user-chip">👤 <?php echo e(auth()->user()->name); ?></div>
        </header>

        <?php if(session('success')): ?>
            <div class="flash success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <?php if($errors->any()): ?>
            <div class="flash error">
                <strong>Data belum bisa disimpan.</strong>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH /data/data/com.termux/files/home/web-sekolah-aditia/resources/views/admin/layout.blade.php ENDPATH**/ ?>