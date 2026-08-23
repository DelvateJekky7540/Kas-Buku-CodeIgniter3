<?php
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetFont('times', 'B', 15);
$pdf->AddPage();
$judul= "Laporan dari tanggal ".$tanggal_awal." sampai ".$tanggal_akhir;
$pdf->Cell(0, 5, $judul, 0, 1);
$pdf->Ln();
$pdf->SetFont('times','',12);
$pdf->Cell(10, 5, 'No', 1, 0, 'C');
$pdf->Cell(25, 5, 'Tanggal', 1, 0, 'C');
$pdf->Cell(60, 5, 'Keterangan', 1, 0, 'C');
$pdf->Cell(30, 5, 'Pemasukan', 1, 0, 'C');
$pdf->Cell(30, 5, 'Pengeluaran', 1, 0, 'C');
$pdf->Cell(25, 5, 'Saldo Akhir', 1, 1, 'C');


$saldo_awal = $this->Transaksi_model->saldo_awal($tanggal_awal);
$pdf->SetFont('times','',12);
$pdf->Cell(10, 5, '', 1, 0, 'C');
$pdf->Cell(85, 5, 'Saldo awal sebelum tanggal '.$tanggal_awal, 1, 0, 'C');
$pdf->Cell(30, 5, '', 1, 0, 'C');
$pdf->Cell(30, 5, '', 1, 0, 'C');
$pdf->Cell(25, 5, number_format($saldo_awal), 1, 1, 'R');

$pdf->SetFont('times','',10);
$no = 1;
$saldo = 0;
foreach($laporan as $l) {
    $pdf->Cell(10, 5, $no, 1, 0, 'C');
    $pdf->Cell(25, 5, $l['tanggal'], 1, 0, 'C');
    $pdf->Cell(60, 5, $l['keterangan'], 1, 0, 'C');
    if($l['jenis_transaksi']=='Pemasukan') {
        $pdf->Cell(30, 5, number_format($l['nominal']), 1, 0, 'R');
        $pdf->Cell(30, 5, ' ', 1, 0, 'R');
    } else {
        $pdf->Cell(30, 5, ' ', 1, 0, 'R');
        $pdf->Cell(30, 5, number_format($l['nominal']), 1, 0, 'R');
    }
    
    $saldo = $saldo + $l['nominal'];
    $pdf->Cell(25, 5, number_format($saldo), 1, 1, 'R');
    $no++;
}
$pdf->Output('laporan.pdf', 'I');