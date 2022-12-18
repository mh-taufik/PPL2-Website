<?php

namespace App\Models;

use CodeIgniter\Model;

class M_User extends Model{
  protected $table = 'user';
  protected $primaryKey = 'username';
  protected $useAutoIncrement = false;
  protected $allowedFields = ['username', 'password'];
}