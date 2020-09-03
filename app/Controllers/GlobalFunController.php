<?php namespace App\Controllers;

class GlobalFunController extends BaseController
{
  public function __construct() {
    
  }

  public function show()
  {
    $cache = cache();
    $test = cache('test');
    print_r($test);

    print_r(env('database.default.username'));

    //helper();

    //model();

    //session();

    //view();

    //app_timezone();
    //print_r(app_timezone());

    log_message('debug', 'Testing log_message to store debug');
    log_message('error', 'Testing log_message to store new error');

    //debug, info, notice, warning, error, critical, alert, emergency
  }
}