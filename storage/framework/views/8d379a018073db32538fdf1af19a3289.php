    

    <?php $__env->startSection('container'); ?>
    
    <h2 class="text-center">FILBIE</h2>
    <div class="row justify-content-center">
        <form action=" " method="GET" class="d-flex col-lg-6 m-5" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari" value="<?php echo e(request('cari')); ?>">
            <button class="btn btn-outline-success" type="submit">Search</button>
            <a class="btn btn-outline-danger ml-2" href="/websitefilm/public/home" >Reset</a>
        </form>
        
    </div>
    
    <div class= "d-flex flex-wrap mb-3">

        <?php $__currentLoopData = $film; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card m-3 p-2" style="width: 14rem;">
            <img src="" class="card-img-top" alt="">
            <div class="card-body">
                <img src="<?php echo e(asset('img/'.$item->image)); ?>" class="rounded m-2" style="width: 150px">
                <h5 class="card-title"><?php echo e($item->judul); ?></h5>
                <p class="card-text"><?php echo e($item->tahun); ?></p>
                <p class="card-text"><?php echo e($item->rating); ?></p>
                <a href="<?php echo e($item->link); ?>" target="_blank" class="btn btn-primary">Lihat Trailer</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\websitefilm\resources\views/home.blade.php ENDPATH**/ ?>