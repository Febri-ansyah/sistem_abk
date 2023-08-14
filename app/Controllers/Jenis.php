<?php

namespace App\Controllers;

class Jenis extends BaseController
{
	
	public function save()
	{
		$data = [
			'kode_jenis' => $this->request->getVar('kode_jenis'),
			'nama_jenis' => $this->request->getVar('nama_jenis')
		];

		($this->JenisModel->getData($data['kode_jenis'])) ? 
			$this->JenisModel->save($data) :
			$this->JenisModel->insert($data);

		session()->setFlashdata('pesan', ' Data Berhasil Diperbaharui');
		return redirect()->to('Admin/jenis');
	}

	public function delete($id)
	{

		$this->JenisModel->delete(['kode_jenis'=>$id]);

		session()->setFlashdata('pesan', ' Data Berhasil Dihapus');
		return redirect()->to('Admin/jenis');
	}

	public function edit($id)
	{
		$data = [
            'title' => 'jenis',
            'jenis' => $this->JenisModel->getData($id)
        ];

		return view('admin/jenis/edit', $data);
	}
}
