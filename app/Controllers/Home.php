<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class Home extends BaseController
{
	public function index()
    {
		echo view('landing');
	}
}
