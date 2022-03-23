<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <h2>DETAIL KANOPI</h2>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Insert items</li>
                    </ol>
                    <?php if(session()->getFlashdata('pesan2')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan2'); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card">
                        <div class="container mt-3">
                            <h2 class="text-center"><?= $pekerjaan['jenispekerjaan']; ?></h2>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-2">
                                    <label for="card-text">Volume</label>
                                </div>
                                <div class="col-1">
                                    <label for="card-text">:</label>
                                </div>
                                <div class="col-5">
                                    <p class="text-start"><?= $pekerjaan['luasvolume']; ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-2">
                                    <label for="card-text">Harga</label>
                                </div>
                                <div class="col-1">
                                    <label for="card-text">: </label>
                                </div>
                                <div class="col-5">
                                    <p><small class="text-muted"><?= $pekerjaan['harga']; ?></small></p>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <img src="/gallery/<?= $pekerjaan['foto']; ?>" class="card-img-top" alt="..." width="500">
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Bahan dan Material</h3>
                                            <div class="col text-right">
                                                <a href="/dashboard/update/<?= $pekerjaan['id']; ?>"
                                                    class="btn-sm btn-primary">Update</a>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body table-responsive p-0" style="height: 300px;">
                                            <table class="table table-head-fixed text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Material</th>
                                                        <th>Ukuran</th>
                                                        <th>Jumlah</th>
                                                        <th>Harga</th>
                                                        <th>Harga Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no=1 ?>
                                                    <tr>
                                                        <th scope="row"><?= $no++; ?></th>
                                                        <td><?= $material['material1']; ?></td>
                                                        <td><?= $ukuran['ukuran1']; ?></td>
                                                        <td><?= $jumlah['jumlah1']; ?></td>
                                                        <td><?= $harga['harga1']; ?></td>
                                                        <td>Rp.
                                                            <?= number_format((int)$hanyaharga['harga1'] * (int)$hanyajumlah['jumlah1']); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><?= $no++; ?></th>
                                                        <td><?= $material['material2']; ?></td>
                                                        <td><?= $ukuran['ukuran2']; ?></td>
                                                        <td><?= $jumlah['jumlah2']; ?></td>
                                                        <td><?= $harga['harga2']; ?></td>
                                                        <td>Rp.
                                                            <?= number_format((int)$hanyaharga['harga2'] * (int)$hanyajumlah['jumlah2']); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><?= $no++; ?></th>
                                                        <td><?= $material['material3']; ?></td>
                                                        <td><?= $ukuran['ukuran3']; ?></td>
                                                        <td><?= $jumlah['jumlah3']; ?></td>
                                                        <td><?= $harga['harga3']; ?></td>
                                                        <td>Rp.
                                                            <?= number_format((int)$hanyaharga['harga3'] * (int)$hanyajumlah['jumlah3']); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><?= $no++; ?></th>
                                                        <td><?= $material['material4']; ?></td>
                                                        <td><?= $ukuran['ukuran4']; ?></td>
                                                        <td><?= $jumlah['jumlah4']; ?></td>
                                                        <td><?= $harga['harga4']; ?></td>
                                                        <td>Rp.
                                                            <?= number_format((int)$hanyaharga['harga4'] * (int)$hanyajumlah['jumlah4']); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><?= $no++; ?></th>
                                                        <td><?= $material['material5']; ?></td>
                                                        <td><?= $ukuran['ukuran5']; ?></td>
                                                        <td><?= $jumlah['jumlah5']; ?></td>
                                                        <td><?= $harga['harga5']; ?></td>
                                                        <td>Rp.
                                                            <?= number_format((int)$hanyaharga['harga5'] * (int)$hanyajumlah['jumlah5']); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><?= $no++; ?></th>
                                                        <td><?= $material['material6']; ?></td>
                                                        <td><?= $ukuran['ukuran6']; ?></td>
                                                        <td><?= $jumlah['jumlah6']; ?></td>
                                                        <td><?= $harga['harga6']; ?></td>
                                                        <td>Rp.
                                                            <?= number_format((int)$hanyaharga['harga6'] * (int)$hanyajumlah['jumlah6']); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><?= $no++; ?></th>
                                                        <td><?= $material['material7']; ?></td>
                                                        <td><?= $ukuran['ukuran7']; ?></td>
                                                        <td><?= $jumlah['jumlah7']; ?></td>
                                                        <td><?= $harga['harga7']; ?></td>
                                                        <td>Rp.
                                                            <?= number_format((int)$hanyaharga['harga7'] * (int)$hanyajumlah['jumlah7']); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><?= $no++; ?></th>
                                                        <td><?= $material['material8']; ?></td>
                                                        <td><?= $ukuran['ukuran8']; ?></td>
                                                        <td><?= $jumlah['jumlah8']; ?></td>
                                                        <td><?= $harga['harga8']; ?></td>
                                                        <td>Rp.
                                                            <?= number_format((int)$hanyaharga['harga8'] * (int)$hanyajumlah['jumlah8']); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><?= $no++; ?></th>
                                                        <td><?= $material['material9']; ?></td>
                                                        <td><?= $ukuran['ukuran9']; ?></td>
                                                        <td><?= $jumlah['jumlah9']; ?></td>
                                                        <td><?= $harga['harga9']; ?></td>
                                                        <td>Rp.
                                                            <?= number_format((int)$hanyaharga['harga9'] * (int)$hanyajumlah['jumlah9']); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><?= $no++; ?></th>
                                                        <td><?= $material['material10']; ?></td>
                                                        <td><?= $ukuran['ukuran10']; ?></td>
                                                        <td><?= $jumlah['jumlah10']; ?></td>
                                                        <td><?= $harga['harga10']; ?></td>
                                                        <td>Rp.
                                                            <?= number_format((int)$hanyaharga['harga10'] * (int)$hanyajumlah['jumlah10']); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" class="text-center text-bold">Sub Total</td>
                                                        <td class="text-bold">Rp.
                                                            <?= number_format((int)$hanyaharga['harga1'] * (int)$hanyajumlah['jumlah1'] + (int)$hanyaharga['harga2'] * (int)$hanyajumlah['jumlah2'] +
                                                            (int)$hanyaharga['harga3'] * (int)$hanyajumlah['jumlah3'] + (int)$hanyaharga['harga4'] * (int)$hanyajumlah['jumlah4'] + (int)$hanyaharga['harga5'] * (int)$hanyajumlah['jumlah5'] +
                                                            (int)$hanyaharga['harga6'] * (int)$hanyajumlah['jumlah6'] + (int)$hanyaharga['harga7'] * (int)$hanyajumlah['jumlah7'] + (int)$hanyaharga['harga8'] * (int)$hanyajumlah['jumlah8'] + (int)$hanyaharga['harga9'] * (int)$hanyajumlah['jumlah9']+
                                                            (int)$hanyaharga['harga10'] * (int)$hanyajumlah['jumlah10']); ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>