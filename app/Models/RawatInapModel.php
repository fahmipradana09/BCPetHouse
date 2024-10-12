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

    protected $allowedFields = ['id_ambulatoir','id_petProfile','prognosa','medication_plan'];

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
            return $this->select('rawat_inap.*,pp.name, pp.owner_name, pp.address, am.amnesa')
                        ->join('ambulatoir as am', 'rawat_inap.id_ambulatoir = am.id')
                        ->join('pet_profile as pp', 'rawat_inap.id_petProfile = pp.id')
                        ->orderBy('rawat_inap.date_in_hospitalized','DESC')
                        ->where('rawat_inap.is_done',1)
                        ->findAll();
        }
        return $this->select('rawat_inap.*, am.*, pp.*')
                    ->join('ambulatoir as am', 'rawat_inap.id_ambulatoir = am.id')
                    ->join('pet_profile as pp', 'rawat_inap.id_petProfile = pp.id')
                    ->where('rawat_inap.id',$id)->first();
    }

    public function getActiveInap(){
        return $this->select('rawat_inap.id, rawat_inap.date_in_hospitalized, rawat_inap.status, pp.name, pp.owner_name, pp.address, am.amnesa')
                    ->join('ambulatoir as am', 'rawat_inap.id_ambulatoir = am.id')
                    ->join('pet_profile as pp', 'rawat_inap.id_petProfile = pp.id')
                    ->orderBy('rawat_inap.date_in_hospitalized','DESC')
                    ->where('rawat_inap.is_done',0)
                    ->findAll();
    }
}

