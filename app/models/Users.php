<?php

namespace App\Models;

use Core\Model;

class Users extends Model
{

    public function getUser()
    {

        $data = $this->db->read("users");

        return $data;
    }

}