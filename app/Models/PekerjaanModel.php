<?php 
namespace App\Models;

use CodeIgniter\Model;

class PekerjaanModel extends Model{
    
    protected $table         = 'tb_pekerjaan';
    protected $allowedFields = ['jenispekerjaan','luasvolume','harga','foto'];

    public function getPekerjaan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id'=>$id])->first();
    }

    public function search($cari)
    {
        return $this->table('tb_pekerjaan')->like('jenispekerjaan', $cari)->orlike('harga', $cari);
    }
}