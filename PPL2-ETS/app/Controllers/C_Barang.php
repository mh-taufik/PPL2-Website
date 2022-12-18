<?php

namespace App\Controllers;

use App\Models\M_Barang;
use PHPExcel;
use PHPExcel_IOFactory;

class C_Barang extends BaseController{

  public function displayBarang(){
    $session = session();
    if(!$session->has('username')){
      return redirect()->to(base_url('/login'));
    }

    $barang = new M_Barang();
    $data['barang'] = $barang->findAll();
    $data['data_grafik'] = $barang->query("select nama, harga from barang")->getResultArray();
    $data['content_view'] = 'v_display_barang';
    
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

	public function displayFromExcel(){

    $session = session();
    if(!$session->has('username')){
      return redirect()->to(base_url('/login'));
    }

		$file = $this->request->getFile('fileExcel');

		if($file){
			$excelReader  = new PHPExcel();
			$fileLocation = $file->getTempName();
			$objPHPExcel = PHPExcel_IOFactory::load($fileLocation);
			$sheet	= $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
      $temp = array();
      
      foreach ($sheet as $row => $data) {
				if($row == 1){
					continue;
				}

        array_push($temp, array(
          'kode'=> $data['A'],
          'nama'=> $data['B'],
          'harga'=> $data['C'],
          'stok'=> $data['D'],
        ));
			}
      $data['barang'] = $temp;
		}
    
    $data['content_view'] = 'v_display_excel';
    return view('layout/v_template', $data);
	}
}