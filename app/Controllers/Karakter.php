<?php

namespace App\Controllers;

class Karakter extends BaseController
{
	public function save()
	{
		if($this->request->getVar()==[]) return redirect()->to(base_url().'Admin/Karakter');

		$data = [
			'gejala_karakter' => $this->request->getVar('gejala_karakter'),
			'karakteristik_karakter' => $this->request->getVar('karakteristik_karakter')
		];

		($this->KarakterModel->getData($data['gejala_karakter'])) ? 
			$this->KarakterModel->save($data) :
			$this->KarakterModel->insert($data);

		session()->setFlashdata('pesan', ' Data Berhasil Diperbaharui');
		return redirect()->to(base_url().'Admin/Karakter');
	}

	public function delete($id)
	{
		$this->KarakterModel->delete(['gejala_karakter'=>$id]);

		session()->setFlashdata('pesan', ' Data Berhasil Dihapus');
		return redirect()->to(base_url().'Admin/Karakter');
	}

	public function edit($id)
	{
		if(!session()->has('status')) return redirect()->to(base_url());
	
		$data = [
            'title' => 'karakter',
            'karakter' => $this->KarakterModel->getData($id)
        ];

		return view('admin/karakter/edit', $data);
	}

	public function add()
	{
		if(!session()->has('status')) return redirect()->to(base_url().'login');
		return view('admin/karakter/add');
	}
}
