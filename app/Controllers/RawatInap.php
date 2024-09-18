<?php

namespace App\Controllers;

use App\Models\RawatInapModel;
use App\Models\AmbulatoirsModel;

class RawatInap extends BaseController
{
    protected $rawatInapModel;
    protected $ambulatoirModel;

    public function db_fisiologis($id){
        $db = \Config\Database::connect();
        $builder = $db->table('fisiologis');
        $builder->select('fisiologis.*, rawat_inap.date_in_hospitalized, rawat_inap.prognosa, rawat_inap.medication_plan');
        $builder->join('rawat_inap', 'fisiologis.rawat_inap_id = rawat_inap.id');
        $builder->where('rawat_inap.id',$id);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function index()
    {
        $rawatInapModel = new RawatInapModel();
        $data = [ 
            'active' => 'rawatinap',
            'dataInap' =>  $rawatInapModel->getRawatInap()
        ];
        //dd($data);
        return view('admin/rawat_inap/index',$data);
    }

    public function detail($id)
    {
        //dd($this->petModel->getPetProfile($id));
        //dd($id);
        $rawatInapModel = new RawatInapModel();
        $ambulatoirId = session()->get('ambulatoirId');
        $data = [
            'id' => $id,
            'active' => 'detailpet',
            'dataInap' => $rawatInapModel->getRawatInap($id),
            'datafisiologis' => $this->db_fisiologis($id),
            'validation' => \Config\Services::validation(),
            'errorValidasi' => Session()->getFlashdata("errorValidasi"), //ini alternatif nya pake flash data 
            'ownerName' => Session()->getFlashdata("ownerName")
        ];

        //add new ambulatoir if there's in flash data
        if ($ambulatoirId != null){
            $data['ambulatoirId'] = $ambulatoirId;
            }
        
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
        $rawatInapModel = new RawatInapModel();
        $rawatInapModel->delete($id);
        session()->setFlashdata('message','Data berhasil dihapus.');
        return redirect()->to('RawatInap');
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



}