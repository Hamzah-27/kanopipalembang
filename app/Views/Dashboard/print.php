<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .harga .isi {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .isihead {
        background-color: cornflowerblue;
    }

    .isihasil {
        background-color: yellow;
    }
    </style>
    <style>
    h2 {
        text-align: center;
        margin-bottom: 10;
    }
    </style>
    <style>
    img {
        margin: 25;
    }
    </style>
</head>

<body>
    <!-- Main content -->
    <h2 class="text-center"><?= $pekerjaan['jenispekerjaan']; ?></h2>

    <!-- Table -->
    <div class="container">
        <table style="width:50%" cellpadding="">
            <tr>
                <td>Volume</td>
                <td>:</td>
                <td><?= $pekerjaan['luasvolume']; ?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><?= $pekerjaan['harga']; ?></td>
            </tr>
        </table>
    </div>

    <center><img src="/gallery/<?= $pekerjaan['foto']; ?>" width="500"></center>

    <div class="card-header">
        <h3 class="card-title">Bahan dan Material</h3>
    </div>
    <table class="harga" cellpadding="5">
        <thead>
            <tr class="isihead">
                <th class="isi"><b>No</b></th>
                <th class="isi"><b>Material</b></th>
                <th class="isi"><b>Ukuran</b></th>
                <th class="isi"><b>Jumlah</b></th>
                <th class="isi"><b>Harga</b></th>
                <th class="isi"><b>Harga Total</b></th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1 ?>
            <tr>
                <th class="isi"><?= $no++; ?></th>
                <td class="isi"><?= $material['material1']; ?></td>
                <td class="isi"><?= $ukuran['ukuran1']; ?></td>
                <td class="isi"><?= $jumlah['jumlah1']; ?></td>
                <td class="isi"><?= $harga['harga1']; ?></td>
                <td class="isi">Rp.
                    <?= number_format((int)$hanyaharga['harga1'] * (int)$hanyajumlah['jumlah1']); ?>
                </td>
            </tr>
            <tr>
                <th class="isi"><?= $no++; ?></th>
                <td class="isi"><?= $material['material2']; ?></td>
                <td class="isi"><?= $ukuran['ukuran2']; ?></td>
                <td class="isi"><?= $jumlah['jumlah2']; ?></td>
                <td class="isi"><?= $harga['harga2']; ?></td>
                <td class="isi">Rp.
                    <?= number_format((int)$hanyaharga['harga2'] * (int)$hanyajumlah['jumlah2']); ?>
                </td>
            </tr>
            <tr>
                <th class="isi"><?= $no++; ?></th>
                <td class="isi"><?= $material['material3']; ?></td>
                <td class="isi"><?= $ukuran['ukuran3']; ?></td>
                <td class="isi"><?= $jumlah['jumlah3']; ?></td>
                <td class="isi"><?= $harga['harga3']; ?></td>
                <td class="isi">Rp.
                    <?= number_format((int)$hanyaharga['harga3'] * (int)$hanyajumlah['jumlah3']); ?>
                </td>
            </tr>
            <tr>
                <th class="isi"><?= $no++; ?></th>
                <td class="isi"><?= $material['material4']; ?></td>
                <td class="isi"><?= $ukuran['ukuran4']; ?></td>
                <td class="isi"><?= $jumlah['jumlah4']; ?></td>
                <td class="isi"><?= $harga['harga4']; ?></td>
                <td class="isi">Rp.
                    <?= number_format((int)$hanyaharga['harga4'] * (int)$hanyajumlah['jumlah4']); ?>
                </td>
            </tr>
            <tr>
                <th class="isi"><?= $no++; ?></th>
                <td class="isi"><?= $material['material5']; ?></td>
                <td class="isi"><?= $ukuran['ukuran5']; ?></td>
                <td class="isi"><?= $jumlah['jumlah5']; ?></td>
                <td class="isi"><?= $harga['harga5']; ?></td>
                <td class="isi">Rp.
                    <?= number_format((int)$hanyaharga['harga5'] * (int)$hanyajumlah['jumlah5']); ?>
                </td>
            </tr>
            <tr>
                <th class="isi"><?= $no++; ?></th>
                <td class="isi"><?= $material['material6']; ?></td>
                <td class="isi"><?= $ukuran['ukuran6']; ?></td>
                <td class="isi"><?= $jumlah['jumlah6']; ?></td>
                <td class="isi"><?= $harga['harga6']; ?></td>
                <td class="isi">Rp.
                    <?= number_format((int)$hanyaharga['harga6'] * (int)$hanyajumlah['jumlah6']); ?>
                </td>
            </tr>
            <tr>
                <th class="isi"><?= $no++; ?></th>
                <td class="isi"><?= $material['material7']; ?></td>
                <td class="isi"><?= $ukuran['ukuran7']; ?></td>
                <td class="isi"><?= $jumlah['jumlah7']; ?></td>
                <td class="isi"><?= $harga['harga7']; ?></td>
                <td class="isi">Rp.
                    <?= number_format((int)$hanyaharga['harga7'] * (int)$hanyajumlah['jumlah7']); ?>
                </td>
            </tr>
            <tr>
                <th class="isi"><?= $no++; ?></th>
                <td class="isi"><?= $material['material8']; ?></td>
                <td class="isi"><?= $ukuran['ukuran8']; ?></td>
                <td class="isi"><?= $jumlah['jumlah8']; ?></td>
                <td class="isi"><?= $harga['harga8']; ?></td>
                <td class="isi">Rp.
                    <?= number_format((int)$hanyaharga['harga8'] * (int)$hanyajumlah['jumlah8']); ?>
                </td>
            </tr>
            <tr>
                <th class="isi"><?= $no++; ?></th>
                <td class="isi"><?= $material['material9']; ?></td>
                <td class="isi"><?= $ukuran['ukuran9']; ?></td>
                <td class="isi"><?= $jumlah['jumlah9']; ?></td>
                <td class="isi"><?= $harga['harga9']; ?></td>
                <td class="isi">Rp.
                    <?= number_format((int)$hanyaharga['harga9'] * (int)$hanyajumlah['jumlah9']); ?>
                </td>
            </tr>
            <tr>
                <th class="isi"><?= $no++; ?></th>
                <td class="isi"><?= $material['material10']; ?></td>
                <td class="isi"><?= $ukuran['ukuran10']; ?></td>
                <td class="isi"><?= $jumlah['jumlah10']; ?></td>
                <td class="isi"><?= $harga['harga10']; ?></td>
                <td class="isi">Rp.
                    <?= number_format((int)$hanyaharga['harga10'] * (int)$hanyajumlah['jumlah10']); ?>
                </td>
            </tr>
            <tr class="isihasil">
                <td colspan="5" class="text-center text-bold isi">
                    <center><b>Sub
                            Total</b></center>
                </td>
                <td class="text-bold"><b>Rp.
                        <?= number_format((int)$hanyaharga['harga1'] * (int)$hanyajumlah['jumlah1'] + (int)$hanyaharga['harga2'] * (int)$hanyajumlah['jumlah2'] +
                                                            (int)$hanyaharga['harga3'] * (int)$hanyajumlah['jumlah3'] + (int)$hanyaharga['harga4'] * (int)$hanyajumlah['jumlah4'] + (int)$hanyaharga['harga5'] * (int)$hanyajumlah['jumlah5'] +
                                                            (int)$hanyaharga['harga6'] * (int)$hanyajumlah['jumlah6'] + (int)$hanyaharga['harga7'] * (int)$hanyajumlah['jumlah7'] + (int)$hanyaharga['harga8'] * (int)$hanyajumlah['jumlah8'] + (int)$hanyaharga['harga9'] * (int)$hanyajumlah['jumlah9']+
                                                            (int)$hanyaharga['harga10'] * (int)$hanyajumlah['jumlah10']); ?></b>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Option 1: Bootstrap Bundle with Popper
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>    
    window.print();
    </script> -->
</body>

</html>