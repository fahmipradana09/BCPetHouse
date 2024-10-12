<?php

namespace App\Controllers;

use App\Models\RawatInapModel;
use App\Models\AmbulatoirsModel;
use App\Models\FisiologisModel;
use DateTime;

class RawatInap extends BaseController
{
    protected $rawatInapModel;
    protected $ambulatoirModel;
    protected $fisiologisModel;

    
    // public function db_fisiologis($id){
    //     $db = \Config\Database::connect();
    //     $builder = $db->table('fisiologis');
    //     $builder->select('fisiologis.*, rawat_inap.date_in_hospitalized, rawat_inap.prognosa, rawat_inap.medication_plan');
    //     $builder->join('rawat_inap', 'fisiologis.rawat_inap_id = rawat_inap.id');
    //     $builder->where('rawat_inap.id',$id);
    //     $query = $builder->get();
    //     return $query->getResultArray();
    // }

    public function index()
    {
        try{
            $rawatInapModel = new RawatInapModel();
        }catch(Exception $e){
            log_message('error',$e->getMessage());
            return redirect()->to('RawatInap')->with('error','An error occurred:'.$e->getMessage());
        }


        $data = [ 
            'active' => 'rawatinap',
            'dataInap' =>  $rawatInapModel->getRawatInap(),
            'activeInap' => $rawatInapModel->getActiveInap()
        ];
        //dd($data);
        return view('admin/rawat_inap/index',$data);

        
    }

    public function detail($id)
    {
        //dd($this->petModel->getPetProfile($id));
        //dd($id);
        try{
            $rawatInapModel = new RawatInapModel();
            $fisiologisModel = new FisiologisModel();

            $detailID = session()->setFlashdata('detailID',$id);
            $flag = $this->request->getGet('flag');
            $currentDate = new DateTime('now'); 
            $currentDate = $currentDate->format('Y-m-d');

            $rawatInapModel = $rawatInapModel->getRawatInap($id);
            $fisiologisAllModel = $fisiologisModel->getFisiologisHospilatizedPet($id);
            $fisiologisTodayModel = $fisiologisModel->getFisiologiByDate($currentDate,$id);
        }catch (Exception $e){
            return redirect()->to('RawatInap')->with('error','An error occurred:'.$e->getMessage());
        }
        

        $data = [
            'id' => $id,
            'active' => 'detailpet',
            'flag' => $flag,
            'dataInap' => $rawatInapModel,
            'datafisiologis' => $fisiologisAllModel,
            'dataFisiologisToday'=>$fisiologisTodayModel,
            'validation' => \Config\Services::validation(),
            'errorValidasi' => Session()->getFlashdata("errorValidasi"), //ini alternatif nya pake flash data 
            'ownerName' => Session()->getFlashdata("ownerName")
        ];
        //dd($data);
        //add new ambulatoir if there's in flash data
            // if ($ambulatoirId != null){
            //      $data['ambulatoirId'] = $ambulatoirId;
            // }
        
            if(empty($data['dataInap']))
            {
                throw new \CodeIgniter\Exceptions\PageNotFoundException('Data '.$id.'tidak terdaftar');
            }
            //dd($data);
        return view('admin/rawat_inap/detail',$data);

        //jika page tidak ditemukan
       
    }

    public function delete($id)
    {
        try{
            $rawatInapModel = new RawatInapModel();
            $rawatInapModel->delete($id);
            session()->setFlashdata('message','Data berhasil dihapus.');
            return redirect()->to('RawatInap');
        }catch(Exception $e){
            return redirect()->to('RawatInap')->with('error','An error occurred:'.$e->getMessage());
        }
    }

