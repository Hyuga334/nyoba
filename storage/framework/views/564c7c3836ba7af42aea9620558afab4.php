
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/farol/project-management.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 May 2025 04:44:48 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Links Of CSS File -->
		<link rel="stylesheet" href="<?php echo e(asset('farol')); ?>/assets/css/remixicon.css">
        <link rel="stylesheet" href="<?php echo e(asset('farol')); ?>/assets/css/flaticon.css">
		<link rel="stylesheet" href="<?php echo e(asset('farol')); ?>/assets/css/sidebar-menu.css">
		<link rel="stylesheet" href="<?php echo e(asset('farol')); ?>/assets/css/simplebar.css">
		<link rel="stylesheet" href="<?php echo e(asset('farol')); ?>/assets/css/apexcharts.css">
		<link rel="stylesheet" href="<?php echo e(asset('farol')); ?>/assets/css/prism.css">
		<link rel="stylesheet" href="<?php echo e(asset('farol')); ?>/assets/css/rangeslider.css">
		<link rel="stylesheet" href="<?php echo e(asset('farol')); ?>/assets/css/sweetalert.min.css">
        <link rel="stylesheet" href="<?php echo e(asset('farol')); ?>/assets/css/quill.snow.css">
		<link rel="stylesheet" href="<?php echo e(asset('farol')); ?>/assets/css/style.css">


		<!-- Favicon -->
		<link rel="icon" type="image/png" href="dashboard.blade.php"
		<!-- Title -->
		<title>spk karyawan baru</title>
    </head>
    <body>
        <!-- Start Preloader Area -->
        <div class="preloader" id="preloader">
            <div class="preloader">
                <div class="waviy position-relative">
                    <span class="d-inline-block">F</span>
                    <span class="d-inline-block">A</span>
                    <span class="d-inline-block">R</span>
                    <span class="d-inline-block">O</span>
                    <span class="d-inline-block">L</span>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Sidebar Area -->
        <?php echo $__env->make('admin.components.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <!-- End Sidebar Area -->

        <!-- Start Main Content Area -->
        <div class="container-fluid">
            <div class="main-content d-flex flex-column">
                <!-- Start Header Area -->
               <?php echo $__env->make('admin.components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <!-- End Header Area -->

                <!-- Start Body Content Area -->
                <?php echo $__env->yieldContent('content'); ?>
                <!-- End Body Content Area -->

                <div class="flex-grow-1"></div>

                <!-- Start Footer Area -->
                <?php echo $__env->make('admin.components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <!-- End Footer Area -->
            </div>
        </div>
        <!-- Start Main Content Area -->

        <!-- Start Theme Setting Area -->
        <?php echo $__env->make('admin.components.themeSetting', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <!-- End Theme Setting Area -->

        <!-- Link Of JS File -->
        <script src="<?php echo e(asset('farol')); ?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo e(asset('farol')); ?>/assets/js/sidebar-menu.js"></script>
        <script src="<?php echo e(asset('farol')); ?>/assets/js/dragdrop.js"></script>
        <script src="<?php echo e(asset('farol')); ?>/assets/js/rangeslider.min.js"></script>
        <script src="<?php echo e(asset('farol')); ?>/assets/js/sweetalert.js"></script>
        <script src="<?php echo e(asset('farol')); ?>/assets/js/quill.min.js"></script>
        <script src="<?php echo e(asset('farol')); ?>/assets/js/data-table.js"></script>
        <script src="<?php echo e(asset('farol')); ?>/assets/js/prism.js"></script>
        <script src="<?php echo e(asset('farol')); ?>/assets/js/clipboard.min.js"></script>
        <script src="<?php echo e(asset('farol')); ?>/assets/js/feather.min.js"></script>
        <script src="<?php echo e(asset('farol')); ?>/assets/js/simplebar.min.js"></script>
        <script src="<?php echo e(asset('farol')); ?>/assets/js/apexcharts.min.js"></script>
        <script src="<?php echo e(asset('farol')); ?>/assets/js/custom/project-management.js"></script>
        <script src="<?php echo e(asset('farol')); ?>/assets/js/custom/custom.js"></script>


    </body>

<!-- Mirrored from templates.hibootstrap.com/farol/project-management.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 May 2025 04:45:03 GMT -->
</html>
<?php /**PATH C:\laragon\www\seleksi_karyawan_baru\penerimaan_karawan_baru\resources\views/admin/layouts/main.blade.php ENDPATH**/ ?>