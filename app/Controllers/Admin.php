<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function karakter()
	{
		if(!session()->has('status')) return redirect()->to(base_url().'login');
		if(session()->get('level')!=='1') return redirect()->to(base_url());

		$currentPage = $this->request->getVar('page_karakter') ? 
						$this->request->getVar('page_karakter') : '1';
		$jumlahData='5';
		$data = [
			'title' => 'karakter',
			'karakter' => $this->KarakterModel->paginate($jumlahData, 'karakter'),
			'pager' => $this->KarakterModel->pager,
			'currentPage' => $currentPage,
			'jumlahData' => $jumlahData

		];

		return view('admin/karakter/view', $data);
	} 

	public function jenis()
	{
		if(!session()->has('status')) return redirect()->to(base_url().'login');
		if(session()->get('level')!=='1') return redirect()->to(base_url());

		$data = [
			'title' => 'Jenis',
			'jenis' => $this->JenisModel->getData()
		];

		return view('admin/jenis/view', $data);
	}

	public function akun()
	{
		if(!session()->has('status')) return redirect()->to(base_url().'login');
		if(session()->get('level')!=='1') return redirect()->to(base_url());

		$data = [
			'title' => 'User',
			'user' => $this->UserModel->getData()
		];

		return view('admin/user/view', $data);
	}
}