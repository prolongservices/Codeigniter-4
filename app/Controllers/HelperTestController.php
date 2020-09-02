<?php namespace App\Controllers;

class HelperTestController extends BaseController
{
  public function __construct() {
    //helper('date');
    helper('filesystem');
  }

  public function show()
  {
    //print_r(now());
    //print_r(directory_map('.'));
    //echo write_file('./prolong.txt', 'Creating file using filesystem helper');
  }
}