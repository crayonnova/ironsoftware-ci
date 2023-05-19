<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
class Home extends BaseController
{
    public function index()
    {	
		if (!is_file(APPPATH . 'Views/pages/home.php')) {
			throw new PageNotFoundException();
		}

		$data['title'] = ucfirst('Iron Software');

		return view('pages/home', $data);
    }
}
