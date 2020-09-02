<?php namespace App\Controllers;

class HelperTestController extends BaseController
{
  public function __construct() {
    //helper('date');
    //helper('filesystem');
    helper('pawn');
  }

  public function show()
  {
    //print_r(now());
    //print_r(directory_map('.'));
    //echo write_file('./prolong.txt', 'created using filesystem helper function');
    print_r(test_ran());
  }
}