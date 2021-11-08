<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employees';
 
    public function getKaryawan($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
 
    public function saveKaryawan($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editKaryawan($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id);
        return $builder->update($data);
    }
}
