<?php namespace App\Controllers;

class LoginController extends BaseController
{
  public function doLogin()
  {
    $throtter = \Config\Services::throttler();
    
    $allowed = $throtter->check('login', 3, 30);

    print($allowed);
    if ($allowed) {
      //do your login process
    }
    else {
      //return error or do nothing.
    }
  }

  public function ipCheck()
  {
    print('I m inside Login Controller');
  }
}