<?php

namespace App\Controllers;

class Guest extends BaseController
{
	public function konsultasi()
	{
		if(!session()->has('status')) return redirect()->to(base_url().'login');
		if(session()->get('level')!=='2') return redirect()->to(base_url());

		$data = [
			'title' => 'Konsultasi',
			'karakter' => $this->KarakterModel->getData()
		];

		return view('user/konsultasi', $data);
	} 

	public function cetak()
	{
		if(!session()->has('status')) return redirect()->to(base_url().'login');
		if(session()->get('level')!=='2') return redirect()->to(base_url());

		return view('user/hasil_diagnosa');
	} 

	
}