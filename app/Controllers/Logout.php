<?php

namespace App\Controllers;

class logout extends BaseController
{
	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url().'login');
	}
}