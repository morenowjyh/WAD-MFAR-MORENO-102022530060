<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff & Pegawai</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

<div class="container">
    <div class="header">
        <div>
            <h1>Staff & Pegawai</h1>
            <p>Pengelolaan Data Staff dan Pegawai Restoran</p>
        </div>

        <a href="<?php echo e(route('pegawai.create')); ?>" class="btn-tambah">
            + Tambah Pegawai
        </a>
    </div>

    <?php if(session('success')): ?>
        <p><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    <div class="card">
        <h2>Daftar Pegawai</h2>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>Kontak</th>
                    <th>Posisi/Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->nama); ?></td>
                        <td><?php echo e($item->kontak); ?></td>
                        <td><?php echo e($item->posisi); ?></td>
                        <td>
                            <a href="<?php echo e(route('pegawai.edit', $item->id)); ?>">
                                Edit
                            </a>

                            <form action="<?php echo e(route('pegawai.destroy', $item->id)); ?>"
                                  method="POST"
                                  style="display:inline;"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5">Belum ada data pegawai.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\pegawai-staff\resources\views/pegawai/index.blade.php ENDPATH**/ ?>