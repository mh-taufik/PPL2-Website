<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Barang extends Model{
  protected $table = 'barang';
  protected $primaryKey = 'id';
  protected $useAutoIncrement = true;
  protected $allowedFields = ['id', 'nama', 'harga', 'stok', 'gambar',];
}