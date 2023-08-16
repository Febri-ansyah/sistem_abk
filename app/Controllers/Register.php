<?php

namespace App\Controllers;

class Register extends BaseController
{
	public function check()
	{
		if($this->request->getVar()==[]) return redirect()->to(base_url().'register');
		
		$data = [
			'nama_user' => $this->request->getVar('nama_user'),
			'email_user' => $this->request->getVar('email_user'),
			'password_user' => $this->request->getVar('password_user'),
			'level_user' => '2'
		];

		if (($this->UserModel->where('nama_user', $data['nama_user'])->first())!== null) {
			session()->setFlashdata('pesan', ' Nama: '.$data['nama_user'].' sudah digunakan');
			return redirect()->to(base_url().'register');
		}
		
		if($data['password_user']!=$this->request->getVar('repassword_user')){
			session()->setFlashdata('pesan', ' Password tidak sesuai digunakan');
			return redirect()->to(base_url().'register');
		}

		$data['password_user'] = password_hash($data['password_user'], PASSWORD_DEFAULT);
		
		$this->UserModel->insert($data);
		session()->setFlashdata('pesan', ' Data Berhasil Ditambahkan');
		return redirect()->to(base_url().'register');
	}
}