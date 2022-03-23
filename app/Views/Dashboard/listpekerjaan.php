<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<!-- Container Fluid -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">List Kanopi</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form action="" method="post">
                        <div class="input-group mr-3 my-3">
                            <input type="text" class="form-control" placeholder="Cari" id="cari" name="cari">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php if(session()->getFlashdata('pesan')): ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif; ?>
            <?php if(session()->getFlashdata('pesan1')): ?>
            <div class="alert alert-danger" role="alert">
                <?= session()->getFlashdata('pesan1'); ?>
            </div>
            <?php endif; ?>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid" id="view">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List Items Kanopi</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-1" id="listbarang">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kanopi</th>
                                <th scope="col">Luas Volume</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Lihat Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 + (10 * ($currentpage - 1)); ?>
                            <?php foreach ($pekerjaan as $p): ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $p['jenispekerjaan']; ?></td>
                                <td><?= $p['luasvolume']; ?></td>
                                <td><?= $p['harga']; ?></td>
                                <td><a href="/dashboard/detail/<?= $p['id']; ?>" class="btn btn-primary me-2">Lihat
                                        Detail</a><span class="mx-2"><a href="/proses/delete/<?= $p['id']; ?>"
                                            onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger"><i
                                                class="fas fa-trash"></i></a></span></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <?= $pager->links('tb_pekerjaan','page_pekerjaan') ?>
            <!-- /.card -->
        </div>
</div>
</section>

<?= $this->endSection(); ?>