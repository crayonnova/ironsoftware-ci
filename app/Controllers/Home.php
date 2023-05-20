<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\IncomingRequest;

class Home extends BaseController
{
	private array $data;

	public function __construct(){
		$this->data['title'] = ucfirst('Iron Software');
	}

    public function index()
    {	
		if (!is_file(APPPATH . 'Views/pages/home.php')) {
			throw new PageNotFoundException();
		}
		$this->cachePage(120);

		return view('pages/home', $this->data);
    }

    public function sendmail()
    {	
		$request = request();
		$newEmail = $request->getPost('email');
		$jsonFile = WRITEPATH . 'subscribers.json';
		$jsonData = json_decode(file_get_contents($jsonFile), true);
		$jsonData['emails'][] = $newEmail;
		$updatedJsonData = json_encode($jsonData);
		file_put_contents($jsonFile, $updatedJsonData);

		return view('pages/home', $this->data);;
    }
}
