<?php

namespace App\Controllers;

class Guest extends BaseController
{
	protected $db;
	
	public function __construct()
	{
		$this->db = \Config\Database::connect();
	}

	public function konsultasi()
	{
		if(!session()->has('status')) return redirect()->to(base_url().'login');
		if(session()->get('level')!=='2') return redirect()->to(base_url());

		$data = [
			'title' => 'Konsultasi',
			'karakter' => $this->KarakterModel->getData()
		];

		return view('user/konsultasi', $data);
	} 

	public function riwayat()
	{
		if(!session()->has('status')) return redirect()->to(base_url().'login');
		if(session()->get('level')!=='2') return redirect()->to(base_url());

		$daftar= $this->db->query('SELECT * FROM daftar_riwayat_konsultasi WHERE daftar_riwayat_konsultasi.nama_user LIKE "'.session()->get('nama').'"');

		$data = [
			'title' => 'Riwayat Konsultasi',
			'daftar' => $daftar->getResultArray()
		];

		return view('user/riwayat', $data);
	} 

	public function hasil($id=FALSE)
	{
		if(!session()->has('status')) return redirect()->to(base_url().'login');
		if(session()->get('level')!=='2') return redirect()->to(base_url());

		if($id){
			$daftar= $this->db->query('SELECT * FROM daftar_riwayat_konsultasi WHERE daftar_riwayat_konsultasi.id_konsultasi LIKE "'.$id.'"');
		}else{
			$daftar= $this->db->query('SELECT * FROM daftar_riwayat_konsultasi WHERE daftar_riwayat_konsultasi.id_konsultasi LIKE "'.session()->get('id_konsultasi').'"');
		}

		$data = [
			'title' => 'Hasil Diagnosa',
			'daftar' => $daftar->getResultArray()
		];

		return view('user/hasil_diagnosa', $data);
	} 

	public function delete($id)
	{
		if(session()->get('level')!=='2') return redirect()->to(base_url());
		$this -> db -> query('DELETE FROM daftar_riwayat_konsultasi WHERE daftar_riwayat_konsultasi.id_konsultasi LIKE "'.$id.'"');

		session()->setFlashdata('pesan', ' Data Berhasil Dihapus');
		return redirect()->to(base_url().'riwayat');	
	}

	public function cetak($id)
	{
		// dd($id);
		$data = $this->db->query('SELECT * FROM daftar_riwayat_konsultasi WHERE daftar_riwayat_konsultasi.id_konsultasi LIKE "'.$id.'"')->getResultArray();
		
		// header('Content-Type: application/pdf'); 
		ob_clean();
		$mpdf = new \Mpdf\Mpdf();
		$html='
		<style>
		*{
			margin: 0;
			box-sizing: border-box;
		}

		div.container{
			border:1px solid black;
			margin: 8px;
		}
		section#biodata,section#analisa{
			padding: 15px;
		}

		section#biodata .biodata-body,
		section#analisa .analisa-body{
			margin: 5px 0;
		}

		</style>
		<section class="content bg-light">
			<div class="container">
				<div class="card px-3">';
					foreach ($data as $d){
			$html.=	'<section id="biodata" class="mt-2 p-3">
						<div id="Konsultasi">Id Konsultasi : '.$d["id_konsultasi"].' </div>
						<h3 class="biodata-header">Biodata Konsultasi</h3>
						<div class="biodata-body">Nama: '.$d["nama_user"].'</div>
						<div class="biodata-body">Email: '.$d["email_user"].'</div>
					</section>
					<section id="analisa" class="mb-2 p-3">
						<h3 class="analisa-header">Hasil Analisa</h3>
						<div class="analisa-body">Kode: '.$d["kode_jenis"].'</div>
						<div class="analisa-body">Jenis ABK: '.$d["nama_jenis"].'</div>
						<div class="analisa-body">Solusi: '.$d["solusi_jenis"].'</div>
					</section>';
					}
			$html.='</div>
			</div>
		</section>
			';
		$mpdf->WriteHTML($html);

		$mpdf->Output();
		die;
	} 
		
}