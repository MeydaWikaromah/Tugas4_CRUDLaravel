

<?php $__env->startSection('container'); ?>

<h3 class="text-center">FILM</h3>
<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<a href="<?php echo e(route('film.create')); ?>" class="btn btn-success">Tambah Data</a><br><br>
<table class="table table-bordered">
    <thead class="table-dark ">
        <tr>
            <th class="text-center" style="width: 10px">No</th>
            <th class="text-center" style="width: 10px">Gambar</th>
            <th class="text-center" style="width: 180px">Judul</th>
            <th class="text-center" style="width: 100px">Tahun</th>
            <th class="text-center" style="width: 100px">Rating</th>
            <th class="text-center" style="width: 100px">Link Trailer</th>
            <th class="text-center" style="width: 100px">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
        ?>
        <?php $__currentLoopData = $film; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="text-center" scope="row"><?php echo e($no); ?></td>
            <td><img src="<?php echo e(asset('img/'.$item->image)); ?>" class="rounded m-2" style="width: 150px"></td>
            <td><?php echo e($item->judul); ?></td>
            <td><?php echo e($item->tahun); ?></td>
            <td><?php echo e($item->rating); ?></td>
            <td><?php echo e($item->link); ?></td>
            <td>
                <a href="<?php echo e(route('film.edit', $item->id)); ?>" class="btn btn-primary" >Edit</a>
                <form action="<?php echo e(route('film.destroy',$item->id)); ?>" method="POST" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                <button class="btn btn-danger" onclick="confirm('Anda yakin akan menghapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        <?php
            $no++;
        ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\websitefilm\resources\views/film.blade.php ENDPATH**/ ?>