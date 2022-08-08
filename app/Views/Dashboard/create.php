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
                        <li class="breadcrumb-item active">Insert items</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-12">
                    <h2 class="text-center">INSERT ITEMS</h2>
                    <form action="/proses/save" method="post" enctype="multipart/form-data">
                        <?=csrf_field(); ?>
                        <div class="mb-3">
                            <label for="jenispekerjaan">Jenis Pekerjaan</label>
                            <input type="text" class="form-control" id="jenispekerjaan" name="jenispekerjaan" autofocus
                                placeholder="Masukan jenis pekerjaan">
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
                                    placeholder="Luas dan Volume"><span class="ms-2"></span><input type="text"
                                    class="form-control" id="harga" name="harga" placeholder="Rp.">
                            </div>
                            <hr>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-4">
                                    <label for="bahanmaterial">Material</label>
                                    <input type="text" class="form-control mb-1" placeholder="Material" id="material1"
                                        name="material1">
                                    <input type="text" class="form-control mb-1" placeholder="Material" id="material2"
                                        name="material2">
                                    <input type="text" class="form-control mb-1" placeholder="Material" id="material3"
                                        name="material3">
                                    <input type="text" class="form-control mb-1" placeholder="Material" id="material4"
                                        name="material4">
                                    <input type="text" class="form-control mb-1" placeholder="Material" id="material5"
                                        name="material5">
                                    <input type="text" class="form-control mb-1" placeholder="Material" id="material6"
                                        name="material6">
                                    <input type="text" class="form-control mb-1" placeholder="Material" id="material7"
                                        name="material7">
                                    <input type="text" class="form-control mb-1" placeholder="Material" id="material8"
                                        name="material8">
                                    <input type="text" class="form-control mb-1" placeholder="Material" id="material9"
                                        name="material9">
                                    <input type="text" class="form-control mb-1" placeholder="Material" id="material10"
                                        name="material10">
                                </div>
                                <div class="col-3">
                                    <label for="bahanmaterial">Ukuran</label>
                                    <input type="text" class="form-control mb-1" placeholder="Ukuran" name="ukuran1">
                                    <input type="text" class="form-control mb-1" placeholder="Ukuran" name="ukuran2">
                                    <input type="text" class="form-control mb-1" placeholder="Ukuran" name="ukuran3">
                                    <input type="text" class="form-control mb-1" placeholder="Ukuran" name="ukuran4">
                                    <input type="text" class="form-control mb-1" placeholder="Ukuran" name="ukuran5">
                                    <input type="text" class="form-control mb-1" placeholder="Ukuran" name="ukuran6">
                                    <input type="text" class="form-control mb-1" placeholder="Ukuran" name="ukuran7">
                                    <input type="text" class="form-control mb-1" placeholder="Ukuran" name="ukuran8">
                                    <input type="text" class="form-control mb-1" placeholder="Ukuran" name="ukuran9">
                                    <input type="text" class="form-control mb-1" placeholder="Ukuran" name="ukuran10">
                                </div>
                                <div class="col-2">
                                    <label for="jumlah">Jml</label>
                                    <input type="text" class="form-control mb-1" placeholder="jumlah" name="jumlah1">
                                    <input type="text" class="form-control mb-1" placeholder="jumlah" name="jumlah2">
                                    <input type="text" class="form-control mb-1" placeholder="jumlah" name="jumlah3">
                                    <input type="text" class="form-control mb-1" placeholder="jumlah" name="jumlah4">
                                    <input type="text" class="form-control mb-1" placeholder="jumlah" name="jumlah5">
                                    <input type="text" class="form-control mb-1" placeholder="jumlah" name="jumlah6">
                                    <input type="text" class="form-control mb-1" placeholder="jumlah" name="jumlah7">
                                    <input type="text" class="form-control mb-1" placeholder="jumlah" name="jumlah8">
                                    <input type="text" class="form-control mb-1" placeholder="jumlah" name="jumlah9">
                                    <input type="text" class="form-control mb-1" placeholder="jumlah" name="jumlah10">
                                </div>
                                <div class="col-3">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control mb-1" placeholder="Rp." id="harga1"
                                        name="harga1">
                                    <input type="text" class="form-control mb-1" placeholder="Rp." id="harga2"
                                        name="harga2">
                                    <input type="text" class="form-control mb-1" placeholder="Rp." id="harga3"
                                        name="harga3">
                                    <input type="text" class="form-control mb-1" placeholder="Rp." id="harga4"
                                        name="harga4">
                                    <input type="text" class="form-control mb-1" placeholder="Rp." id="harga5"
                                        name="harga5">
                                    <input type="text" class="form-control mb-1" placeholder="Rp." id="harga6"
                                        name="harga6">
                                    <input type="text" class="form-control mb-1" placeholder="Rp." id="harga7"
                                        name="harga7">
                                    <input type="text" class="form-control mb-1" placeholder="Rp." id="harga8"
                                        name="harga8">
                                    <input type="text" class="form-control mb-1" placeholder="Rp." id="harga9"
                                        name="harga9">
                                    <input type="text" class="form-control mb-1" placeholder="Rp." id="harga10"
                                        name="harga10">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" id="foto" type="file" name="foto" onchange="previewImg()">
                        </div>
                        <div class="mb-3">
                            <img src="/gallery/img.jpg" class="img-thumbnail img-preview" alt="gambar-items"
                                width="200">
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