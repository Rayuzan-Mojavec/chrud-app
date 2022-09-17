<?php $__env->startSection('refresh-button'); ?>
    <button type="button" class="btn btn-success" onClick="window.location.reload();">Refresh Page</button>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Employee (&yen;)</h1>
                <a href="/employee/create" class="m-0">Tambah data</a>
            </div>
            <!-- /.col -->
        </div>
        <div class="col-md-6">
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-header'); ?>
    <table id="example" class="table table-bordered bg-white">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Kota</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($employee->nip); ?></td>
                    <td class="ningenisasi"><?php echo e($employee->nama); ?></td>
                    <td class="ningenisasi"><?php echo e($employee->tmplahir); ?></td>
                    <td class="ningenisasi"><?php echo e($employee->tgllahir); ?><br>(<?php echo e($employee->age()); ?>歳)</td>
                    <td class="ningenisasi"><?php echo e($employee->kota); ?></td>
                    <td>
                        <a class="btn btn-warning mb-1" href="<?php echo e(route('employee.edit', $employee->nip)); ?>">Edit</a>

                        <form action="<?php echo e(route('employee.destroy', $employee->nip)); ?>" method="post">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit" onclick="return confirm('Are you sure?')"
                                class="btn btn-danger">Delete</button>
                        </form>
                    </td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>



    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    Employee
<?php $__env->stopSection(); ?>

<?php echo $__env->make('core.core', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\3D Objects\LARAVEL\chrud-app\resources\views/employees/employee.blade.php ENDPATH**/ ?>