    public function save($id)
    {
        $rawatInapModel = new RawatInapModel();
        $ambulaltoirModel = new AmbulatoirsModel();
        $validation = \Config\Services::validation();
        //dd($this->request->getVar());
        
        if(!$this->validate([
            'diagnosis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Diagnosa Wajib diisi',
                ],
            ],
            'prognosa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Prognosa Wajib diisi',
                ],
            ],
            'medicationPlan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Prognosa Wajib diisi',
                ],
            ],
            'medication' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Prognosa Wajib diisi',
                ],
            ],

        ])){
            //dd(\Config\Services::validation());
            //dd($this->request->getVar());
            return redirect()->to(base_url('RawatInap/detail/'.$id))
            ->with('errorValidasi',$validation->listErrors())
            ->with('ownerName',$validation->getError('ownerName')) // Ini cara ngakalin biar data perkolomnya bisa dilempar ke create
            ->with('petName',$validation->getError('petName'));
        }

        //$idAmbulatoir = $this->request->getVar('')
        
        $ambulatoirModel->save([
            'diagnosis' => $this->request->getVar('diagnosis'),
            'medication' => $this->request->getVar('medication'),
        ]);
        //dd($id);
        $rawatInapModel->save([
            'id' => $id,
            'prognosa' => $this->request->getVar('prognosa'),
            'medication_plan' => $this->request->getVar('medicationPlan'),

            
        ]);

        session()->setFlashdata('message','Data Success Updated');
        return redirect()->to('RawatInap');
    }


    public function saveFisiologis ($id = false){
        try{
            //dd($id,$idDetail);
            $fisiologisModel = new FisiologisModel();
            $detailID = session()->get('detailID');
            //dd($detailID);
            //update if data not null
            if ($id == false){
                $fisiologisModel->save([
                'rawat_inap_id'             => $detailID,
                'pagi_medication'           => $this->request->getVar('medicationMorning'),
                'siang_medication'          => $this->request->getVar('medicationAfternoon'),
                'malam_medication'          => $this->request->getVar('medicationNight'),
                'pagi_temperature'          => $this->request->getVar('tempMorning'),
                'siang_temperature'         => $this->request->getVar('tempAfternoon'),
                'malam_temperature'         => $this->request->getVar('tempNight'),
                'pagi_respiratory_rate'     => $this->request->getVar('respMorning'),
                'siang_respiratory_rate'    => $this->request->getVar('respAfternoon'),
                'malam_respiratory_rate'    => $this->request->getVar('respNight'),
                'pagi_hearthbeat_rate'      => $this->request->getVar('pulseMorning'),
                'siang_hearthbeat_rate'     => $this->request->getVar('pulseAfternoon'),
                'malam_hearthbeat_rate'     => $this->request->getVar('pulseNight'),
                'pagi_crt'                  => $this->request->getVar('crtMorning'),
                'siang_crt'                 => $this->request->getVar('crtAfternoon'),
                'malam_crt'                 => $this->request->getVar('crtNight'),
                'pagi_turgor'               => $this->request->getVar('turgorMorning'),
                'siang_turgor'              => $this->request->getVar('turgorAfternoon'),
                'malam_turgor'              => $this->request->getVar('turgorNight'),
                'pagi_dideaksi'             => $this->request->getVar('didaksiMorning'),
                'siang_dideaksi'            => $this->request->getVar('didaksiAfternoon'),
                'malam_dideaksi'            => $this->request->getVar('didaksiNight'),
                'pagi_eat_status'           => $this->request->getVar('eatMorning'),
                'siang_eat_status'          => $this->request->getVar('eatAfternoon'),
                'malam_eat_status'          => $this->request->getVar('eatNight'),
                'pagi_drink_status'         => $this->request->getVar('drinkMorning'),
                'siang_drink_status'        => $this->request->getVar('drinkAfternoon'),
                'malam_drink_status'        => $this->request->getVar('drinkNight'),
                'pagi_note'                 => $this->request->getVar('noteMorning'),
                'siang_note'                => $this->request->getVar('noteAfternoon'),
                'malam_note'                => $this->request->getVar('noteNight'),
                ]);

            }else{
                $fisiologisModel->save([
                    'id'                        => $id,
                    'rawat_inap_id'             => $detailID,
                    'pagi_medication'           => $this->request->getVar('medicationMorning'),
                    'siang_medication'          => $this->request->getVar('medicationAfternoon'),
                    'malam_medication'          => $this->request->getVar('medicationNight'),
                    'pagi_temperature'          => $this->request->getVar('tempMorning'),
                    'siang_temperature'         => $this->request->getVar('tempAfternoon'),
                    'malam_temperature'         => $this->request->getVar('tempNight'),
                    'pagi_respiratory_rate'     => $this->request->getVar('respMorning'),
                    'siang_respiratory_rate'    => $this->request->getVar('respAfternoon'),
                    'malam_respiratory_rate'    => $this->request->getVar('respNight'),
                    'pagi_hearthbeat_rate'      => $this->request->getVar('pulseMorning'),
                    'siang_hearthbeat_rate'     => $this->request->getVar('pulseAfternoon'),
                    'malam_hearthbeat_rate'     => $this->request->getVar('pulseNight'),
                    'pagi_crt'                  => $this->request->getVar('crtMorning'),
                    'siang_crt'                 => $this->request->getVar('crtAfternoon'),
                    'malam_crt'                 => $this->request->getVar('crtNight'),
                    'pagi_turgor'               => $this->request->getVar('turgorMorning'),
                    'siang_turgor'              => $this->request->getVar('turgorAfternoon'),
                    'malam_turgor'              => $this->request->getVar('turgorNight'),
                    'pagi_dideaksi'             => $this->request->getVar('didaksiMorning'),
                    'siang_dideaksi'            => $this->request->getVar('didaksiAfternoon'),
                    'malam_dideaksi'            => $this->request->getVar('didaksiNight'),
                    'pagi_eat_status'           => $this->request->getVar('eatMorning'),
                    'siang_eat_status'          => $this->request->getVar('eatAfternoon'),
                    'malam_eat_status'          => $this->request->getVar('eatNight'),
                    'pagi_drink_status'         => $this->request->getVar('drinkMorning'),
                    'siang_drink_status'        => $this->request->getVar('drinkAfternoon'),
                    'malam_drink_status'        => $this->request->getVar('drinkNight'),
                    'pagi_note'                 => $this->request->getVar('noteMorning'),
                    'siang_note'                => $this->request->getVar('noteAfternoon'),
                    'malam_note'                => $this->request->getVar('noteNight'),
                    ]);
            }
            session()->setFlashdata('message','Data Success Updated');

            return redirect()->to(base_url('RawatInap/detail/'.$detailID."?flag=edit"));


        }catch(Exception $e){
            return redirect()->to('RawatInap')->with('error','An error occurred:'.$e->getMessage());
        }
        
    }



}