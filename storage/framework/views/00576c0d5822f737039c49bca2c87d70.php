<?php $__env->startSection('title', $item->exists ? 'Edit Berita' : 'Tambah Berita'); ?>
<?php $__env->startSection('heading', $item->exists ? 'Edit Berita' : 'Tambah Berita'); ?>

<?php $__env->startSection('content'); ?>

<div class="admin-card form-card">

<form
    method="POST"
    action="<?php echo e($item->exists ? route('admin.berita.update', $item) : route('admin.berita.store')); ?>"
    enctype="multipart/form-data"
>

<?php echo csrf_field(); ?>

<?php if($item->exists): ?>
    <?php echo method_field('PUT'); ?>
<?php endif; ?>

<label>Judul</label>
<input
    name="judul"
    value="<?php echo e(old('judul', $item->judul)); ?>"
    required
>

<label>Slug</label>
<input
    name="slug"
    value="<?php echo e(old('slug', $item->slug)); ?>"
    placeholder="contoh: berita-sekolah"
    required
>

<label>Ringkasan</label>
<textarea
    name="ringkasan"
    rows="4"
><?php echo e(old('ringkasan', $item->ringkasan)); ?></textarea>

<label>Isi Berita</label>
<textarea
    name="isi"
    rows="10"
><?php echo e(old('isi', $item->isi)); ?></textarea>

<label>Foto Berita</label>

<?php if($item->exists && $item->gambar): ?>
    <div style="margin:10px 0;">
        <img
            src="<?php echo e(asset('storage/' . $item->gambar)); ?>"
            alt="Foto <?php echo e($item->judul); ?>"
            style="width:200px;height:130px;object-fit:cover;border-radius:12px;"
        >
    </div>
<?php endif; ?>

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
    value="<?php echo e(old('published_at', optional($item->published_at)->format('Y-m-d\TH:i'))); ?>"
>

<div class="form-actions">

    <a
        class="btn ghost"
        href="<?php echo e(route('admin.berita.index')); ?>"
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /data/data/com.termux/files/home/web-sekolah-aditia/resources/views/admin/berita/form.blade.php ENDPATH**/ ?>