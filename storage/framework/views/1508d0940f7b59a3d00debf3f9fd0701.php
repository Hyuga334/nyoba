<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <h4 class="fs-18 mb-4">kriteria</h4>
                <div class="tab-content" id="myTab5Content">
                    <div class="tab-pane fade show active" id="preview5-tab-pane" role="tabpanel" aria-labelledby="preview5-tab"
                        tabindex="0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kriteria</th>
                                    <th scope="col">Kode Kriteria</th>
                                    <th scope="col">Bobot</th>
                                    <th scope="col">Tipe</th>
                                    <th scope="col">Show</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $krt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                                        <td><?php echo e($krt->nama); ?></td>
                                        <td><?php echo e($krt->kode_kriteria); ?></td>
                                        <td><?php echo e($krt->bobot); ?></td>
                                        <td><?php echo e($krt->tipe); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('subkriteria', $krt->id)); ?>" class="menu-link">
                                                <i class="flaticon-eye" class="menu-icon tf-icons" ></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\seleksi_karyawan_baru\penerimaan_karawan_baru\resources\views/shared/kriteria/index.blade.php ENDPATH**/ ?>