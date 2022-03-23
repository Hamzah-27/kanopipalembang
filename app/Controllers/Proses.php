<?php 
namespace App\Controllers;
use \App\Models\PekerjaanModel;
use \App\Models\MaterialModel;
use \App\Models\UkuranModel;
use \App\Models\JumlahModel;
use \App\Models\HargaModel;

class Proses extends BaseController{

    protected $pekerjaanModel;
    protected $materialModel;
    protected $ukuranModel;
    protected $jumlahModel;
    protected $hargaModel;
    public function __construct() {
        $this->pekerjaanModel   = new PekerjaanModel();
        $this->materialModel    = new MaterialModel();
        $this->ukuranModel      = new UkuranModel();
        $this->jumlahModel      = new JumlahModel();
        $this->hargaModel       = new HargaModel();
    }

    public function save()
    {
        // Manambahkan validasi input
        if (!$this-> validate([
            'jenispekerjaan'   =>'required|is_unique[tb_pekerjaan.jenispekerjaan]',
            'luasvolume'       =>'required[tb_pekerjaan.luasvolume]',
            'harga'            =>'required[tb_pekerjaan.harga]',
            'foto'             =>'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg]'
        ])) {
            return redirect()->to('/dashboard/create')-> withInput();
        }

        // Mengambil foto
        $fileFoto = $this->request->getFile('foto');

        // Apakah ada gambar yang diupload ?
    if ($fileFoto->getError() == 4) {
        // Apabila tidak ada foto yang diupload maka pasang foto default
            $namaFoto = 'img.jpg';
        } else {
        // Apabila ada foto yang diupload maka ambil nama random
            $namaFoto = $fileFoto->getRandomName();
        // Lalu pindahkan ke folder gallery
            $fileFoto->move('gallery',$namaFoto);
        }

        // Simpan data ke table pekerjaan
        $this->pekerjaanModel->save([
            'jenispekerjaan'    => $this->request->getVar('jenispekerjaan'),
            'luasvolume'        => $this->request->getVar('luasvolume'),
            'harga'             => $this->request->getVar('harga'),
            'foto'              => $namaFoto
        ]);

        // Simpan data ke table material
        $this->materialModel->save([
            'material1'         => $this->request->getVar('material1'),
            'material2'         => $this->request->getVar('material2'),
            'material3'         => $this->request->getVar('material3'),
            'material4'         => $this->request->getVar('material4'),
            'material5'         => $this->request->getVar('material5'),
            'material6'         => $this->request->getVar('material6'),
            'material7'         => $this->request->getVar('material7'),
            'material8'         => $this->request->getVar('material8'),
            'material9'         => $this->request->getVar('material9'),
            'material10'        => $this->request->getVar('material10'),
        ]);
        // Simpan data ke table ukuran
        $this->ukuranModel->save([
            'ukuran1'         => $this->request->getVar('ukuran1'),
            'ukuran2'         => $this->request->getVar('ukuran2'),
            'ukuran3'         => $this->request->getVar('ukuran3'),
            'ukuran4'         => $this->request->getVar('ukuran4'),
            'ukuran5'         => $this->request->getVar('ukuran5'),
            'ukuran6'         => $this->request->getVar('ukuran6'),
            'ukuran7'         => $this->request->getVar('ukuran7'),
            'ukuran8'         => $this->request->getVar('ukuran8'),
            'ukuran9'         => $this->request->getVar('ukuran9'),
            'ukuran10'        => $this->request->getVar('ukuran10'),
        ]);
        // Simpan data ke table jumlah
        $this->jumlahModel->save([
            'jumlah1'         => $this->request->getVar('jumlah1'),
            'jumlah2'         => $this->request->getVar('jumlah2'),
            'jumlah3'         => $this->request->getVar('jumlah3'),
            'jumlah4'         => $this->request->getVar('jumlah4'),
            'jumlah5'         => $this->request->getVar('jumlah5'),
            'jumlah6'         => $this->request->getVar('jumlah6'),
            'jumlah7'         => $this->request->getVar('jumlah7'),
            'jumlah8'         => $this->request->getVar('jumlah8'),
            'jumlah9'         => $this->request->getVar('jumlah9'),
            'jumlah10'        => $this->request->getVar('jumlah10'),
        ]);
        // Simpan data ke table harga
        $this->hargaModel->save([
            'harga1'         => $this->request->getVar('harga1'),
            'harga2'         => $this->request->getVar('harga2'),
            'harga3'         => $this->request->getVar('harga3'),
            'harga4'         => $this->request->getVar('harga4'),
            'harga5'         => $this->request->getVar('harga5'),
            'harga6'         => $this->request->getVar('harga6'),
            'harga7'         => $this->request->getVar('harga7'),
            'harga8'         => $this->request->getVar('harga8'),
            'harga9'         => $this->request->getVar('harga9'),
            'harga10'        => $this->request->getVar('harga10'),
        ]);
        session()->setFlashdata('pesan','Data berhasil ditambahkan');
        return redirect()->to('dashboard/listpekerjaan');
    }


