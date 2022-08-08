<?php 
namespace App\Models;

use CodeIgniter\Model;

class HargaModel extends Model{
    
    protected $table         = 'tb_harga';
    protected $allowedFields = [
        'harga1','harga2','harga3','harga4','harga5',
        'harga6','harga7','harga8','harga9','harga10'
    ];

    public function getHarga($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id'=>$id])->first();
    }
}