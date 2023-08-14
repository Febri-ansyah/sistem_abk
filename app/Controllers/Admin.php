<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function karakter()
	{
		$data = [
			'title' => 'karakter',
			'karakter' => $this->KarakterModel->getData()
		];

		return view('admin/karakter/view', $data);
	} 

	public function jenis()
	{
		$data = [
			'title' => 'Jenis',
			'jenis' => $this->JenisModel->getData()
		];

		return view('admin/jenis/view', $data);
	}

	public function akun()
	{
		$data = [
			'title' => 'User',
			'user' => $this->UserModel->getData()
		];

		return view('admin/user/view', $data);
	}
}