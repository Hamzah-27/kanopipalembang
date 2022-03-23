<?php

namespace App\Controllers;
use App\Models\PekerjaanModel;
use App\Models\MaterialModel;
use App\Models\UkuranModel;
use App\Models\JumlahModel;
use App\Models\HargaModel;
use CodeIgniter\HTTP\Request;

class Dashboard extends BaseController
{
    protected $pekerjaanModel;
    protected $materialModel;
    protected $ukuranModel;
    protected $jumlahModel;
    protected $hargaModel;
    public function __construct() {
        $this->pekerjaanModel = new pekerjaanModel();
        $this->materialModel = new materialModel();
        $this->ukuranModel = new ukuranModel();
        $this->jumlahModel = new jumlahModel();
        $this->hargaModel = new hargaModel();
    }

    public function listpekerjaan()
    {
        $cari = $this->request->getVar('cari');
        if ($cari) {
            $pekerjaan = $this->pekerjaanModel->search($cari);
        }else {
            $pekerjaan = $this->pekerjaanModel;
        }

        $currentpage = $this->request->getVar('page_pekerjaan') ? $this->request->getVar('page_pekerjaan') : 1;

        $data = [
            'title'     => 'Dashboard | List kanopi',
            'pekerjaan' => $this->pekerjaanModel->paginate(10, 'tb_pekerjaan'),
            'pager'     => $this->pekerjaanModel->pager,
            'currentpage' => $currentpage
        ];
        return view('Dashboard/listpekerjaan', $data);
    }
    
    public function create()
    {
        $data = [
            'title' => 'Dashboard | Insert',
            'validation' => $validation = \Config\Services::validation()
        ];
        return view('Dashboard/create', $data);
    }


    public function detail($id)
    {        

        $angka = $this->hargaModel->getHarga($id);
        $angka1 = $this->jumlahModel->getJumlah($id);
        $hanyaharga = $angka = preg_replace("/[^0-9]/","",$angka);
        $hanyajumlah = $angka1 = preg_replace("/[^0-9]/","",$angka1);        

        $data = [
            'title'  => 'Dashboard | Detail kanopi',
            'pekerjaan' => $this->pekerjaanModel->getPekerjaan($id),
            'material' => $this->materialModel->getMaterial($id),
            'ukuran' => $this->ukuranModel->getUkuran($id),
            'jumlah' => $this->jumlahModel->getJumlah($id),
            'harga' => $this->hargaModel->getHarga($id),
            'hanyaharga' => $hanyaharga,          
            'hanyajumlah' => $hanyajumlah            
        ];

        return view('Dashboard/detail', $data);
    }

    public function update($id)
    {
        $data = [
            'title'     => 'Dashboard | Update',
            'pekerjaan' => $this->pekerjaanModel->getPekerjaan($id),
            'material' => $this->materialModel->getMaterial($id),
            'ukuran' => $this->ukuranModel->getUkuran($id),
            'jumlah' => $this->jumlahModel->getJumlah($id),
            'harga' => $this->hargaModel->getHarga($id),
        ];

        return view('Dashboard/update', $data);
    }

    public function gallery()
    {
        $data = [
            'title' => 'Dashboard | Gallery'
        ];
        return view('Dashboard/gallery', $data);
    }

    public function calendar()
    {
        $data = [
            'title' => 'Dashboard | Calendar'
        ];
        return view('Dashboard/calendar', $data);
    }
}