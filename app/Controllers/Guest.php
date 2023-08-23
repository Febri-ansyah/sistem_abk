<?php

namespace App\Controllers;

class Guest extends BaseController
{
	protected $db;
	
	public function __construct()
	{
		$this->db = \Config\Database::connect();
		$this->dateIndonesia= helper('dateIndonesia');
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
		$this -> db -> query('DELETE FROM konsultasi_abk WHERE konsultasi_abk.id_konsultasi LIKE "'.$id.'"');

		session()->setFlashdata('pesan', ' Data Berhasil Dihapus');
		return redirect()->to(base_url().'riwayat');	
	}

	public function cetak($id)
	{
		$data = $this->db->query('SELECT * FROM daftar_riwayat_konsultasi WHERE daftar_riwayat_konsultasi.id_konsultasi LIKE "'.$id.'"')->getResultArray()[0];
		
		$tanggal=dateIndonesia(date('Y-m-d', strtotime($data['created_at'])));
		$base_url=base_url();
		header('Content-Type: application/pdf'); 
		ob_clean();
		$mpdf = new \Mpdf\Mpdf();
		$html='
		<style>
		*{
			margin: 0;
			box-sizing: border-box;
		}
		div.container{
			padding:5px; 
			border:1px solid black;
			margin: 8px;
		}
		section#biodata,section#analisa{
			padding: 15px;
		}
		div#header{
			width: 100%;
			display: flex;
			justify-content: center;
			padding: 5px;
			font-size: 14pt;
			text-align:center;
		}
		section#biodata .biodata-body,
		section#analisa .analisa-body{
			margin: 5px 0;
		}
		div#footer{
			padding: 15px;
			width: 100%;
			display: flex;
			flex-direction: column;
			align-items: end;
		}
		div#footer .jabatan{
			margin-right:60px;
		}
		div#footer .date,
		div#footer .jabatan,
		div#footer .ttd{
			margin-top: 15px;
			text-align: right;
		}
		div#footer .ttd{
			margin-top:75px;
		}
		</style>
		<section class="content bg-light">
			<div class="container">
				<div id="header"><b>Sistem Pakar Diagnosa Karakteristik Anak Berkebutuhan Khusus</b></div>
				<hr>
				<div class="card px-3">
					<section id="biodata" class="mt-2 p-3">
						<div id="Konsultasi">Id Konsultasi : '.$data["id_konsultasi"].' </div>
						<h3 class="biodata-header">Biodata Konsultasi</h3>
						<div class="biodata-body">Nama: '.$data["nama_user"].'</div>
						<div class="biodata-body">Email: '.$data["email_user"].'</div>
					</section>
					<section id="analisa" class="mb-2 p-3">
						<h3 class="analisa-header">Hasil Analisa</h3>
						<div class="analisa-body">Kode: '.$data["kode_jenis"].'</div>
						<div class="analisa-body">Jenis ABK: '.$data["nama_jenis"].'</div>
						<div class="analisa-body">Solusi: '.$data["solusi_jenis"].'</div>
					</section>
				</div>
				<div id="footer">
					<div class="date">Depok, '.$tanggal.'</div>
					<div class="jabatan">Guru VII</div>
					<div class="ttd">(...................................)</div>

				</div>
			</div>
		</section>';

		$mpdf->WriteHTML($html);

		$mpdf->Output('Data Riwayat Konsultasi_ID:'.$id.'.pdf','I');
		die;
	} 
		
}