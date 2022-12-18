<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Barang extends Model{
  protected $table = 'barang';
  protected $primaryKey = 'id';
  protected $useAutoIncrement = true;
  protected $allowedFields = ['id', 'nama', 'harga', 'stok', 'gambar'];

  public function updateStok($arr){
    foreach($arr as $data){
      $tempArr = $this->find($data['kode']);
      $stok = $tempArr['stok'] -= $data['jumlah'];
      print_r($tempArr);
      $this->update($data['kode'], array(
        'nama' => $tempArr['nama'],
        'harga' => $tempArr['harga'],
        'stok' => $stok,
        'gambar' => $tempArr['gambar'],
      ));
    }
  }
}