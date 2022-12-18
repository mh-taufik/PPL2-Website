<?php

namespace App\Controllers;

use App\Models\M_Barang;
use App\Models\M_Penjualan;
use App\Models\M_Transaksi;

class C_Cart extends BaseController{

  public function displayCart(){
    $session = session();
    $data['barang'] = $session->get('cart');
    $data['content_view'] = 'v_cart';
    return view('layout/v_template', $data);
  }
  
  public function insertBarang(){

    $session = session();
    if(!$session->has('username')){
      return redirect()->to(base_url('/login'));
    }

    $validation =  \Config\Services::validation();
    $validation->setRules([
      'nama' => 'required',
      'harga' => 'required',
      'stok' => 'required'
    ]);

    $isDataValid = $validation->withRequest($this->request)->run();
    if($isDataValid){
      $barang = new M_Barang();
      $foto = $this->request->getFile('gambar');
      $fileName = $this->request->getPost('nama').'.'.$foto->getExtension();
      $barang->insert([
          'nama'  => $this->request->getPost('nama'),
          'harga' => $this->request->getPost('harga'),
          'stok' => $this->request->getPost('stok'),
          'gambar' => $fileName
      ]);
      move_uploaded_file($foto->getRealPath(), 'image/barang/'.$fileName);
      return redirect()->route('barang');
    }
    $data['content_view'] = 'v_insert_barang';
    return view('layout/v_template', $data);
  }

  public function deleteBarang($id){
    $barang = new M_Barang();
    $barang->delete($id);
    return redirect()->route('barang');
  }

  public function addCart(){
    $session = session();
    $sCart = $session->get('cart');
    $tempArray = array(
      'kode'  => $this->request->getPost('kode'),
      'nama'  => $this->request->getPost('nama'),
      'harga' => $this->request->getPost('harga'),
      'jumlah' => $this->request->getPost('jumlah'),
    );

    if($sCart == null){
      $sCart = array();
      array_push($sCart, $tempArray);
      $session->set('cart', $sCart);
    }else{
      $session->set('cart', $sCart);
      $find = false;

      foreach($sCart as $key=>$data){
        if($data['kode'] == $this->request->getPost('kode')){
          $sCart[$key]['jumlah'] += $this->request->getPost('jumlah');
          $find = true;
          break;
        }
      }

      if($find == false){
        array_push($sCart, $tempArray);
        $session->set('cart', $sCart);
      }else{
        $session->set('cart', $sCart);
      }
    }
    return redirect()->route('/');
  }

  public function clearCart(){
    $session = session();
    $session->set('cart', array());
    return redirect()->route('/');
  }

  public function displayCheckout(){
    $transaksi = new M_Transaksi();
    $max = $transaksi->countAllResults() + 1;

    $data['content_view'] = 'v_display_checkout';
    $data['kode'] = 'KT-' . $max;
    $data['tanggal'] = date('Y-m-d');
    return view('layout/v_template', $data);
  }

  public function checkout(){
    $session = session();
    $transaksi = new M_Transaksi();
    $penjualan = new M_Penjualan();
    $barang = new M_Barang();
    $cart = $session->get('cart');
    // $find = $barang->find(1);
    // print_r($find['stok']);

    if(!empty($session->get('cart'))){
      $transaksi->insert($this->request->getPost());
      $penjualan->insertCart($cart, $this->request->getPost('kode'));
      $barang->updateStok($cart);
    }else{
      echo 'gagal';
    }

    $session->set('cart', array());
    return redirect()->route('/');
  }
}