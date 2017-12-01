<?php 
//veritabanından çekilenler

	
$karkasBetonMetreKup = $_GET["karkasBetonMetreKup"];
$arakatBetonMetreKup = $_GET["arakatBetonMetreKup"];
$vincKirisiBetonMetreKup = $_GET["vincKirisiBetonMetreKup"];

$demirFiyat = $_GET["demirFiyat"];
$betonFiyat = $_GET["betonFiyat"];
$betonIscilik = $_GET["betonIscilik"];
$demirIscilik = $_GET["demirIscilik"];
$nakliyat = $_GET["nakliyat"];
$montajIscilik = $_GET["montajIscilik"];
$buharKuru = $_GET["buharKuru"];
$ankraj = $_GET["ankraj"];
$ongermeHalatFiyati = $_GET["ongermeHalatFiyati"];

//create-form.php den gelenler
$date = $_GET["date"];
$sirketadi = $_GET["sirketadi"];
$adsoyad = $_GET["adsoyad"];
$ceptel = $_GET["ceptel"];

//index.js den gelenler
$vincKirisiMetreKup = $_GET["vincKirisiMetreKup"];
$olukMetreKup = $_GET["olukMetreKup"];
$asikMetreKupT = $_GET["asikMetreKupT"];
$makasMetreKup = $_GET["makasMetreKup"];
$kolonMetreKup = $_GET["kolonMetreKup"];
$ttPlakMetreKup = $_GET["ttPlakMetreKup"];

$ongermeHalatiToplam = $_GET["ongermeHalatiToplam"];

$ankrajToplam = $_GET["ankrajToplam"];


$BetonMetreKup = round(($vincKirisiMetreKup + $olukMetreKup + $asikMetreKupT + $makasMetreKup + $kolonMetreKup + $ttPlakMetreKup), 2);
$betonToplamFiyat = round(($BetonMetreKup * $betonFiyat), 3);

$DemirMetreKup = round(($BetonMetreKup * 150), 2);
$demirToplamFiyat = round((($DemirMetreKup * $demirFiyat) / 1000), 2);

//toplam fiyatlar
$betonIscilikToplamFiyat = round(($BetonMetreKup * $betonIscilik), 2);

$demirIscilikToplamFiyat = round((($DemirMetreKup * $demirIscilik) / 1000), 2);

$nakliyatToplamFiyat = ceil($BetonMetreKup * 0.125) * $nakliyat;

$montajIscilikToplamFiyat = round(($BetonMetreKup * $montajIscilik), 2);

$buharKuruToplamFiyat = round(($BetonMetreKup * $buharKuru), 2);

$ongermeHalatiToplamFiyat = round(($ongermeHalatiToplam * $ongermeHalatFiyati), 2);

$ankrajToplamFiyat = $ankrajToplam * $ankraj;


$genelGiderlerFiyat = round((($betonToplamFiyat + $demirToplamFiyat + $betonIscilikToplamFiyat + $demirIscilikToplamFiyat + $nakliyatToplamFiyat + $montajIscilikToplamFiyat + $buharKuruToplamFiyat + $ankrajToplamFiyat + $ongermeHalatiToplamFiyat) * 0.1), 2);

$toplamFiyat = round(($betonToplamFiyat + $demirToplamFiyat + $betonIscilikToplamFiyat + $demirIscilikToplamFiyat + $nakliyatToplamFiyat + $montajIscilikToplamFiyat + $buharKuruToplamFiyat + $ankrajToplamFiyat + $ongermeHalatiToplamFiyat + $genelGiderlerFiyat), 2);

require("fpdf/alphapdf.php");

$pdf = new AlphaPDF();

$pdf->AddPage("P", "A4");

$pdf->AddFont('arial','','arial.php');

//font ayarlanıyor
$pdf->SetFont('Arial', '', 11);

$pdf->SetAlpha(0.6);

$pdf->Image('presets/logo.png', 10, 10, -140);
$pdf->Image('presets/aja.png', 165, 10, -300);
$pdf->Image('presets/tpb.png', 185, 10, -100);

$pdf->SetY(27);
$pdf->SetX(24.5);
$pdf->SetTextColor(0, 58, 124);
$pdf->AddFont('arial','B','arial.php');
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(40, 6, iconv('utf-8', 'ISO-8859-9', "www.betonel.com.tr"), 0, 'C');


$pdf->SetAlpha(1);

$pdf->SetY(50);
$pdf->SetTextColor(0,0,0);
$pdf->AddFont('arial','B','arial.php');
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(35, 6, iconv('utf-8', 'ISO-8859-9', "FİRMA ADI           :"), 0, 'C');

