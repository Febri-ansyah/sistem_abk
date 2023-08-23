<?php

namespace App\Controllers;

class Konsultasi extends BaseController
{
	public function save(){

		//CATCH ALL data request
		$request=[
			'G1'=> $this -> request -> getVar('G1'),
			'G2'=> $this -> request -> getVar('G2'),
			'G3'=> $this -> request -> getVar('G3'),
			'G4'=> $this -> request -> getVar('G4'),
			'G5'=> $this -> request -> getVar('G5'),
			'G6'=> $this -> request -> getVar('G6'),
			'G7'=> $this -> request -> getVar('G7'),
			'G8'=> $this -> request -> getVar('G8'),
			'G9'=> $this -> request -> getVar('G9'),
			'G10'=> $this -> request -> getVar('G10'),
			'G11'=> $this -> request -> getVar('G11'),
			'G12'=> $this -> request -> getVar('G12'),
			'G13'=> $this -> request -> getVar('G13'),
			'G14'=> $this -> request -> getVar('G14'),
			'G15'=> $this -> request -> getVar('G15'),
			'G16'=> $this -> request -> getVar('G16'),
			'G17'=> $this -> request -> getVar('G17'),
			'G18'=> $this -> request -> getVar('G18'),
			'G19'=> $this -> request -> getVar('G19'),
			'G20'=> $this -> request -> getVar('G20'),
			'G21'=> $this -> request -> getVar('G21'),
			'G22'=> $this -> request -> getVar('G22'),
			'G23'=> $this -> request -> getVar('G23'),
			'G24'=> $this -> request -> getVar('G24'),
			'G25'=> $this -> request -> getVar('G25'),
			'G26'=> $this -> request -> getVar('G26'),
			'G27'=> $this -> request -> getVar('G27'),
			'G28'=> $this -> request -> getVar('G28'),
			'G29'=> $this -> request -> getVar('G29'),
			'G30'=> $this -> request -> getVar('G30'),
			'G31'=> $this -> request -> getVar('G31'),
			'G32'=> $this -> request -> getVar('G32'),
			'G33'=> $this -> request -> getVar('G33'),
			'G34'=> $this -> request -> getVar('G34'),
		];

		//FORWARD CHAINING
		if($request['G1']=='Y'&&
		 	$request['G2']=='Y' &&
			$request['G3']=='Y' &&
			$request['G6']=='Y' &&
			$request['G7']=='Y' &&
			$request['G9']=='Y' &&
			$request['G10']=='Y' &&
			$request['G11']=='Y' &&
			$request['G12']=='Y'){$kode_jenis='ABK2';}

		elseif($request['G4']=='Y' &&
			$request['G5']=='Y' &&
			$request['G8']=='Y' &&
			$request['G13']=='Y') {$kode_jenis='ABK1';}

		elseif($request['G14']=='Y' &&
			$request['G15']=='Y' &&
			$request['G16']=='Y' &&
			$request['G17']=='Y' &&
			$request['G18']=='Y' &&
			$request['G19']=='Y' &&
			$request['G20']=='Y') {$kode_jenis='ABK3';}

		elseif($request['G21']=='Y' &&
			$request['G22']=='Y' &&
			$request['G25']=='Y' &&
			$request['G26']=='Y' &&
			$request['G27']=='Y' &&
			$request['G28']=='Y') {$kode_jenis='ABK5';}

		elseif($request['G23']=='Y' &&
			$request['G24']=='Y' &&
			$request['G29']=='Y' &&
			$request['G30']=='Y') {$kode_jenis='ABK4';}
		
		elseif($request['G31']=='Y' &&
			$request['G32']=='Y' &&
			$request['G33']=='Y' &&
			$request['G34']=='Y') {$kode_jenis='ABK6';}

		else{$kode_jenis='ABK0';}

		// MENCACAH DATA
		$requests="";
		foreach($request as $q =>$v){
			$requests.=$q.'='.$v.',';
		}

		//MEMASUKAN DATA KEDATABASE
		$data=[
			'id_konsultasi'=> $this -> request -> getVar('token'),
			'nama_user'=> session()->get('nama'),
			'ceklis_konsultasi'=> $requests,
			'kode_jenis'=> $kode_jenis
		];

		session()->set('id_konsultasi',$data['id_konsultasi']);
		session()->set('kode_jenis',$data['kode_jenis']);

		$this->KonsultasiModel->insert($data);
		return redirect()->to(base_url().'hasil');
	}
}
