<?php 
namespace App\Models;

use CodeIgniter\Model;

class UkuranModel extends Model{
    protected $table         = 'tb_ukuran';
    protected $allowedFields = [
        'ukuran1','ukuran2','ukuran3','ukuran4','ukuran5',
        'ukuran6','ukuran7','ukuran8','ukuran9','ukuran10'
    ];

    public function getUkuran($id = false)
    {

        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id'=>$id])->first();
    }

}