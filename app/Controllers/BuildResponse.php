<?php namespace App\Controllers;

class BuildResponse extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

    public function show($id)
    {
        $list = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H');
        $hasData = false;
        $anotherBool = false;
        echo view('heading');
        echo view('show_form');
        echo view('body/section');
        echo view('body/loops', [
            'list' => $list
        ]);
        echo view('body/conditions', [
            'hasData' => $hasData,
            'anotherBool' => $anotherBool,
        ]);
        echo view('footer', [
            'id' => $id
        ]);
    }

    public function loginForm($data = [])
    {
        // $title = $data['title'];
        // return view('show_form', [
        //     'new_title' => $title
        // ]);
        $options = [
            'cache' => 60
        ];
        return view('show_form', $data, $options);
    }

    
    public function testCache()
    {
        $time = time();
        $data = [
            'time' => $time
        ];
        $options = [
            'cache' => 60
        ];

        echo view('footer', $data, $options);
    }

}