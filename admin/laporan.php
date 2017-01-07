<?php
require_once("cekAdmin.php");
$html = '
<h1 style="text-align:center; ">Laporan Buku</h1>
<br><br>
<table>
	<!-- Ini Header Tabelnya -->
	<tr class="head">
		<th>No</th>
		<th>Judul</th>
		<th>Pengarang</th>
		<th>Penerbit</th>
		<th>Deskripsi Fisik</th>
		<th>ISBN</th>
		<th>Subyek</th>
	</tr>';
	'<!-- Ini Body Tabelnya -->';
	// Tampilkan Data Dari Tabel Siswa
	$no=1;
	$sql = mysqli_query($connection,"select * from buku order by Id_buku asc");
	while ($data = mysqli_fetch_array($sql)){
	$html .= '<tr class="body">';
		$html .= '<th>'.$no.'</th>';
		$html .= '<th>'.$data['judul'].'</th>';
		$html .= '<th>'.$data['pengarang'].'</th>';
		$html .= '<th>'.$data['penerbit'].'</th>';
		$html .= '<th>'.$data['deskripsi_fisik'].'</th>';
		$html .= '<th>'.$data['isbn'].'</th>';
		$html .= '<th>'.$data['subyek'].'</th>';
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
$mpdf->Output('buku.pdf','I');
exit;
?>