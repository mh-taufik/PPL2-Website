<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Mahasiswa extends Model{
  protected $table = 'mahasiswa';
  protected $primaryKey = 'nim';
  protected $useAutoIncrement = false;
  protected $allowedFields = ['nim', 'nama', 'umur', 'foto'];
}