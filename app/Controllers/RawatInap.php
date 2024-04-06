<?php

namespace App\Controllers;

use App\Models\RawatInapModel;

class RawatInap extends BaseController
{
    protected $rawatInapModel;
    public function __construct()
    {
        $this->rawatInapModel = new RawatInapModel();
    }

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
        $data = [
            'active' => 'rawatinap',
            'dataInap' =>  $this->rawatInapModel->getRawatInap()
        ];
        //dd($data);
        return view('admin/rawat_inap/index',$data);
    }

    public function detail($id)
    {
        //dd($this->petModel->getPetProfile($id));
        //dd($id);
       $data = [
        'id' => $id,
        'active' => 'detailpet',
        'dataInap' => $this->rawatInapModel->getRawatInap($id),
        'datafisiologis' => $this->db_fisiologis($id),
        'validation' => \Config\Services::validation(),
        'errorValidasi' => Session()->getFlashdata("errorValidasi"), //ini alternatif nya pake flash data 
        'ownerName' => Session()->getFlashdata("ownerName")
       ];
    

        //dd($data);
       return view('admin/rawat_inap/detail',$data);

       //jika page tidak ditemukan
       if(empty($data['dataInap']))
       {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Data '.$id.'tidak terdaftar');
       }
    }

    public function delete($id)
    {
        $this->rawatInapModel->delete($id);
        session()->setFlashdata('message','Data berhasil dihapus.');
        return redirect()->to('RawatInap');
    }

    public function save($id)
    {
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

        
        //dd($id);
        $this->rawatInapModel->save([
            'id' => $id,
            'owner_name' => $this->request->getVar('ownerName'),
        ]);

        session()->setFlashdata('message','Data Success Updated');
        return redirect()->to('RawatInap');
    }



}