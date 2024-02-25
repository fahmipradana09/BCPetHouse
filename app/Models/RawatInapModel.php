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
        // Select columns explicitly to avoid ambiguity and ensure clarity
        $this->select('rawat_inap.id AS rawat_inap_id, rawat_inap.*, ambulatoir.id AS ambulatoir_id, ambulatoir.*, pet_profile.id AS pet_profile_id, pet_profile.*')
             ->join('ambulatoir', 'rawat_inap.id_ambulatoir = ambulatoir.id')
             ->join('pet_profile', 'rawat_inap.id_petProfile = pet_profile.id');

        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->where('rawat_inap.id', $id)->first();
        }

    }
    }

