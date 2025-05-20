<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                    <h4 class="fs-18 mb-4">
                        Sub Kriteria : <?php echo e($kriteria->nama); ?>

                    </h4>
                <div class="tab-content" id="myTab6Content">
                    <div class="tab-pane fade show active" id="preview6-tab-pane" role="tabpanel" aria-labelledby="preview6-tab"
                        tabindex="0">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Bobot</th>
                                    <th scope="col">Min</th>
                                    <th scope="col">Max</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $subkriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                                    <td><?php echo e($skr->bobot); ?></td>
                                    <td><?php echo e($skr->min); ?></td>
                                    <td><?php echo e($skr->max); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <button onclick="window.location='<?php echo e(route('kriteria')); ?>'"
                    class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <span class="py-sm-1 d-block">
                        <i data-feather="arrow-left"></i>
                        <span>Kriteria</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\seleksi_karyawan_baru\penerimaan_karawan_baru\resources\views/shared/subkriteria/index.blade.php ENDPATH**/ ?>