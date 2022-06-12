<?php $this->load->view('admin/template/_sidebar'); ?>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title"><i class="fas fa-user"></i> Data Siswa</h4>
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
        <!-- Modal Import data -->
        <div class="modal fade" id="tambahUser" tabindex="-1" aria-labelledby="tambahUserLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahUserLabel"><i class="fas fa-upload"></i> Tambah Siswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Harap Kosongkan Data Siswa Supaya Gak Tertimpa</p>
                        <p>Format Unduh <a href="<?= base_url() ?>assets/template/format.xlsx" download="">Disini</a></p>
                        <form method="POST" action="<?= base_url() ?>admin/siswa_import" enctype="multipart/form-data">
                            <input type="hidden" value="" name="id" class="form-control" required="">
                            <div class="mb-3">
                                <label for="name" class="col-form-label">Upload File :</label>
                                <input type="file" class="form-control" value="" id="file" name="file">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Tutup Modal -->

        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary btn-rounded mb-4" data-bs-toggle="modal" data-bs-target="#tambahUser">
                    <i class="fas fa-upload"></i> Import Data
                </button>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $s) : ?>
                                <tr>
                                    <td><?= $s->nisn ?></td>
                                    <td><?= $s->nama_siswa ?></td>
                                    <td><?= $s->kelas ?></td>
                                    <?php if ($s->keterangan == 1) : ?>
                                        <td>Lulus</td>
                                    <?php else : ?>
                                        <td>Tidak Lulus</td>
                                    <?php endif; ?>
                                    <?php if ($s->status == 1) : ?>
                                        <td style="color:green">Dibuka</td>
                                    <?php else : ?>
                                        <td style="color:red">Tidak Dibuka</td>
                                    <?php endif; ?>
                                    <td>
                                        <a href="<?= base_url() ?>admin/siswa_hapus/<?= $s->nisn ?>" class="btn btn-danger btn-sm" style="color:white"><i class="fas fa-trash"></i></a>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editUser<?= $s->nisn ?>" data-id="<?= $s->nisn ?>" data-nama="<?= $s->nama_siswa ?>" data-kelas="<?= $s->kelas ?>" data-keterangan="<?= $s->keterangan ?>" data-status="<?= $s->status ?>"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                                <!-- Modal Edit data -->
                                <div class="modal fade" id="editUser<?= $s->nisn ?>" tabindex="-1" aria-labelledby="editUserLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editUserLabel"><i class="fas fa-upload"></i> Edit Siswa</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url() ?>admin/siswa_edit" method="POST">
                                                    <input type="hidden" value="" name="id" class="form-control" required="">
                                                    <div class="mb-3">
                                                        <label for="nisn" class="col-form-label">NISN : </label>
                                                        <input type="text" class="form-control" value="<?= $s->nisn ?>"disabled>
                                                        <input type="hidden" class="form-control" value="<?= $s->nisn ?>" name="nisn">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama" class="col-form-label">Nama : </label>
                                                        <input type="text" class="form-control" value="<?= $s->nama_siswa ?>" name="nama">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="kelas" class="col-form-label">Kelas : </label>
                                                        <input type="text" class="form-control" value="<?= $s->kelas ?>" name="kelas">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="lulus" class="col-form-label">Lulus? : </label>
                                                        <select name="lulus" class="form-select">
                                                           <?php if ($s->keterangan == 1) : ?>
                                                                <option value="1" selected>Lulus</option>
                                                                <option value="0">Tidak Lulus</option>
                                                            <?php else : ?>
                                                                <option value="1">Lulus</option>
                                                                <option value="0" selected>Tidak Lulus</option>
                                                            <?php endif; ?>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tutup Modal -->
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
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
<script>
</script>