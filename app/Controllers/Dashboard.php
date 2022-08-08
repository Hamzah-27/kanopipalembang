<?php

namespace App\Controllers;
use App\Models\PekerjaanModel;
use App\Models\MaterialModel;
use App\Models\UkuranModel;
use App\Models\JumlahModel;
use App\Models\HargaModel;
use TCPDF;
use CodeIgniter\HTTP\Request;
use phpDocumentor\Reflection\PseudoTypes\False_;

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

    // public function gallery()
    // {
    //     $data = [
    //         'title' => 'Dashboard | Gallery'
    //     ];
    //     return view('Dashboard/gallery', $data);
    // }

    public function print($id)
    {
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
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

        $html = view('Dashboard/print', $data);

        // set document information
        $pdf->SetCreator('Kanopi');
        $pdf->SetAuthor('Kanopi Palembang');
        $pdf->SetTitle('Detail Pekerjaan');
        $pdf->SetSubject('TCPDF Tutorial');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

        // set default header data
        // $pdf->SetHeaderData('/template/dist/img/img_1.png', 50, 'Kanopi Palembang',' 006');

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set font
        $pdf->SetFont('dejavusans', '', 10);

        // add a page
        $pdf->AddPage();

        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        // Important
        $this->response->setContentType('application/pdf');

        //Close and output PDF document
        $pdf->Output('Detail Pekerjaan', 'I');
    }

    public function calendar()
    {
        $data = [
            'title' => 'Dashboard | Calendar'
        ];
        return view('Dashboard/calendar', $data);
    }
}