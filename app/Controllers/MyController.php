<?php namespace App\Controllers;

use App\Models\MyModel;

class MyController extends BaseController {

    function index()
    {
        $model = new MyModel();
        $students = $model->findAll();

        return view('home');
    }

    public function testRequests()
    {
        $path = $this->request->uri->getPath();

        //print_r($path);
        //print_r(base_url($path));

        //$this->request->getJSON();

        //print_r($this->request->getServer('HTTP_ACCEPT'));
        //print_r($this->request->getHeader('Content-Type'));
        //print_r($this->request->getMethod());


        $html = '<h1>Hello World</h1>';

        $this->response->setStatusCode(403);
        $this->response->setBody($html);
        $this->response->setHeader('Content-type', 'text/txt');
        $this->response->setCache(['max-age' => 120]);
        $this->response->send();
    }
}


