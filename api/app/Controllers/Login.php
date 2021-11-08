<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use Firebase\JWT\JWT;

class Login extends ResourceController
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
        helper(['form']);
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]'
        ];
        if(!$this->validate($rules)) return $this->fail($this->validator->getErrors());
        $model = new UserModel();
        $user = $model->where("email",$this->request->getVar('email'))->first();
        if(!$user) return $this->failNotFound('Email Not Found');

        $verify = password_verify($this->request->getVar('password'),$user['password']);
        if(!$verify) return $this->fail('Wrong Password');

        $key = getenv('TOKEN_SECRET');

        $iat = time();
        $nbf = $iat + 10;
        $exp = $iat + 900; // 15 minutes
        
        $payload = [
            "iat" => $iat,
            "nbf" => $nbf,
            "exp" => $exp,
            "uid" => $user['id'],
            "email" => $user['email']
        ];

        $token = JWT::encode($payload,$key);

        $resp['message'] = 'Login Success';
	    $resp['status']  = true;
        $resp['token'] = $token;
        $resp['user_id'] = $user['user_id'];
        return $this->respond($resp);
    }

    public function getData()
    {
        //

        $model = new UserModel();
        $user = $model->where("user_id",$this->request->getVar('peminjam_id'))->first();
        if(!$user) return $this->failNotFound('Email Not Found');

        $resp['message'] = 'Success';
	    $resp['status']  = true;
        $resp['fullname'] = $user['full_name'];
        $resp['peminjam_id'] = $user['user_id'];
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
