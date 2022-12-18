<?php

namespace App\Controllers;

class C_Home extends BaseController
{
    public function index()
    {
        $session = session();
        if(!$session->has('username')){
          return redirect()->to(base_url('/login'));
        }
        return view('v_index');
    }

    public function welcome()
    {
        $session = session();
        if(!$session->has('username')){
          return redirect()->to(base_url('/login'));
        }
        $data['content_view'] = 'v_welcome';
        return view('layout/v_template', $data);
    }
}
