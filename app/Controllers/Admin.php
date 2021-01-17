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
      $res['status'] = '1';
      $res['message'] = 'Login successful';
    }
    else {
      $res['status'] = '0';
      $res['message'] = 'Login failed';
    }

    return json_encode($res);

  }

  public function firebaseDB()
  {
    return view('admin/firebase_db');
  }

}