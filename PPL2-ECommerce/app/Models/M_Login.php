<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Login extends Model{
  protected $table = 'administrator';
  protected $primaryKey = 'id';
  protected $useAutoIncrement = false;
  protected $allowedFields = ['id','username', 'password'];
}