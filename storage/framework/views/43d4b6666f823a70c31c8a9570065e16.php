<?php $__env->startSection('title', 'Berita | SMK Negeri 1 Cijati'); ?>

<?php $__env->startSection('content'); ?>

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">KABAR SEKOLAH</span>
        <h1>Berita & Informasi</h1>
        <p>
            Informasi terbaru seputar kegiatan dan perkembangan
            SMK Negeri 1 Cijati.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">

        <div class="cards three">

            <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <article class="card news">

                    <div class="news-image">

                        <?php if($b->gambar): ?>

                            <img
                                src="<?php echo e(asset('storage/' . $b->gambar)); ?>"
                                alt="<?php echo e($b->judul); ?>"
                            >

                        <?php else: ?>

                            📰

                        <?php endif; ?>

                    </div>

                    <div class="news-body">

                        <small>
                            <?php echo e(optional($b->published_at)->translatedFormat('d F Y')); ?>

                        </small>

                        <h2>
                            <?php echo e($b->judul); ?>

                        </h2>

                        <p>
                            <?php echo e($b->ringkasan); ?>

                        </p>

                        <a href="<?php echo e(route('berita.show', $b)); ?>">
                            Baca selengkapnya →
                        </a>

                    </div>

                </article>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        <div class="pagination">
            <?php echo e($berita->links()); ?>

        </div>

    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /data/data/com.termux/files/home/web-sekolah-aditia/resources/views/pages/berita.blade.php ENDPATH**/ ?>