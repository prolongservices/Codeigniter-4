<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface {
    public function before(RequestInterface $req)
    {
        //logic for checking if user is logged in or not.
        $isLoggedIn = false;

        if (! $isLoggedIn) {
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $req, ResponseInterface $res)
    {
        
    }
}