$pdf->SetY(50);
$pdf->SetX(45);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 6, iconv('utf-8', 'ISO-8859-9', base64_decode(urldecode($_GET["sirketadi"]))), 0, 'L');

$pdf->SetY(50);
$pdf->SetX(160);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(35, 6, iconv('utf-8', 'ISO-8859-9', "Tarih: "), 0, 'L');

$pdf->SetY(50);
$pdf->SetX(178);
$pdf->SetFont("arial", "B", "11");
$pdf->MultiCell(60, 6, iconv('utf-8', 'ISO-8859-9', $date), 0, 'L');

$pdf->SetY(55);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(35, 6, iconv('utf-8', 'ISO-8859-9', "YETKİLİ                :"), 0, 'C');

$pdf->SetY(55);
$pdf->SetX(45);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 6, iconv('utf-8', 'ISO-8859-9', base64_decode(urldecode($_GET["adsoyad"]))), 0, 'L');


$pdf->SetY(60);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(35, 6, iconv('utf-8', 'ISO-8859-9', "TELEFON            :"), 0, 'C');

$pdf->SetY(60);
$pdf->SetX(45);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 6, iconv('utf-8', 'ISO-8859-9', base64_decode(urldecode($_GET["ceptel"]))), 0, 'L');

$pdf->SetY(85);
$pdf->SetFont("arial","B","10");
$pdf->MultiCell(60, 5, "", 1, 'C');

$pdf->SetY(85);
$pdf->SetX(70);
$pdf->AddFont('arial','B','arial.php');
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', "MİKTARI"), 1, 'C');

$pdf->SetY(85);
$pdf->SetX(110);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', "BİRİM FİYAT"), 1, 'C');

$pdf->SetY(85);
$pdf->SetX(160);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', "TUTARI"), 1, 'C');

//beton
$pdf->SetY(90);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Beton"), 1, 'L');

$pdf->SetY(90);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $BetonMetreKup ." m³") , 1, 'R');

$pdf->SetY(90);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $betonFiyat . " TL/m³"), 1, 'R');

$pdf->SetY(90);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, $betonToplamFiyat . " TL", 1, 'R');


//demir
$pdf->SetY(95);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Demir"), 1, 'L');

		
$pdf->SetY(95);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $DemirMetreKup . " kg") , 1, 'R');

$pdf->SetY(95);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $demirFiyat . " TL/m³"), 1, 'R');

$pdf->SetY(95);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, $demirToplamFiyat ." TL", 1, 'R');


//beton işçilik
$pdf->SetY(100);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Beton İşçilik"), 1, 'L');

$pdf->SetY(100);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $BetonMetreKup . " m³"), 1, 'R');

$pdf->SetY(100);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $betonIscilik . " TL/m³"), 1, 'R');

$pdf->SetY(100);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $betonIscilikToplamFiyat . " TL"), 1, 'R');


//demir işçilik
$pdf->SetY(105);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Demir İşçilik"), 1, 'L');

$pdf->SetY(105);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $DemirMetreKup ." kg"), 1, 'R');

$pdf->SetY(105);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $demirIscilik . " TL/m³"), 1, 'R');

$pdf->SetY(105);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $demirIscilikToplamFiyat . " TL"), 1, 'R');


//nakliye
$pdf->SetY(110);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Nakliye"), 1, 'L');

$pdf->SetY(110);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', ceil($BetonMetreKup * 0.125) . " sefer"), 1, 'R');

$pdf->SetY(110);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $nakliyat . " TL/sefer"), 1, 'R');

$pdf->SetY(110);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $nakliyatToplamFiyat . " TL"), 1, 'R');


//montaj işçilik
$pdf->SetY(115);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Montaj İşçilik"), 1, 'L');

$pdf->SetY(115);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $BetonMetreKup . " m³"), 1, 'R');

$pdf->SetY(115);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $montajIscilik . " TL/m³"), 1, 'R');

$pdf->SetY(115);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $montajIscilikToplamFiyat . " TL"), 1, 'R');


//buhar kürü
$pdf->SetY(120);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Buhar Kürü"), 1, 'L');

$pdf->SetY(120);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $BetonMetreKup . " m³"), 1, 'R');

$pdf->SetY(120);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $buharKuru . " TL/m³"), 1, 'R');

$pdf->SetY(120);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $buharKuruToplamFiyat . " TL"), 1, 'R');

//ankraj
$pdf->SetY(125);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Ankraj"), 1, 'L');


if($ankrajToplam == 0){
	
	$pdf->SetY(125);
	$pdf->SetX(70);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', "(Arakat mevcut değil)"), 1, 'R');
}

