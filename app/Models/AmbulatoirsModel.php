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

    public function getAmbulatoirDetailPet($id)
    {
        //return $this->where('ambulatoir.id',$id)->first();
        return $this->select('ambulatoir.*')
                    ->join('pet_profile as pp', 'ambulatoir.pet_id = pp.id')
                    ->where('pp.id',$id)->findAll();
    }

    

    public function getAmbulatoirAndPetList($id = false)
    {
        if ($id == false)
        {
            return $this->select('ambulatoir.*, pp.name, pp.owner_name')
                        ->join('pet_profile as pp', 'ambulatoir.pet_id = pp.id')
                        ->findAll();
        }
        return $this->select('ambulatoir.*, pp.*')
                    ->join('pet_profile as pp', 'ambulatoir.pet_id = pp.id')
                    ->where('ambulatoir.id',$id)->first();
        // return $this->where(['id' => $id])->first();
    }

}
