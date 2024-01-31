<?php

namespace App\Models;

use CodeIgniter\Model;

class AmbulatoirsModel extends Model
{
	protected $table      = 'ambulatoir';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['pet_id','diagnosis','date_checkup', 'amnesa', 'status_present', 'clinical_finding', 'medication'];

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

    public function getAmbulatoir($id = false)
    {
        if ($id == false)
        {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

}
