<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;


$dompdf = new Dompdf();
$dompdf ->loadhtml('Menggunakan Library DOMpdf Untuk Membuat Report PDF Dengan DOMPDF');


$dompdf ->setPaper('A4', 'landscape');


$dompdf->render();


$dompdf->stream('hasil_report.pdf');
?>
