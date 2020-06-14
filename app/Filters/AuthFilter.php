<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface {
    public function before(RequestInterface $req)
    {
        //we will create logic to check user logged in or not?
        $isLoggedIn = false;

        if (!$isLoggedIn) {
            echo 'You are not logged in!</br>';
            //return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $req, ResponseInterface $res)
    {
        echo view('404');
    }
}