<?php namespace App\Controllers;

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
}