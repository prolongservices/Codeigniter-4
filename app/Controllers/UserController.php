<?php namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\UserModel;

class UserController extends BaseController
{
  public function add()
  {
    if ($this->request->getMethod() == 'get') {
      //function is called to load view
      echo view('common/header', [
        'title' => 'Add user'
      ]);
      echo view('user/add');
      echo view('common/footer');
    }
    else if ($this->request->getMethod() == 'post') {
      //function is called to handle post action
      $body = $this->request->getVar();
      $model = new \App\Models\UserModel();
      $model->save($body);
      return redirect('user/list');
    }
  }

  public function update($id)
  {
    if ($this->request->getMethod() == 'get') {
      //function is called to load view
      echo view('common/header', [
        'title' => 'Update user'
      ]);
      $model = new \App\Models\UserModel();
      $user = $model->find($id);
      echo view('user/update', [
        'user' => $user
      ]);
      echo view('common/footer');
    }
    else if ($this->request->getMethod() == 'post') {
      //function is called to handle post action
      $body = $this->request->getVar();
      $model = new \App\Models\UserModel();
      $model->update($id, $body);
      return redirect('user/list');
    }
  }

  public function list()
  {
    if ($this->request->getMethod() == 'get') {
      //function is called to load view
      $model = new \App\Models\UserModel();
      $users = $model->findAll();
      echo view('common/header', [
        'title' => 'Users'
      ]);
      echo view('user/list', [
        'users' => $users
      ]);
      //echo view('show_form');
      echo view('common/footer');
    }
    
  }

  public function delete($id)
  {
    $model = new \App\Models\UserModel();
    $model->delete($id);
    return redirect('user/list');
  }

  public function register()
  {
    if ($this->request->getMethod() == 'get') {
      //function is called to load view
      echo view('common/header', [
        'title' => 'Add user'
      ]);
      echo view('user/add');
      echo view('common/footer');
    }
    else if ($this->request->getMethod() == 'post') {
      //function is called to handle post action
      $body = $this->request->getVar();
      $model = new UserModel();
      $res = $model->save($body);
      if ($res) {
        $this->sendNotification('New Registration', 'New user registered with email id ' . $body['email']);
      }
    }
  }
}