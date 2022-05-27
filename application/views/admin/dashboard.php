<?php $this->load->view('admin/template/_sidebar'); ?>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title"><i class="fas fa-home"></i> Dashboard</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                        <h6 class="text-white">Data Siswa</h6>
                        <h3 class="text-white"><?= $total ?></h3>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                        <h6 class="text-white">Siswa Lulus</h6>
                        <h3 class="text-white"><?= $lulus ?></h3>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                        <h6 class="text-white">Siswa Tidak Lulus</h6>
                        <h3 class="text-white"><?= $not_lulus ?></h3>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                        <h6 class="text-white">Jumlah User</h6>
                        <h3 class="text-white">3</h3>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            $persenDibuka = number_format(($dibuka / $total) * 100, 2);
            $persenNotDibuka = number_format(($not_dibuka / $total) * 100, 2);
        ?>
        <div class="row">
            <div class="col">
                <!-- card -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-0">Progress Box</h4>
                        <div class="mt-3">
                            <div class="d-flex no-block align-items-center">
                                <span><?= $persenDibuka ?>% Telah Dibuka</span>
                                <div class="ms-auto">
                                    <span><?= $dibuka ?></span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?= $persenDibuka ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex no-block align-items-center mt-4">
                                <span><?= $persenNotDibuka ?>% Belum Dibuka</span>
                                <div class="ms-auto">
                                    <span><?= $not_dibuka ?></span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?= $persenNotDibuka ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- card new -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-0">News Updates</h4>
                    </div>
                    <ul class="list-style-none">
                        <li class="d-flex no-block card-body">
                            <i class="fa fa-check-circle w-30px mt-1"></i>
                            <div>
                                <a href="#" class="mb-0 font-medium p-0">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.</a>
                                <span class="text-muted">dolor sit amet, consectetur adipiscing</span>
                            </div>
                            <div class="ms-auto">
                                <div class="tetx-right">
                                    <h5 class="text-muted mb-0">20</h5>
                                    <span class="text-muted font-16">Jan</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex no-block card-body border-top">
                            <i class="fa fa-gift w-30px mt-1"></i>
                            <div>
                                <a href="#" class="mb-0 font-medium p-0">Congratulation Maruti, Happy
                                    Birthday</a>
                                <span class="text-muted">many many happy returns of the day</span>
                            </div>
                            <div class="ms-auto">
                                <div class="tetx-right">
                                    <h5 class="text-muted mb-0">11</h5>
                                    <span class="text-muted font-16">Jan</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex no-block card-body border-top">
                            <i class="fa fa-plus w-30px mt-1"></i>
                            <div>
                                <a href="#" class="mb-0 font-medium p-0">Maruti is a Responsive Admin theme</a>
                                <span class="text-muted">But already everything was solved. It will ...</span>
                            </div>
                            <div class="ms-auto">
                                <div class="tetx-right">
                                    <h5 class="text-muted mb-0">19</h5>
                                    <span class="text-muted font-16">Jan</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex no-block card-body border-top">
                            <i class="fa fa-leaf w-30px mt-1"></i>
                            <div>
                                <a href="#" class="mb-0 font-medium p-0">Envato approved Maruti Admin
                                    template</a>
                                <span class="text-muted">i am very happy to approved by TF</span>
                            </div>
                            <div class="ms-auto">
                                <div class="tetx-right">
                                    <h5 class="text-muted mb-0">20</h5>
                                    <span class="text-muted font-16">Jan</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex no-block card-body border-top">
                            <i class="fa fa-question-circle w-30px mt-1"></i>
                            <div>
                                <a href="#" class="mb-0 font-medium p-0"> I am alwayse here if you have any
                                    question</a>
                                <span class="text-muted">we glad that you choose our template</span>
                            </div>
                            <div class="ms-auto">
                                <div class="tetx-right">
                                    <h5 class="text-muted mb-0">15</h5>
                                    <span class="text-muted font-16">Jan</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->