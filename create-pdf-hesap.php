<?php 

$demirFiyat = $_GET["demirFiyat"];
$betonFiyat = $_GET["betonFiyat"];
$betonIscilik = $_GET["betonIscilik"];
$demirIscilik = $_GET["demirIscilik"];
$nakliyat = $_GET["nakliyat"];
$montajIscilik = $_GET["montajIscilik"];
$buharKuru = $_GET["buharKuru"];
$ankraj = $_GET["ankraj"];
$vincKirisiMetreKup = $_GET["vincKirisiMetreKup"];

$betonMetreKup = 0;

$betonMetreKup = $vincKirisiMetreKup;

$sirketadi = base64_decode(urldecode($_GET["sirketadi"]));
$adsoyad = base64_decode(urldecode($_GET["adsoyad"]));
$ceptel = base64_decode(urldecode($_GET["ceptel"]));

require("fpdf/alphapdf.php");

$pdf = new AlphaPDF();

$pdf->AddPage("P", "A4");

$pdf->AddFont('arial','','arial.php');

// font ayarlanıyor
$pdf->SetFont('Arial', '', 11);

$pdf->SetAlpha(0.6);

$pdf->Image('presets/logo.png', 10, 10, -140);
$pdf->Image('presets/aja.png', 165, 10, -300);
$pdf->Image('presets/tpb.png', 185, 10, -100);

$pdf->SetY(27);
$pdf->SetX(24.5);
$pdf->SetTextColor(0,58,124);
$pdf->AddFont('arial','B','arial.php');
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(40, 6, iconv('utf-8', 'ISO-8859-9', "www.betonel.com.tr"), 0, 'C');







$pdf->SetAlpha(1);

$pdf->SetY(40);
$pdf->SetTextColor(0,0,0);
$pdf->AddFont('arial','B','arial.php');
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(35, 6, iconv('utf-8', 'ISO-8859-9', "FİRMA ADI           :"), 0, 'C');

$pdf->SetY(40);
$pdf->SetX(45);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 6, iconv('utf-8', 'ISO-8859-9', $sirketadi), 0, 'L');

$pdf->SetY(40);
$pdf->SetX(160);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(35, 6, iconv('utf-8', 'ISO-8859-9', "Tarih: "), 0, 'L');

$pdf->SetY(40);
$pdf->SetX(178);
$pdf->SetFont("arial", "B", "11");
$pdf->MultiCell(60, 6, iconv('utf-8', 'ISO-8859-9', date("d.m.Y")), 0, 'L');

$pdf->SetY(45);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(35, 6, iconv('utf-8', 'ISO-8859-9', "YETKİLİ                :"), 0, 'C');

$pdf->SetY(45);
$pdf->SetX(45);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 6, iconv('utf-8', 'ISO-8859-9', $adsoyad), 0, 'L');


$pdf->SetY(50);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(35, 6, iconv('utf-8', 'ISO-8859-9', "TELEFON            :"), 0, 'C');

$pdf->SetY(50);
$pdf->SetX(45);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 6, iconv('utf-8', 'ISO-8859-9', $ceptel), 0, 'L');















$pdf->SetAlpha(1);

$pdf->SetTextColor(0,0,0);
$pdf->SetY(60);
$pdf->SetFont("arial","B","10");
$pdf->MultiCell(60, 5, "", 1, 'C');

$pdf->SetY(60);
$pdf->SetX(70);
$pdf->AddFont('arial','B','arial.php');
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', "MİKTARI"), 1, 'C');

$pdf->SetY(60);
$pdf->SetX(110);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', "BİRİM FİYAT"), 1, 'C');

$pdf->SetY(60);
$pdf->SetX(160);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', "TUTARI"), 1, 'C');

//beton
$pdf->SetY(65);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Beton"), 1, 'L');

$pdf->SetY(65);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', " m³") , 1, 'C');

$pdf->SetY(65);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $betonFiyat . " TL/m³"), 1, 'C');

$pdf->SetY(65);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, " TL", 1, 'C');

//demir
$pdf->SetY(70);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Demir"), 1, 'L');

		
$pdf->SetY(70);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', " m³") , 1, 'C');

$pdf->SetY(70);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $demirFiyat . " TL/m³"), 1, 'C');

$pdf->SetY(70);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, " TL", 1, 'C');

//beton işçilik
$pdf->SetY(75);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Beton İşçilik"), 1, 'L');

$pdf->SetY(75);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', "m³"), 1, 'C');

$pdf->SetY(75);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $betonIscilik . " TL/m³"), 1, 'C');

$pdf->SetY(75);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', "x" . " TL"), 1, 'C');

//demir işçilik
$pdf->SetY(80);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Demir İşçilik"), 1, 'L');

$pdf->SetY(80);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', " m³"), 1, 'C');

$pdf->SetY(80);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $demirIscilik . " TL/m³"), 1, 'C');

$pdf->SetY(80);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', "x" . " TL"), 1, 'C');

//nakliye
$pdf->SetY(85);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Nakliye"), 1, 'L');

$pdf->SetY(85);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', " sefer"), 1, 'C');

$pdf->SetY(85);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $nakliyat . " TL/sefer"), 1, 'C');

$pdf->SetY(85);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', "x" . " TL"), 1, 'C');

//montaj işçilik
$pdf->SetY(90);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Montaj İşçilik"), 1, 'L');

$pdf->SetY(90);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', " m³"), 1, 'C');

$pdf->SetY(90);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $montajIscilik . " TL/m³"), 1, 'C');

$pdf->SetY(90);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', "x" . " TL"), 1, 'C');

//buhar kürü
$pdf->SetY(95);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Buhar Kürü"), 1, 'L');

$pdf->SetY(95);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', " Adet"), 1, 'C');

$pdf->SetY(95);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $buharKuru . " TL/ad"), 1, 'C');

$pdf->SetY(95);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', "x" . " TL"), 1, 'C');

//ankraj
$pdf->SetY(100);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Ankraj"), 1, 'L');

$pdf->SetY(100);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', " Adet"), 1, 'C');

$pdf->SetY(100);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $ankraj . " TL/ad"), 1, 'C');

$pdf->SetY(100);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', "x" . " TL"), 1, 'C');

$pdf->SetY(105);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Genel Giderler"), 1, 'L');

$pdf->SetY(105);
$pdf->SetX(70);
$pdf->SetFont("arial", "B", "10");
$pdf->MultiCell(130, 5, iconv('utf-8', 'ISO-8859-9', " "), 1, 'C');

$pdf->SetY(110);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 10, iconv('utf-8', 'ISO-8859-9', "GENEL TOPLAM"), 1, 'R');

$pdf->SetY(110);
$pdf->SetX(70);
$pdf->SetFont("arial","B","10");
$pdf->MultiCell(130, 10, iconv('utf-8', 'ISO-8859-9', "x" . " TL"), 1, 'R');



$pdf->SetAlpha(1);
$pdf->SetTextColor(0,0,0);

$pdf->Output('','betonel-fiyat-hesaplari.pdf');
?>