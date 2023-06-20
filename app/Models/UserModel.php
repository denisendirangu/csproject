<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tbl_user';
    protected $primaryKey = 'user_id';
    
    protected $useAutoIncrement = true;

    protected $allowedFields = ['fname', 'email', 'password', 'c_password']; 
    
    protected $validation;

}

?>