<?php

namespace App\Models;

use CodeIgniter\Model;

class AmbulatoirsModel extends Model
{
	protected $table      = 'pet_profile';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['owner_name', 'name', 'age', 'address', 'animal_type', 'fur_color', 'phone', 'radioGender','race','gender'];

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

    public function getPetProfile($id = false)
    {
        if ($id == false)
        {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
