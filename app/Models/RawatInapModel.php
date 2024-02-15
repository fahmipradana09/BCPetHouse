<?php

namespace App\Models;

use CodeIgniter\Model;

class RawatInapModel extends Model
{
	protected $table      = 'rawat_inap';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = [];

    // Dates
    protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // Validation
//     protected $validationRules      = [];
//     protected $validationMessages   = [];
//     protected $skipValidation       = false;
//     protected $cleanValidationRules = true;

    public function getRawatInap($id = false)
    {
        if ($id == false)
        {
            return $this->select('rawat_inap.*, am.*, pp.*')
                        ->join('ambulatoir as am', 'rawat_inap.id_ambulatoir = am.id')
                        ->join('pet_profile as pp', 'rawat_inap.id_petProfile = pp.id')
                        ->findAll();
        }
        return $this->select('rawat_inap.*, am.*, pp.*')
                    ->join('ambulatoir as am', 'rawat_inap.id_ambulatoir = am.id')
                    ->join('pet_profile as pp', 'rawat_inap.id_petProfile = pp.id')
                    ->where('rawat_inap.id',$id)->first();
    }


}
