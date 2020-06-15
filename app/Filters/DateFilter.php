<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class DateFilter implements FilterInterface {
    public function before(RequestInterface $req)
    {
        echo 'Accessed at '.date('d-M-y H:i:s'). '</br>';
    }

    public function after(RequestInterface $req, ResponseInterface $res)
    {
        return $res->setStatusCode(404, 'Due to filters.');
    }
}