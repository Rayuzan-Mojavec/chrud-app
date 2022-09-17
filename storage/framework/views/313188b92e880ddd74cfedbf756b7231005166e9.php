<?php $__env->startSection('refresh-button'); ?>
    <button type="button" class="btn btn-success" onClick="window.location.reload();">Refresh Page</button>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Student (&euro;)</h1>
                <a href="/student/create" class="m-0">Tambah data</a>
            </div>
            <!-- /.col -->
        </div>
        <div class="col-md-6">
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-header'); ?>
    <table id="siswa" class="table table-bordered bg-white">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Kota</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($student->nis); ?></td>
                    <td><?php echo e($student->nama); ?></td>
                    <td><?php echo e($student->tmplahir); ?></td>
                    <td><?php echo e($student->tgllahir); ?><br>(<?php echo e($student->age()); ?> tahun)</td>
                    <td><?php echo e($student->kota); ?></td>
                    <td>
                        <a class="btn btn-warning mb-1" href="<?php echo e(route('student.edit', $student->nis)); ?>">Edit</a>

                        <form action="<?php echo e(route('student.destroy', $student->nis)); ?>" method="post">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit"  onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>



    <script>
        $(document).ready(function() {
            $('#siswa').DataTable({
                responsive: true
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
Student
<?php $__env->stopSection(); ?>
<?php echo $__env->make('core.core', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\3D Objects\LARAVEL\chrud-app\resources\views/students/student.blade.php ENDPATH**/ ?>