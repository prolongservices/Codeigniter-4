<?php namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
  public function dashboard()
  {
    return view('admin/dashboard');
  }

  public function home()
  {
    return view('admin/index');
  }

  public function login()
  {
    return view('admin/login');
  }

  public function doLogin()
  {
    $adminModel = new AdminModel();
    $email = $this->request->getVar('email');
    $password = $this->request->getVar('password');
    $token = $this->request->getVar('token');
    $data = $adminModel->where(array('email' => $email, 'password' => $password))->first();
    if ($data) {
      $adminModel->update($data['id'], array('token' => $token));
      $response['status'] = '1';
      $response['message'] = 'login successful';
    }
    else {
      $response['status'] = '0';
      $response['message'] = 'Invalid login';

    }
    return json_encode($response);
  }
}