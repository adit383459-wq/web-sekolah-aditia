<?php $__env->startSection('title', 'Jurusan'); ?>

<?php $__env->startSection('content'); ?>

<section class="section">
    <div class="container">

        <div class="cards two">

            <?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <article class="card major large">

                    <div
                        class="icon-box"
                        style="
                            width:100%;
                            height:220px;
                            overflow:hidden;
                            border-radius:16px;
                            margin-bottom:22px;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            background:#f5f7fb;
                        "
                    >

                        <?php if($j->icon): ?>

                            <img
                                src="<?php echo e(asset('storage/' . $j->icon)); ?>"
                                alt="Foto <?php echo e($j->nama); ?>"
                                style="
                                    width:100%;
                                    height:100%;
                                    object-fit:cover;
                                    display:block;
                                "
                            >

                        <?php else: ?>

                            <span style="font-size:64px;">🎓</span>

                        <?php endif; ?>

                    </div>

                    <span class="code">
                        <?php echo e($j->kode); ?>

                    </span>

                    <h2>
                        <?php echo e($j->nama); ?>

                    </h2>

                    <p>
                        <?php echo e($j->deskripsi); ?>

                    </p>

                </article>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /data/data/com.termux/files/home/web-sekolah-aditia/resources/views/pages/jurusan.blade.php ENDPATH**/ ?>