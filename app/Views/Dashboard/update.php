<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<!-- Content wrapper-->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update data</li>
                    </ol>
                    <?php if(session()->getFlashdata('pesan3')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('pesan3'); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-12">
                    <h2 class="text-center">UPDATE ITEMS</h2>
                    <form action="/proses/update/<?= $pekerjaan['id']; ?>" method="post" enctype="multipart/form-data">
                        <?=csrf_field(); ?>
                        <input type="hidden" name="id" value="<?=$pekerjaan['id'];?>">
                        <input type="hidden" name="fotoLama" value="<?=$pekerjaan['foto'];?>">
                        <div class="mb-3">
                            <label for="jenispekerjaan">Jenis Pekerjaan</label>
                            <input type="text" class="form-control" id="jenispekerjaan" name="jenispekerjaan" autofocus
                                placeholder="Masukan jenis pekerjaan"
                                value="<?= old(('jenispekerjaan')) ? old(('jenispekerjaan')) : $pekerjaan['jenispekerjaan']; ?>">
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col">
                                    <label for="luasvolume">Luas dan Volume</label>
                                </div>
                                <div class="col">
                                    <label for="harga">Harga</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="luasvolume" name="luasvolume"
                                    placeholder="Luas dan Volume"
                                    value="<?= old(('luasvolume')) ? old(('luasvolume')) : $pekerjaan['luasvolume']; ?>"><span
                                    class="ms-2"></span><input type="text" class="form-control" id="harga" name="harga"
                                    placeholder="Rp."
                                    value="<?= old(('harga')) ? old(('harga')) : $pekerjaan['harga']; ?>">
                            </div>
                            <hr>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-4">
                                    <label for="bahanmaterial">Material</label>
                                    <input type="text" class="form-control" placeholder="Material" id="material1"
                                        name="material1"
                                        value="<?= old(('material1')) ? old(('material1')) : $material['material1']; ?>">
                                    <input type="text" class="form-control" placeholder="Material" id="material2"
                                        name="material2"
                                        value="<?= old(('material2')) ? old(('material2')) : $material['material2']; ?>">
                                    <input type="text" class="form-control" placeholder="Material" id="material3"
                                        name="material3"
                                        value="<?= old(('material3')) ? old(('material3')) : $material['material3']; ?>">
                                    <input type="text" class="form-control" placeholder="Material" id="material4"
                                        name="material4"
                                        value="<?= old(('material4')) ? old(('material4')) : $material['material4']; ?>">
                                    <input type="text" class="form-control" placeholder="Material" id="material5"
                                        name="material5"
                                        value="<?= old(('material5')) ? old(('material5')) : $material['material5']; ?>">
                                    <input type="text" class="form-control" placeholder="Material" id="material6"
                                        name="material6"
                                        value="<?= old(('material6')) ? old(('material6')) : $material['material6']; ?>">
                                    <input type="text" class="form-control" placeholder="Material" id="material7"
                                        name="material7"
                                        value="<?= old(('material7')) ? old(('material7')) : $material['material7']; ?>">
                                    <input type="text" class="form-control" placeholder="Material" id="material8"
                                        name="material8"
                                        value="<?= old(('material8')) ? old(('material8')) : $material['material8']; ?>">
                                    <input type="text" class="form-control" placeholder="Material" id="material9"
                                        name="material9"
                                        value="<?= old(('material9')) ? old(('material9')) : $material['material9']; ?>">
                                    <input type="text" class="form-control" placeholder="Material" id="material10"
                                        name="material10"
                                        value="<?= old(('material10')) ? old(('material10')) : $material['material10']; ?>">
                                </div>
                                <div class="col-3">
                                    <label for="bahanmaterial">Ukuran</label>
                                    <input type="text" class="form-control" placeholder="Ukuran" name="ukuran1"
                                        value="<?= old(('ukuran1')) ? old(('ukuran1')) : $ukuran['ukuran1']; ?>">
                                    <input type="text" class="form-control" placeholder="Ukuran" name="ukuran2"
                                        value="<?= old(('ukuran2')) ? old(('ukuran2')) : $ukuran['ukuran2']; ?>">
                                    <input type="text" class="form-control" placeholder="Ukuran" name="ukuran3"
                                        value="<?= old(('ukuran3')) ? old(('ukuran3')) : $ukuran['ukuran3']; ?>">
                                    <input type="text" class="form-control" placeholder="Ukuran" name="ukuran4"
                                        value="<?= old(('ukuran4')) ? old(('ukuran4')) : $ukuran['ukuran4']; ?>">
                                    <input type="text" class="form-control" placeholder="Ukuran" name="ukuran5"
                                        value="<?= old(('ukuran5')) ? old(('ukuran5')) : $ukuran['ukuran5']; ?>">
                                    <input type="text" class="form-control" placeholder="Ukuran" name="ukuran6"
                                        value="<?= old(('ukuran6')) ? old(('ukuran6')) : $ukuran['ukuran6']; ?>">
                                    <input type="text" class="form-control" placeholder="Ukuran" name="ukuran7"
                                        value="<?= old(('ukuran7')) ? old(('ukuran7')) : $ukuran['ukuran7']; ?>">
                                    <input type="text" class="form-control" placeholder="Ukuran" name="ukuran8"
                                        value="<?= old(('ukuran8')) ? old(('ukuran8')) : $ukuran['ukuran8']; ?>">
                                    <input type="text" class="form-control" placeholder="Ukuran" name="ukuran9"
                                        value="<?= old(('ukuran9')) ? old(('ukuran9')) : $ukuran['ukuran9']; ?>">
                                    <input type="text" class="form-control" placeholder="Ukuran" name="ukuran10"
                                        value="<?= old(('ukuran10')) ? old(('ukuran10')) : $ukuran['ukuran10']; ?>">
                                </div>
                                <div class="col-2">
                                    <label for="jumlah">Jml</label>
                                    <input type="text" class="form-control" placeholder="jumlah" name="jumlah1"
                                        value="<?= old(('jumlah1')) ? old(('jumlah1')) : $jumlah['jumlah1']; ?>">
                                    <input type="text" class="form-control" placeholder="jumlah" name="jumlah2"
                                        value="<?= old(('jumlah2')) ? old(('jumlah2')) : $jumlah['jumlah2']; ?>">
                                    <input type="text" class="form-control" placeholder="jumlah" name="jumlah3"
                                        value="<?= old(('jumlah3')) ? old(('jumlah3')) : $jumlah['jumlah3']; ?>">
                                    <input type="text" class="form-control" placeholder="jumlah" name="jumlah4"
                                        value="<?= old(('jumlah4')) ? old(('jumlah4')) : $jumlah['jumlah4']; ?>">
                                    <input type="text" class="form-control" placeholder="jumlah" name="jumlah5"
                                        value="<?= old(('jumlah5')) ? old(('jumlah5')) : $jumlah['jumlah5']; ?>">
                                    <input type="text" class="form-control" placeholder="jumlah" name="jumlah6"
                                        value="<?= old(('jumlah6')) ? old(('jumlah6')) : $jumlah['jumlah6']; ?>">
                                    <input type="text" class="form-control" placeholder="jumlah" name="jumlah7"
                                        value="<?= old(('jumlah7')) ? old(('jumlah7')) : $jumlah['jumlah7']; ?>">
                                    <input type="text" class="form-control" placeholder="jumlah" name="jumlah8"
                                        value="<?= old(('jumlah8')) ? old(('jumlah8')) : $jumlah['jumlah8']; ?>">
                                    <input type="text" class="form-control" placeholder="jumlah" name="jumlah9"
                                        value="<?= old(('jumlah9')) ? old(('jumlah9')) : $jumlah['jumlah9']; ?>">
                                    <input type="text" class="form-control" placeholder="jumlah" name="jumlah10"
                                        value="<?= old(('jumlah10')) ? old(('jumlah10')) : $jumlah['jumlah10']; ?>">
                                </div>
                                <div class="col-3">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" placeholder="Rp." id="harga1" name="harga1"
                                        value="<?= old(('harga1')) ? old(('harga1')) : $harga['harga1']; ?>">
                                    <input type="text" class="form-control" placeholder="Rp." id="harga2" name="harga2"
                                        value="<?= old(('harga2')) ? old(('harga2')) : $harga['harga2']; ?>">
                                    <input type="text" class="form-control" placeholder="Rp." id="harga3" name="harga3"
                                        value="<?= old(('harga3')) ? old(('harga3')) : $harga['harga3']; ?>">
                                    <input type="text" class="form-control" placeholder="Rp." id="harga4" name="harga4"
                                        value="<?= old(('harga4')) ? old(('harga4')) : $harga['harga4']; ?>">
                                    <input type="text" class="form-control" placeholder="Rp." id="harga5" name="harga5"
                                        value="<?= old(('harga5')) ? old(('harga5')) : $harga['harga5']; ?>">
                                    <input type="text" class="form-control" placeholder="Rp." id="harga6" name="harga6"
                                        value="<?= old(('harga6')) ? old(('harga6')) : $harga['harga6']; ?>">
                                    <input type="text" class="form-control" placeholder="Rp." id="harga7" name="harga7"
                                        value="<?= old(('harga7')) ? old(('harga7')) : $harga['harga7']; ?>">
                                    <input type="text" class="form-control" placeholder="Rp." id="harga8" name="harga8"
                                        value="<?= old(('harga8')) ? old(('harga8')) : $harga['harga8']; ?>">
                                    <input type="text" class="form-control" placeholder="Rp." id="harga9" name="harga9"
                                        value="<?= old(('harga9')) ? old(('harga9')) : $harga['harga9']; ?>">
                                    <input type="text" class="form-control" placeholder="Rp." id="harga10"
                                        name="harga10"
                                        value="<?= old(('harga10')) ? old(('harga10')) : $harga['harga10']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" id="foto" type="file" name="foto"
                                value="<?= $pekerjaan['foto']; ?>" onchange="previewImg()">
                        </div>
                        <div class="mb-3">
                            <img src="/gallery/<?= $pekerjaan['foto']; ?>" class="img-thumbnail img-preview"
                                alt="gambar-items" width="200">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- / End Main Content -->
</div>
<!-- / End Content Wrapper -->

<?= $this->endSection(); ?>