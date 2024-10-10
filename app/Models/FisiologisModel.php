<?php

namespace App\Models;

use CodeIgniter\Model;
use Datetime;

class FisiologisModel extends Model
{
	protected $table      = 'fisiologis';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = [
        'rawat_inap_id',
        "pagi_medication",
        "siang_medication",
        "malam_medication",
        "pagi_temperature",
        "siang_temperature",
        "malam_temperature",
        "pagi_respiratory_rate",
        "siang_respiratory_rate",
        "malam_respiratory_rate",
        "pagi_hearthbeat_rate",
        "siang_hearthbeat_rate",
        "malam_hearthbeat_rate",
        "pagi_crt",
        "siang_crt",
        "malam_crt",
        "pagi_turgor",
        "siang_turgor",
        "malam_turgor",
        "pagi_dideaksi",
        "siang_dideaksi",
        "malam_dideaksi",
        "pagi_eat_status",
        "siang_eat_status",
        "malam_eat_status",
        "pagi_drink_status",
        "siang_drink_status",
        "malam_drink_status",
        "pagi_note",
        "siang_note",
        "malam_note",
    ];

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

    public function getFisiologisHospilatizedPet($id)
    {
        //return $this->where('ambulatoir.id',$id)->first();
        return $this->select('fisiologis.*')
                    ->join('rawat_inap as r', 'fisiologis.rawat_inap_id = r.id')
                    ->where('r.id',$id)->findAll();
    }

    // public function getFisiologiByDate($date){
    //     $date = new DateTime($date);
    //     $hour = (int)$date->format('H');

    //     if ($hour >= 0 && $hour < 12){
    //         return
    //     }elseif ($hour >= 12 && $hour < 18){

    //     }else {
            
    //     }
    // }

    public function getFisiologiByDate($date, $id){
        $formattedDate = (new DateTime($date))->format('Y-m-d');

        log_message('info','Data Format'.$formattedDate);
        return $this->select('fisiologis.*')
            ->join('rawat_inap as r', 'fisiologis.rawat_inap_id = r.id')
            ->like('fisiologis.date_rawatInap', $formattedDate, 'after')
            ->where('r.id',$id)
            ->first();

        
    }

}
