<?php

namespace App\Models;

use CodeIgniter\Model;

class CardModel extends Model
{
    protected $table      = 'card';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama', 'jabatan','facebook','twitter','alamat','slug','gambar'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
     public function getCard($slug=false)
    {
        if($slug == false){
            return $this->findAll();
        }
        return $this->where(['slug'=>$slug])->first();
    }
    public function search($keyword)
    {
        $builder= $this->table('card');
        $builder->like('nama',$keyword);
        return $builder;
    }
}