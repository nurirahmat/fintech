<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class Register extends ResourceController
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
            'user_id' => date('Ymdhis'),
            'full_name' => $this->request->getVar('nama'),
            'gender' => $this->request->getVar('gender'),
            'birthplace'  => $this->request->getVar('kotaLahir'),
            'email' => $this->request->getVar('email'),
            'date_of_birth'  => $this->request->getVar('tglLahir'),
            'religion' => $this->request->getVar('agama'),
			'phone'  => $this->request->getVar('hp'),
			'ktp' => $this->request->getVar('ktp'),
			'npwp'  => $this->request->getVar('npwp'),
            'alamat' => $this->request->getVar('alamat'),
			'pekerjaan'  => $this->request->getVar('pekerjaan'),
			'nomor_bpjs' => $this->request->getVar('bpjs'),
			'nama_ibukandung' => $this->request->getVar('ibu'),
            'password' => password_hash($this->request->getVar('password'),PASSWORD_BCRYPT),
            'created_at' => date('Y-m-d h:i:s')     
        ];
        $model = new UserModel();
        $registered = $model->save($data);
        //$this->respondCreated($registered);
        
        $resp['message'] = 'Registered Success';
	    $resp['status']  = true;
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
