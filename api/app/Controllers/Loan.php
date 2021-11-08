<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\LoanModel;
use App\Models\UserModel;

class Loan extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    use ResponseTrait;
    public function index()
    {
        //
        $data = [
            'peminjam_id' => $this->request->getVar('peminjam_id'),
            'nomor_pinjaman' => 'FP-'.date('Ymdhis'),
            'tanggal_pengajuan'  => date('Y-m-d'),
            'tenor' => $this->request->getVar('tenor'),
            'biaya'  => $this->request->getVar('biaya'),
            'bunga' => $this->request->getVar('bunga'),
			'total_cair'  => $this->request->getVar('cair'),
			'total_cicilan' => $this->request->getVar('cicilan')  
        ];
        $model = new LoanModel();
        $registered = $model->save($data);
        //$this->respondCreated($registered);
        
        $resp['message'] = 'Loan Success';
	    $resp['status']  = true;
        return $this->respond($resp);
    }

    public function getData()
    {
        //
        $model = new LoanModel();
        $loan = $model->where("peminjam_id",$this->request->getVar('peminjam_id'))->first();
        if(!$loan) return $this->failNotFound('Data not found');

        $model2 = new UserModel();
        $user = $model2->where("user_id",$this->request->getVar('peminjam_id'))->first();
        if(!$user) return $this->failNotFound('Email Not Found');

        $resp['message'] = 'Success';
	    $resp['status']  = true;
        $resp['fullname'] = $user['full_name'];
        $resp['peminjam_id'] = $loan['peminjam_id'];
        $resp['nomor_pinjaman'] = $loan['nomor_pinjaman'];
        $resp['tanggal_pengajuan'] = $loan['tanggal_pengajuan'];
        $resp['tenor'] = $loan['tenor'];
        $resp['biaya'] = $loan['biaya'];
        $resp['bunga'] = $loan['bunga'];
        $resp['total_cair'] = $loan['total_cair'];
        $resp['total_cicilan'] = $loan['total_cicilan'];
        return $this->respond($resp);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
