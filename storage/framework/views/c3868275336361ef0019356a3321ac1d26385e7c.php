

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <?php if(session()->has('moneyerror')): ?>
        <div class="alert alert-danger px-5"> <?php echo e(session()->get('moneyerror')); ?></div>
        <?php endif; ?>

        <?php if($errors->any()): ?>
        <div class="alert alert-danger px-5">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="card card-money">
            <div class="card-body card-money-body">
                <div class="card-body-text">
                    <h4>Total Balance</h4>
                </div>
                <h2 class="money">Rp.<?php echo e($money->amount); ?>,00</h2>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6">
        <div class="card card-money">
            <div class="card-body card-money-body">
                <div class="card-body-text">
                    <h4>Savings</h4>
                </div>
                <h2 class="money">Rp.<?php echo e($saving->amount); ?>,00</h2>
            </div>
        </div>
    </div>
    <!-- /Widgets -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <strong>Savings</strong>
            </div>
            <div class="card-body card-block">
                <form action="<?php echo e(route('moneys.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="amount" class="form-control-label">Mentransfer Uang Ke Tabungan</label>
                        <input type="number" min="0" name="amount" id="amount" value="<?php echo e(old('name')); ?>"
                            class="form-control <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Nominal" />
                        <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-muted"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <input type="hidden" name="type" value="Store">
                    <div class="form-group">
                        <button class="btn-cent" type="submit" name="create" value="create">
                            Setor Uang
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Uang Total</strong>
            </div>
            <div class="card-body card-block">
                <form action="<?php echo e(route('moneys.update',1)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label for="amount" class="col-form-label"> Tambahkan Uang</label>
                        <input type="number" min="0" class="form-control" id="amount" name="amount" placeholder="nominal">
                    </div>
                    <button class="btn-cent" type="submit" name="create" value="create">
                        Tambah Uang
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Hallo Dek\Cent\resources\views/pages/Total/create.blade.php ENDPATH**/ ?>