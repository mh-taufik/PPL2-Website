<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Penjualan extends Model{
  protected $table = 'penjualan';
  protected $allowedFields = ['id_barang', 'id_transaksi', 'jumlah_barang', 'harga_barang'];

  public function insertCart($arr, $kode_transaksi){
    foreach($arr as $data){
      $tempArr = array(
        'id_barang' => $data['kode'],
        'id_transaksi' => $kode_transaksi,
        'jumlah_barang' => $data['jumlah'],
        'harga_barang' => $data['harga']
      );
      $this->insert($tempArr);
      // $this->query('insert into penjualan values ('.$data['kode'].',\''.$kode_transaksi.'\','.$data['jumlah'].','.$data['harga'].')');
    }
  }
}