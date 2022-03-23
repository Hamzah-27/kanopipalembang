<?php 
namespace App\Models;

use CodeIgniter\Model;

class JumlahModel extends Model{
    protected $table         = 'tb_jumlah';
    protected $allowedFields = [
        'jumlah1','jumlah2','jumlah3','jumlah4','jumlah5',
        'jumlah6','jumlah7','jumlah8','jumlah9','jumlah10'
    ];

    public function getJumlah($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id'=>$id])->first();
    }
}