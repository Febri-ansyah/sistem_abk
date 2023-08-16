<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function check()
	{
		if($this->request->getVar()==[]) return redirect()->to(base_url().'login');
		
		$data = [
			'nama_user' => $this->request->getVar('nama_user'),
			'password_user' => $this->request->getVar('password_user')
		];
		$userdata = $this->UserModel->where('nama_user', $data['nama_user'])->first();

		if($userdata==null){
			session()->setFlashdata('pesan', ' Nama: '.$data['nama_user'].' belum terdaftar');
			return redirect()->to(base_url().'login');
		}

		if(!(password_verify($data['password_user'], $userdata['password_user']))){
			session()->setFlashdata('pesan', 'Password Salah');
			return redirect()->to(base_url().'login');
		}

		session()->set('nama', $userdata['nama_user']);
		session()->set('level', $userdata['level_user']);
		session()->set('status', 'login');

		return redirect()->to(base_url());
	}
}