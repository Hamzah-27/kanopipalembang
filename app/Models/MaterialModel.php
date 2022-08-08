<?php 
namespace App\Models;

use CodeIgniter\Model;

class MaterialModel extends Model{
    
    protected $table         = 'tb_material';
    protected $allowedFields =[
        'material1','material2','material3','material4','material5',
        'material6','material7','material8','material9','material10'
    ];

    public function getMaterial($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id'=>$id])->first();
    }

}