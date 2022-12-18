<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Transaksi extends Model{
  protected $table = 'transaksi';
  protected $primaryKey = 'kode';
  protected $allowedFields = ['kode', 'tanggal', 'nama', 'alamat', 'kecamatan', 'kota'];
}