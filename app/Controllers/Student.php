<?php namespace App\Controllers;

class Student extends BaseController
{
	public function testRequests()
	{
        //HTTP Requests
        
        $method = $this->request->getMethod();

        //print_r($method);
        //print_r($this->request->uri->getPath());
        //print_r(base_url($this->request->uri->getPath()));

        //print_r($this->request->getServer());

        //print_r($this->request->getHeader('Content-Type'));

        //print_r($this->request->getJSON());

        //HTTP Response
        $html = '<h1>Hello World</h1>';
        $this->response->setBody($html);

        $this->response->setHeader('Content-type', 'text/xml');

        $this->response->setStatusCode(501);
        $this->response->setCache(['max-age' => 120]);

        $this->response->send();
    }
    
    public function showForm()
    {
        return view('show_form');
    }

    public function acceptData()
    {
        //print_r($this->request->getMethod());

        $email = $this->request->getVar('email');
        $name = $this->request->getPost('name');
        print_r($name);
    }

    public function testDev($id)
    {
        print_r($id);
    }

}