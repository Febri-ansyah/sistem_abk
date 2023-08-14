<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisModel extends Model
{
	protected $table      = 'jenis_abk';
	protected $primaryKey = 'kode_jenis';
    protected $allowedFields = ['kode_jenis','nama_jenis'];
	protected $tempReturnType	= 'array';

	public function getData($data = false)
	{
		if($data == false)
			return $this -> findAll();

		return $this->where(['kode_jenis' => $data])->first();
	}
}