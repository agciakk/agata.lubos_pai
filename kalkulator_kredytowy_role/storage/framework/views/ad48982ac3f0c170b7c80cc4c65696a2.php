

<?php $__env->startSection('title', 'Logowanie'); ?>
<?php $__env->startSection('description', 'Zaloguj sie do kalkulatora'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Logowanie do kalkulatora</h3>
                </div>
                <div class="card-body">
                    
                    <?php if(session('error')): ?>
                        <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                    <?php endif; ?>
                    
                    <form method="POST" action="<?php echo e(route('login.submit')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="login" class="form-label">Login:</label>
                            <input type="text" name="login" id="login" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="haslo" class="form-label">Hasło:</label>
                            <input type="password" name="haslo" id="haslo" class="form-control" required>
                        </div>
                        <button type="submit" class="btn custom-btn">Zaloguj</button>
                        <a href="/" class="btn custom-btn custom-border-btn custom-btn-bg-red smoothscroll me-2 mb-2">Powrót</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\kalkulator_kredytowy_role\resources\views/login.blade.php ENDPATH**/ ?>