    public function update($id)
    {
        // Dikarenakan namabarang = is unique, maka apabila nama tidak diubah
        $pekerjaanLama = $this->pekerjaanModel->getPekerjaan($this->request->getVar('id'));
        if ($pekerjaanLama['jenispekerjaan'] == $this->request->getVar('jenispekerjaan')) {
            $rule_pekerjaan = 'required';
        }else {
            $rule_pekerjaan = 'required|is_unique[tb_pekerjaan.jenispekerjaan]';
        }

        // Membuat validasi input
        if (!$this-> validate([
            'jenispekerjaan'    => $rule_pekerjaan,
            'luasvolume'        => 'required[tb_pekerjaan.luasvolume]',
            'harga'             => 'required[tb_pekerjaan.harga]',
            'foto'              => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg]'
        ])) {
            session()->setFlashdata('pesan3','Data gagal diupdate');
            return redirect()->to('/dashboard/update/'. $this->request->getVar('id'));
        }

        // Menangkap gambar
        $fileFoto = $this->request->getFile('foto');

        // cek gambar, apakah tetap gambar lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        }else {
            // Generate nama foto random
            $namaFoto = $fileFoto->getRandomName();
            // Pindahkan foto
            $fileFoto->move('gallery',$namaFoto);
            // Hapus file lama
            unlink('gallery/'.$this->request->getVar('fotoLama'));
        }

        // Simpan data ke table pekerjaan
        $this->pekerjaanModel->save([
            'id'                => $id,
            'jenispekerjaan'    => $this->request->getVar('jenispekerjaan'),
            'luasvolume'        => $this->request->getVar('luasvolume'),
            'harga'             => $this->request->getVar('harga'),
            'foto'              => $namaFoto
        ]);

        // Simpan data ke table material
        $this->materialModel->save([
            'id'                => $id,
            'material1'         => $this->request->getVar('material1'),
            'material2'         => $this->request->getVar('material2'),
            'material3'         => $this->request->getVar('material3'),
            'material4'         => $this->request->getVar('material4'),
            'material5'         => $this->request->getVar('material5'),
            'material6'         => $this->request->getVar('material6'),
            'material7'         => $this->request->getVar('material7'),
            'material8'         => $this->request->getVar('material8'),
            'material9'         => $this->request->getVar('material9'),
            'material10'        => $this->request->getVar('material10'),
        ]);
        // Simpan data ke table ukuran
        $this->ukuranModel->save([
            'id'              => $id,
            'ukuran1'         => $this->request->getVar('ukuran1'),
            'ukuran2'         => $this->request->getVar('ukuran2'),
            'ukuran3'         => $this->request->getVar('ukuran3'),
            'ukuran4'         => $this->request->getVar('ukuran4'),
            'ukuran5'         => $this->request->getVar('ukuran5'),
            'ukuran6'         => $this->request->getVar('ukuran6'),
            'ukuran7'         => $this->request->getVar('ukuran7'),
            'ukuran8'         => $this->request->getVar('ukuran8'),
            'ukuran9'         => $this->request->getVar('ukuran9'),
            'ukuran10'        => $this->request->getVar('ukuran10'),
        ]);
        // Simpan data ke table jumlah
        $this->jumlahModel->save([
            'id'              => $id,
            'jumlah1'         => $this->request->getVar('jumlah1'),
            'jumlah2'         => $this->request->getVar('jumlah2'),
            'jumlah3'         => $this->request->getVar('jumlah3'),
            'jumlah4'         => $this->request->getVar('jumlah4'),
            'jumlah5'         => $this->request->getVar('jumlah5'),
            'jumlah6'         => $this->request->getVar('jumlah6'),
            'jumlah7'         => $this->request->getVar('jumlah7'),
            'jumlah8'         => $this->request->getVar('jumlah8'),
            'jumlah9'         => $this->request->getVar('jumlah9'),
            'jumlah10'        => $this->request->getVar('jumlah10'),
        ]);
        // Simpan data ke table harga
        $this->hargaModel->save([
            'id'             => $id,
            'harga1'         => $this->request->getVar('harga1'),
            'harga2'         => $this->request->getVar('harga2'),
            'harga3'         => $this->request->getVar('harga3'),
            'harga4'         => $this->request->getVar('harga4'),
            'harga5'         => $this->request->getVar('harga5'),
            'harga6'         => $this->request->getVar('harga6'),
            'harga7'         => $this->request->getVar('harga7'),
            'harga8'         => $this->request->getVar('harga8'),
            'harga9'         => $this->request->getVar('harga9'),
            'harga10'        => $this->request->getVar('harga10'),
        ]);
        session()->setFlashdata('pesan2','Data berhasil di update');
        return redirect()->to('/dashboard/detail/'.$this->request->getVar('id'));
    }


    public function delete($id)
    {
        // Cari data berdasarkan id
        $pekerjaan = $this->pekerjaanModel->find($id);
        $material  = $this->materialModel->find($id);
        $ukuran    = $this->ukuranModel->find($id);
        $jumlah    = $this->jumlahModel->find($id);
        $harga     = $this->hargaModel->find($id);
        // Karena gambar default tak boleh dihapus, maka cek file apakah gambarnya bukan default
        if ($pekerjaan['foto']!='img.jpg') {
        // Maka hapus file
        unlink('gallery/'.$pekerjaan['foto']);
        }
        // Lalu hapus datanya
        $this->pekerjaanModel->delete($id);
        $this->materialModel->delete($id);
        $this->ukuranModel->delete($id);
        $this->jumlahModel->delete($id);
        $this->hargaModel->delete($id);
        session()->setFlashdata('pesan1', 'Data berhasil dihapus !');
        return redirect()->to('dashboard/listpekerjaan');
    }

}