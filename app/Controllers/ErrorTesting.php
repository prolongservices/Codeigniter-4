<?php namespace App\Controllers;

class ErrorTesting extends BaseController
{
	public function index()
	{
		return view('welcome_message');
    }
    
    public function show()
    {
        
        try {
            $sum = 4 / 2;
        }
        catch(\Exception $e) {
            //print_r($e->getMessage());
            echo view('test_exe', [
                'message' => $e->getMessage()
            ]);
        }
        echo view('show_form');
    }

}
