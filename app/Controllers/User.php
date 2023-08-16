<?php

namespace App\Controllers;

class User extends BaseController
{
	
	public function save()
	{
		if($this->request->getVar()==[]) return redirect()->to(base_url().'admin/user');
		
		$data = [
			'id_user' => $this->request->getVar('id_user'),
			'nama_user' => $this->request->getVar('nama_user'),
			'email_user' => $this->request->getVar('email_user'),
			'password_user' => $this->request->getVar('password_user'),
			'level_user' => $this->request->getVar('level_user')
		];

		if($this -> UserModel -> getData($data['id_user'])) {
			$data['password_user'] = password_hash($data['password_user'], PASSWORD_DEFAULT);
			$this -> UserModel -> save($data);

			session()->setFlashdata('pesan', ' Data Berhasil Diubah');
			return redirect()->to(base_url().'admin/akun');
		}

		if (($this->UserModel->where('nama_user', $data['nama_user'])->first())!== null) {
			session()->setFlashdata('pesan', ' Nama: '.$data['nama_user'].' sudah digunakan');
			return redirect()->to(base_url().'admin/akun');
		}
		
		if($data['password_user']!=$this->request->getVar('repassword_user')){
			session()->setFlashdata('pesan', ' Password tidak sesuai digunakan');
			return redirect()->to(base_url().'admin/akun');
		}

		$data['password_user'] = password_hash($data['password_user'], PASSWORD_DEFAULT);
		$this->UserModel->insert($data);

		session()->setFlashdata('pesan', ' Data Berhasil Ditambahkan');
		return redirect()->to(base_url().'admin/akun');
	}

	public function delete($id)
	{

		$this -> UserModel -> delete(['id_user'=>$id]);

		session()->setFlashdata('pesan', ' Data Berhasil Dihapus');
		return redirect()->to(base_url().'admin/akun');
	}

	public function edit($id)
	{
		$data = [
            'title' => 'user',
            'user' => $this -> UserModel -> getData($id)
        ];

		return view('admin/user/edit', $data);
	}

	public function add()
	{
		if(!session()->has('status')) return redirect()->to(base_url().'login');
		return view('akun/add');
	}
}
