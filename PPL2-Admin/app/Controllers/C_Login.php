<?php

namespace App\Controllers;

use App\Models\M_User;

class C_Login extends BaseController{
    public function __construct(){
      $session = session();
      if($session->has('username')){
        return redirect()->to(base_url('/login'));
      }
    }

  public function index(){
    helper(['form']);
    return view('v_login');
  } 

  public function auth()
  {
      $session = session();
      $model = new M_User();
      $username = $this->request->getVar('username');
      $password = md5($this->request->getVar('password'));
      $data = $model->where('username',$username)->where('password',$password)->first();
      print_r($data);
      if(!empty($data)){
        $session->setFlashdata('msg', 'Get the data');
        $session->set(['username' => $username]);
        return redirect()->to(base_url());
      }else{
        $session->setFlashdata('msg', 'Wrong Password');
        return redirect()->to(base_url('/login'));
      }
  }

  public function logout()
  {
      $session = session();
      $session->destroy();
      return redirect()->to(base_url('/login'));
  }
}