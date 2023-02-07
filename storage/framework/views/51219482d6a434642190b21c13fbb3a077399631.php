<?php $__env->startSection('show-producer'); ?>

<div class="add-body">

    <div class="add-top">
        <h1 class="themdonhang">THÊM NHÀ CUNG CẤP</h1>
    </div>

    <div class="add-bottom">

        <div class="add-bottom-input">

            <?php if(isset($msg)): ?>
            <?php echo e($msg); ?>

            <?php endif; ?>

            <form action="" method="post" enctype="multipart/form-data">

                <?php echo csrf_field(); ?>

                <div class="add-bottom-1">

                    <div class="nhapten">
                        <p class="addp">Nhập mã nhà cung cấp</p>
                        <input type="text" name="code" value="<?php echo e($producer->code); ?>" class="txtTen1">
                    </div>

                    <div class="nhapten">
                        <p class="addp">Nhập tên nhà cung cấp</p>
                        <input type="text" name="name" value="<?php echo e($producer->name); ?>" class="txtTen1" >
                    </div>

                </div>

                <div class="add-bottom-2">

                    <div class="nhapten">
                        <p class="addp">Nhập số điện thoại</p>
                        <input type="text" name="phone" value="<?php echo e($producer->phone); ?>" class="txtTen1">
                    </div>
                    <div class="nhapten">
                        <p class="addp">Nhập email</p>
                        <input type="text" name="email" value="<?php echo e($producer->email); ?>" class="txtTen1">
                    </div>

                </div>
                <div class="add-bottom-2">

                    <div class="nhapten">
                        <p class="addp">Nhập địa chỉ</p>
                        <input type="text" name="address" value="<?php echo e($producer->address); ?>" class="txtTen1">
                    </div>

                </div>

                <div class="input-nhap">
                    <input type="submit" class="input-submit" value="submit">
                </div>

            </form>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/producer/show-producer.blade.php ENDPATH**/ ?>