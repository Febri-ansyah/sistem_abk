<?php

namespace App\Controllers;

class Guest extends BaseController
{
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

	public function hasil()
	{
		if(!session()->has('status')) return redirect()->to(base_url().'login');
		if(session()->get('level')!=='2') return redirect()->to(base_url());

		return view('user/hasil_diagnosa');
	} 

	public function cetak()
	{
		header('Content-Type: application/pdf'); 
		// dd(base_url());
		ob_clean();
		$mpdf = new \Mpdf\Mpdf();
		$html='
		<style>
		*{
			margin: 0;
			box-sizing: border-box;
			font-family: monospace;
			border-collapse: collapse;
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
				<div class="card px-3">
					<section id="biodata" class="mt-2 p-3">
						<div id="Konsultasi">NO : </div>
						<h3 class="biodata-header">Biodata Konsultasi</h3>
						<div class="biodata-body">Nama: </div>
						<div class="biodata-body">Email: </div>
					</section>
					<section id="analisa" class="mb-2 p-3">
						<h3 class="analisa-header">Hasil Analisa</h3>
						<div class="analisa-body">ID ABK: XXXXXX</div>
						<div class="analisa-body">Jenis ABK: XXXXXX</div>
						<div class="analisa-body">Solusi: XXXXXX</div>
					</section>
				</div>
			</div>
		</section>
			';
		$mpdf->WriteHTML($html);

		$mpdf->Output();
		die;
	} 
		
}