else{
	
	$pdf->SetY(125);
	$pdf->SetX(70);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $ankrajToplam . " Adet"), 1, 'R');
}

$pdf->SetY(125);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $ankraj . " TL/ad"), 1, 'R');

$pdf->SetY(125);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $ankrajToplamFiyat . " TL"), 1, 'R');


//öngerme halati
$pdf->SetY(130);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Öngerme Halatı"), 1, 'L');

$pdf->SetY(130);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $ongermeHalatiToplam . " kg"), 1, 'R');

$pdf->SetY(130);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', $ongermeHalatFiyati . " TL/kg"), 1, 'R');

$pdf->SetY(130);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $ongermeHalatiToplamFiyat . " TL"), 1, 'R');



//genel giderler
$pdf->SetY(135);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Genel Giderler"), 1, 'L');

$pdf->SetY(135);
$pdf->SetX(70);
$pdf->SetFont("arial", "B", "10");
$pdf->MultiCell(130, 5, iconv('utf-8', 'ISO-8859-9', $genelGiderlerFiyat . " TL"), 1, 'R');


$pdf->SetY(140);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 10, iconv('utf-8', 'ISO-8859-9', "GENEL TOPLAM"), 1, 'R');

$pdf->SetY(140);
$pdf->SetX(70);
$pdf->SetFont("arial","B","10");
$pdf->MultiCell(130, 10, iconv('utf-8', 'ISO-8859-9', $toplamFiyat . " TL"), 1, 'R');

//deneme kısmını buraya yaz. kontrol et. 150den başla.

$pdf->SetY(160);
$pdf->SetFont("arial", "B", "10");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "karkas metreküp:"), 1, 'L');

$pdf->SetY(160);
$pdf->SetX(70);
$pdf->SetFont("arial", "B", "10");
$pdf->MultiCell(130, 5, iconv('utf-8', 'ISO-8859-9', $karkasBetonMetreKup . " "), 1, 'R');

$pdf->SetY(165);
$pdf->SetFont("arial", "B", "10");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "arakat metreküp:"), 1, 'L');

$pdf->SetY(165);
$pdf->SetX(70);
$pdf->SetFont("arial", "B", "10");
$pdf->MultiCell(130, 5, iconv('utf-8', 'ISO-8859-9', $arakatBetonMetreKup . " "), 1, 'R');

$pdf->SetY(170);
$pdf->SetFont("arial", "B", "10");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "vinckirisi metreküp:"), 1, 'L');

$pdf->SetY(170);
$pdf->SetX(70);
$pdf->SetFont("arial", "B", "10");
$pdf->MultiCell(130, 5, iconv('utf-8', 'ISO-8859-9', $vincKirisiBetonMetreKup . " "), 1, 'R');


//alt kısım.
$pdf->SetAlpha(0.5);

$pdf->SetY(250);
$pdf->AddFont('arial','B','arial.php');
$pdf->SetFont("arial","B","11");
$pdf->SetTextColor(0,58,124);
$pdf->MultiCell(150, 5, iconv('utf-8', 'ISO-8859-9', "BETONEL PREFABRİK BETON ELEMANLARI SAN. VE TİC. A.Ş."), 0, 1);

$pdf->SetY(255);
$pdf->SetFont("arial","B","9");
$pdf->SetTextColor(0,58,124);
$pdf->MultiCell(150, 5, iconv('utf-8', 'ISO-8859-9', "İvedik OSB Ağaç Metal İşleri Sitesi 1122. Cad. 1434. Sok. No:1 Yenimahalle / ANKARA"), 0, 1);

$pdf->SetY(260);
$pdf->SetFont("arial","B","9");
$pdf->SetTextColor(0,58,124);
$pdf->MultiCell(150, 5, iconv('utf-8', 'ISO-8859-9', "Tel: (312) 395 81 25 Fax: (312) 395 74 21"), 0, 1);

$pdf->SetY(265);
$pdf->SetFont("arial","B","9");
$pdf->SetTextColor(0,58,124);
$pdf->MultiCell(150, 5, iconv('utf-8', 'ISO-8859-9', "E-Posta: betonel@betonel.com.tr"), 0, 1);

$pdf->SetY(270);
$pdf->SetFont("arial","B","9");
$pdf->SetTextColor(0,58,124);
$pdf->MultiCell(150, 5, iconv('utf-8', 'ISO-8859-9', "Ticaret Sicil Numarası: 29810"), 0, 1);

$pdf->Image('presets/45yillogo.jpg', 180, 250, -150);



$pdf->Output('','betonel-fiyat-hesaplari.pdf');

$conn->close();
?>