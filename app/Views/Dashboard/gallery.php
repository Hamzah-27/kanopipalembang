<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<!-- Container Fluid -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gallery</h1>
                </div>
                <div class="col">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Gallery Kanopi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Single item -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/181.webp" class="card-img-top"
                            alt="Waterfall" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk
                                of the card's content.
                            </p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top"
                            alt="Sunset Over the Sea" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk
                                of the card's content.
                            </p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/183.webp" class="card-img-top"
                            alt="Sunset over the Sea" />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk
                                of the card's content.
                            </p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Inner -->
        </div>
    </section>
    <!-- / End Main Content -->
</div>

<?= $this->endSection(); ?>