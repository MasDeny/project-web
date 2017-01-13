<?php
require_once("cekAdmin.php");
$html = '
<h1 style="text-align:center; ">Laporan Anggota</h1>
<br><br>
<table>
	<!-- Ini Header Tabelnya -->
	<tr class="head">
		<th>No</th>
		<th>Nama</th>
		<th>NIM / NIP</th>
		<th>Status</th>
		<th>Prodi</th>
	</tr>';
	'<!-- Ini Body Tabelnya -->';
	// Tampilkan Data Dari Tabel Siswa
	$no=1;
	$sql = mysqli_query($connection,"select * from anggota order by id_anggota asc");
	while ($data = mysqli_fetch_array($sql)){
	$html .= '<tr class="body">';
		$html .= '<th>'.$no.'</th>';
		$html .= '<th>'.$data['nama'].'</th>';
		$html .= '<th>'.$data['nim_nip'].'</th>';
		$html .= '<th>'.$data['status'].'</th>';
		$html .= '<th>'.$data['prodi'].'</th>';
	$html .= '</tr>';
	$no++;
	}
$html .= '</table>';
'<!-- pemanggilan fungsi dari mpdf  -->';

include("../mpdf/mpdf.php");
$stylesheet = file_get_contents('../css/style-mpdf.css');
$mpdf = new mPDF('c','A4-L','','',32,25,27,25,16,13);
$mpdf->SetDisplayMode('fullpage');
$mpdf->list_indent_first_level = 0;
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html,2);
$mpdf->Output('anggota.pdf','I');
exit;
?>