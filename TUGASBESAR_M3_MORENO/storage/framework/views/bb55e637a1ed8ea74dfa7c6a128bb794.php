<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

<div class="container">
    <h1>Tambah Pegawai</h1>
    <p>Silakan masukkan data pegawai baru.</p>

    <div class="card form-card">

        <?php if($errors->any()): ?>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>

        <form action="<?php echo e(route('pegawai.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <label for="nama">Nama Pegawai</label>
            <input
                type="text"
                id="nama"
                name="nama"
                value="<?php echo e(old('nama')); ?>"
                required
            >

            <label for="kontak">Kontak</label>
            <input
                type="text"
                id="kontak"
                name="kontak"
                value="<?php echo e(old('kontak')); ?>"
                required
            >

            <label for="posisi">Posisi/Jabatan</label>
            <select id="posisi" name="posisi" required>
                <option value="">Pilih Posisi</option>

                <option value="Chef" <?php echo e(old('posisi') == 'Chef' ? 'selected' : ''); ?>>
                    Chef
                </option>

                <option value="Waiter" <?php echo e(old('posisi') == 'Waiter' ? 'selected' : ''); ?>>
                    Waiter
                </option>

                <option value="Kasir" <?php echo e(old('posisi') == 'Kasir' ? 'selected' : ''); ?>>
                    Kasir
                </option>
            </select>

            <button type="submit">Simpan</button>

            <a href="<?php echo e(route('pegawai.index')); ?>">Kembali</a>
        </form>

    </div>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\pegawai-staff\resources\views/pegawai/create.blade.php ENDPATH**/ ?>