<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;


class IPThrottler implements FilterInterface
{
  
  public function before(RequestInterface $request, $args = null) {
    $throttler = Services::throttler();
    print($request->getIPAddress());
    $res = $throttler->check(strval($request->getIPAddress()), 3, 30);
    print('$res = ' . $res);
    if($res) {
      //
    }
    else {
      return Services::response()->setStatusCode(429);
    }

  }

  public function after(RequestInterface $request, ResponseInterface $response,$args = null)
  {
    
  }
}