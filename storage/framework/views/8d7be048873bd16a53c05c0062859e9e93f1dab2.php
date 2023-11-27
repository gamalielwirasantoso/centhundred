

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <strong>Want</strong>
            </div>
            <div class="card-body">
                <div class="table-stats order-table ov-h">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th class="d-none d-md-table-cell">Location</th>
                                <th>Price</th>
                                <th class="d-none d-sm-table-cell">Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr class="bg-light">
                                <td><?php echo e($i); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td class="d-none d-md-table-cell"><?php echo e($item->location); ?></td>
                                <td>Rp. <?php echo e($item->price); ?>,00</td>
                                <td class="d-none d-md-table-cell">
                                    <?php if($item->status=="Failed"): ?>
                                    <span class="badge badge-danger">
                                        <?php elseif($item->status=="Success"): ?>
                                        <span class="badge badge-complete">
                                            <?php else: ?>
                                            <span>
                                                <?php endif; ?>
                                                <?php echo e($item->status); ?></span>
                                </td>
                                <td>
                                    <a href="#mymodal" data-remote="<?php echo e(route('transactions.show', $item->id)); ?>"
                                        data-toggle="modal" data-target="#mymodal" data-title="Lihat Detail Transaksi"
                                        class="btn btn-primary btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="<?php echo e(route('transactions.edit', $item->id)); ?>" class="btn btn-info btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <form action="<?php echo e(route('transactions.destroy', $item->id)); ?>" method="post"
                                        class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php $i++ ; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" class="text-center p-5">
                                    Data tidak tersedia
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-stats -->
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Hallo Dek\Cent\resources\views/pages/Want/index.blade.php ENDPATH**/ ?>