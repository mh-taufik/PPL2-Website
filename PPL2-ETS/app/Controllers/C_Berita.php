<?php

namespace App\Controllers;

use App\Models\M_Berita;
use PHPExcel;
use PHPExcel_IOFactory;

class C_Berita extends BaseController{
  public function index(){
    $session = session();
    if(!$session->has('username')){
      return redirect()->to(base_url('/login'));
    }
    
    $berita = new M_Berita();
    $data['berita'] = $berita->findAll();
    $data['content_view'] = 'v_display_berita';
    return view('layout/v_template', $data);
  }
}