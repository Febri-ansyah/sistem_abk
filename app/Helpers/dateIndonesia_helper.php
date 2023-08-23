<?php 

function dateIndonesia($e=false)
{
	$bulan = [
	1=>'Januari',
	'Februari',
	'Maret',
	'April',
	'Mei',
	'Juni',
	'Juli',
	'Agustus',
	'September',
	'Oktober',
	'November',
	'Desember'
	];

	$date = explode('-', $e);
	
	return $date[2] . ' ' . $bulan[(int)$date[1]] . ' ' . $date[0];
}