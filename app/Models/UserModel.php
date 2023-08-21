<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table      = 'users_abk';
	protected $primaryKey = 'nama_user';
    protected $allowedFields = ['nama_user','password_user','email_user','level_user'];
	protected $tempReturnType	= 'array';

	public function getData($data = false)
	{
		if($data == false)
			return $this -> findAll();

		return $this->where(['nama_user' => $data])->first();
	}
}