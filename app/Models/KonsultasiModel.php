<?php

namespace App\Models;

use CodeIgniter\Model;

class KonsultasiModel extends Model
{
	protected $table      = 'konsultasi_abk';
	protected $primaryKey = 'id_konsultasi';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_konsultasi','nama_user','ceklis_konsultasi','kode_jenis'];
	protected $tempReturnType	= 'array';

	public function getData($data = false)
	{
		if($data == false)
			return $this -> findAll();

		return $this->where(['id_konsultasi' => $data])->first();
	}
}