<?php

namespace App\Controllers;

use App\Models\M_Mahasiswa;
use PHPExcel;
use PHPExcel_IOFactory;

class C_Mahasiswa extends BaseController{
  public function __construct(){
    $session = session();
    if(!$session->has('username')){
      return redirect()->to(base_url('/login'));
    }
  }

  public function displayMhs(){
    $session = session();
    if(!$session->has('username')){
      return redirect()->to(base_url('/login'));
    }
    $mahasiswa = new M_Mahasiswa();
    $params = $this->request->getVar("q");
    if($params != null){
      $data['mahasiswa'] = $mahasiswa->query("select * from mahasiswa where nama like '%$params%'")->getResultArray();
    }else{
      $data['mahasiswa'] = $mahasiswa->findAll();
    }
    $data['data_grafik'] = $mahasiswa->query("select nama, umur from mahasiswa")->getResultArray();
    $data['content_view'] = 'v_display_mhs';
    $data['params'] = $params;
    return view('layout/v_template', $data);
  }
  
  public function insertMhs(){
    $validation =  \Config\Services::validation();
    $validation->setRules([
      'nim' => 'required',
      'nama' => 'required',
      'umur' => 'required'
    ]);

    $isDataValid = $validation->withRequest($this->request)->run();
    if($isDataValid){
      $mahasiswa = new M_Mahasiswa();
      $foto = $this->request->getFile('foto');
      $fileName = $this->request->getPost('nim').'.'.$foto->getExtension();
      $mahasiswa->insert([
          'nim' => $this->request->getPost('nim'),
          'nama'  => $this->request->getPost('nama'),
          'umur' => $this->request->getPost('umur'),
          'foto' => $fileName
      ]);
      move_uploaded_file($foto->getRealPath(), 'image/mhs/'.$fileName);
      return redirect()->route('mahasiswa');
    }
    $data['content_view'] = 'v_insert_mhs';
    return view('layout/v_template', $data);
  }

  public function detailMhs($nim){
    $mahasiswa = new M_Mahasiswa();
    $data['mahasiswa'] = $mahasiswa->find($nim);
    $data['content_view'] = 'v_detail_mhs';
    return view('layout/v_template', $data);
  }

  public function editMhs($nim){
    $mahasiswa = new M_Mahasiswa();
    $data['mahasiswa'] = $mahasiswa->where('nim', $nim)->first();

    $validation =  \Config\Services::validation();
    $validation->setRules([
      'nama' => 'required',
      'umur' => 'required'
    ]);
    $isDataValid = $validation->withRequest($this->request)->run();

    if($isDataValid){
      $mahasiswa = new M_Mahasiswa();
      $mahasiswa->update($nim ,[
          'nama'  => $this->request->getPost('nama'),
          'umur' => $this->request->getPost('umur')
      ]);
      return redirect()->route('mahasiswa');
    }
    $data['content_view'] = 'v_edit_mhs';
    return view('layout/v_template', $data);
  }

  public function deleteMhs($nim){
    $mahasiswa = new M_Mahasiswa();
    $mahasiswa->delete($nim);
    return redirect()->route('mahasiswa');
  }

	public function displayFromExcel(){
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
          'nim'=> $data['A'],
          'nama'=> $data['B'],
          'uts'=> $data['C'],
          'uas'=> $data['D'],
        ));
			}
      $data['mahasiswa'] = $temp;
		}
    
    $data['content_view'] = 'v_display_excel';
    return view('layout/v_template', $data);
	}

  public function exportExcel(){
      $users = $this->request;
       
      $fileName = 'Data_Nilai_Mahasiswa.xlsx';  
      $spreadsheet = new Spreadsheet();
 
      $sheet = $spreadsheet->getActiveSheet();
      $sheet->setCellValue('A1', 'Id');
      $sheet->setCellValue('B1', 'Name');
      $sheet->setCellValue('C1', 'Skills');
      $sheet->setCellValue('D1', 'Address');
      $sheet->setCellValue('E1', 'Age');
      $sheet->setCellValue('F1', 'Designation');       
      $rows = 2;
 
      foreach ($users as $val){
          $sheet->setCellValue('A' . $rows, $val['id']);
          $sheet->setCellValue('B' . $rows, $val['name']);
          $sheet->setCellValue('C' . $rows, $val['skills']);
          $sheet->setCellValue('D' . $rows, $val['address']);
          $sheet->setCellValue('E' . $rows, $val['age']);
          $sheet->setCellValue('F' . $rows, $val['designation']);
          $rows++;
      } 
      $writer = new Xlsx($spreadsheet);
      $writer->save("upload/".$fileName);
      header("Content-Type: application/vnd.ms-excel");
      redirect(base_url()."/upload/".$fileName);
  } 
}