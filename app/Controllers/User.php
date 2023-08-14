<?php

namespace App\Controllers;

class User extends BaseController
{
	
	public function save()
	{
		$data = [
			'id_user' => $this->request->getVar('id_user'),
			'password_user' => $this->request->getVar('password_user'),
			'level_user' => $this->request->getVar('level_user')
		];

		($this -> UserModel -> getData($data['id_user'])) ? 
			$this -> UserModel -> save($data) :
			$this -> UserModel -> insert($data);

		session()->setFlashdata('pesan', ' Data Berhasil Diperbaharui');
		return redirect()->to('admin/akun');
	}

	public function delete($id)
	{

		$this -> UserModel -> delete(['id_user'=>$id]);

		session()->setFlashdata('pesan', ' Data Berhasil Dihapus');
		return redirect()->to('admin/akun');
	}

	public function edit($id)
	{
		$data = [
            'title' => 'user',
            'user' => $this -> UserModel -> getData($id)
        ];

		return view('admin/user/edit', $data);
	}
}
