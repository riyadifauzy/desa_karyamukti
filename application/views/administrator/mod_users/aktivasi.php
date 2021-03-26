<html>

<head>
    <meta charset="urf-8">
    <link rel="stylesheet" href="https://stackpath.bootsrapcdn.com/bootsrap/4.5.2/css/bootsrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <title><?= $title; ?></title>
</head>

<body>

    <div class="container-fluid">
        <!-- Page Heading -->
        <!-- Search form -->


        <div class="card mb-3">
            <div class="card-body">
                <h1 class="h3 mb-4 text-gray-800">Aktivasi Akun</h1>
                <div class="table-responsive">
                    <table class="table table-striped table bordered mydatatable" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>

                                <th scope="col">No</th>
                                <th scope="col">NO Kartu Keluarga</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="text-center">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($user_pending as $user) : ?>
                                <tr>
                                    <th scope="col"><?= $i++; ?></th>
                                    <th scope="col"><?= $user['no_kk']; ?></th>
                                    <th scope="col"><?= $user['no_nik']; ?></th>
                                    <th scope="col"><?= $user['nama']; ?></th>
                                    <th scope="col"><?= $user['alamat']; ?></th>
                                    <th scope="col" value="<?= ($user['is_active'] == 2) ? 'Pending' : (($user['is_active'] == 1) ? 'Aktif' : 'Ditolak'); ?>">
                                        <span class="label label-<?= ($user['is_active'] == 2) ? 'warning' : (($user['is_active'] == 1) ? 'success' : 'danger') ?>">
                                            <?= ($user['is_active'] == 2) ? 'Pending' : (($user['is_active'] == 1) ? 'Aktif' : 'Ditolak'); ?>
                                        </span>
                                    </th>
                                    <?php if ($user['is_active'] == 2) : ?>
                                        <th scope="col" class="text-center">
                                            <a href="<?= base_url('Tambah_warga/aktivasi_akun/' . $user['no_nik']) ?>" class="btn btn-success m-1" name="status_surat" id="status_surat"><u> Terima</u></a>
                                            <a href="<?= base_url('Tambah_warga/tolak_akun/' . $user['no_nik']) ?>" class="btn btn-danger m-1" name="status_surat" id="status_surat"><u> Tolak</u></a>
                                        </th>
                                    <?php else : ?>
                                        <th></th>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-body">
                <h1 class="h3 mb-4 text-gray-800">Akun Terdaftar</h1>
                <div class="table-responsive">
                    <table class="table table-striped table bordered mydatatable" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>

                                <th scope="col">No</th>
                                <th scope="col">NO Kartu Keluarga</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($user_active as $user) : ?>
                                <tr>
                                    <th scope="col"><?= $i++; ?></th>
                                    <th scope="col"><?= $user['no_kk']; ?></th>
                                    <th scope="col"><?= $user['no_nik']; ?></th>
                                    <th scope="col"><?= $user['nama']; ?></th>
                                    <th scope="col"><?= $user['alamat']; ?></th>
                                    <th scope="col" value="<?= ($user['is_active'] == 2) ? 'Pending' : (($user['is_active'] == 1) ? 'Aktif' : 'Ditolak'); ?>">
                                        <span class="label label-<?= ($user['is_active'] == 2) ? 'warning' : (($user['is_active'] == 1) ? 'success' : 'danger') ?>">
                                            <?= ($user['is_active'] == 2) ? 'Pending' : (($user['is_active'] == 1) ? 'Aktif' : 'Ditolak'); ?>
                                        </span>
                                    </th>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-body">
                <h1 class="h3 mb-4 text-gray-800">Akun Ditolak</h1>
                <div class="table-responsive">
                    <table class="table table-striped table bordered mydatatable" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>

                                <th scope="col">No</th>
                                <th scope="col">NO Kartu Keluarga</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($user_tolak as $user) : ?>
                                <tr>
                                    <th scope="col"><?= $i++; ?></th>
                                    <th scope="col"><?= $user['no_kk']; ?></th>
                                    <th scope="col"><?= $user['no_nik']; ?></th>
                                    <th scope="col"><?= $user['nama']; ?></th>
                                    <th scope="col"><?= $user['alamat']; ?></th>
                                    <th scope="col" value="<?= ($user['is_active'] == 2) ? 'Pending' : (($user['is_active'] == 1) ? 'Aktif' : 'Ditolak'); ?>">
                                        <span class="label label-<?= ($user['is_active'] == 2) ? 'warning' : (($user['is_active'] == 1) ? 'success' : 'danger') ?>">
                                            <?= ($user['is_active'] == 2) ? 'Pending' : (($user['is_active'] == 1) ? 'Aktif' : 'Ditolak'); ?>
                                        </span>
                                    </th>
                                    <th scope="col" class="text-center"><a href="<?= base_url('Tambah_warga/hapus_akun/' . $user['no_nik']) ?>" class="btn btn-danger m-1" name="status_surat" id="status_surat"><u> Hapus</u></th>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stachpath.bootsrapcdn.com/bootsrap/4.5.2/js/bootsrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('.mydatatable').DataTable();
    </script>



</body>

</html>