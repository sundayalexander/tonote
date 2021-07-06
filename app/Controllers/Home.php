<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(){
        return view('index');
    }

	public function view($page='home')
	{
        if ( ! is_file(APPPATH.'/Views/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        echo view('templates/header', $data);
        echo view($page, $data);
        echo view('templates/footer', $data);
	}
}
