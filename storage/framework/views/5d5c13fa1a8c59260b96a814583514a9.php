<?php $__env->startSection('title', $berita->judul); ?>

<?php $__env->startSection('content'); ?>

<section class="page-hero">
    <div class="container">

        <span class="eyebrow">BERITA SEKOLAH</span>

        <h1>
            <?php echo e($berita->judul); ?>

        </h1>

        <p>
            <?php echo e(optional($berita->published_at)->translatedFormat('d F Y')); ?>

        </p>

    </div>
</section>

<section class="section">

    <div class="container article">

        <?php if($berita->gambar): ?>

            <img
                class="article-image"
                src="<?php echo e(asset('storage/' . $berita->gambar)); ?>"
                alt="<?php echo e($berita->judul); ?>"
            >

        <?php endif; ?>

        <p class="lead">
            <?php echo e($berita->ringkasan); ?>

        </p>

        <div class="article-body">
            <?php echo nl2br(e($berita->isi)); ?>

        </div>

        <a
            class="btn ghost"
            href="<?php echo e(route('berita')); ?>"
        >
            ← Kembali ke berita
        </a>

    </div>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /data/data/com.termux/files/home/web-sekolah-aditia/resources/views/pages/berita-detail.blade.php ENDPATH**/ ?>