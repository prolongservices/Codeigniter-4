<?php namespace App\Controllers;

class UserController extends BaseController
{
  public function add()
  {
    if ($this->request->getMethod() == 'get') {
      //function is called to load view
      return view('add_user');
    }
    else if ($this->request->getMethod() == 'post') {
      //function is called to handle post action
      $body = $this->request->getVar();
      $model = new \App\Models\UserModel();
      $model->save($body);
    }
  }

  public function update($id)
  {
    if ($this->request->getMethod() == 'get') {
      //function is called to load view
      return view('update_user');
    }
    else if ($this->request->getMethod() == 'post') {
      //function is called to handle post action
      $body = $this->request->getVar();
      $model = new \App\Models\UserModel();
      $model->update($body);
    }
  }

  public function list()
  {
    
  }
}