<?php

namespace App\Models;

use CodeIgniter\Model;

class KarakterModel extends Model
{
	protected $table      = 'karakter_abk';
	protected $primaryKey = 'gejala_karakter';
    protected $allowedFields = ['gejala_karakter','karakteristik_karakter'];
	protected $tempReturnType	= 'array';

	public function getData($data = false)
	{
		if($data == false)
			return $this -> findAll();

		return $this->where(['gejala_karakter' => $data])->first();
	}
}