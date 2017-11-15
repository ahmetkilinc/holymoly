<?php
/*
$url = 'https://www.kardemir.com/Liste.aspx?yil=2017&s=FIYAT&Lng=tr-TR';
$content = file_get_contents($url);
$first_step = explode("satirMalzeme" , $content);
$second_step = explode("mm", $first_step[11]);
$fourth_step = explode("</td>", $second_step[1]);
$fifth_step = explode("class", $fourth_step[1]);

$demirFiyat = explode(">", $fifth_step[1]);

$url1 = 'https://www.kardemir.com/Liste.aspx?yil=2017&s=FIYAT&Lng=tr-TR';
$content1 = file_get_contents($url1);
$first_step1 = explode("ContentPlaceHolder1_DynamicListe" , $content1);
$second_step1 = explode("div", $first_step1[1]);
$third_step1 = explode("=", $second_step1[1]);

$demirFiyatTarih = str_split($third_step1[1], 10);*/

$demirFiyatdb = $_GET["demirFiyatdb"];

$demirFiyatTarihdb = $_GET["demirFiyatTarihdb"];

//eklenmiş iki dosya olması halinde bir öncekini al

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
$pdf->MultiCell(60, 6, iconv('utf-8', 'ISO-8859-9', base64_decode(urldecode($_GET["sirketadi"]))), 0, 'L');

$pdf->SetY(40);
$pdf->SetX(160);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(35, 6, iconv('utf-8', 'ISO-8859-9', "Tarih: "), 0, 'L');

$pdf->SetY(40);
$pdf->SetX(178);
$pdf->SetFont("arial", "B", "11");
$pdf->MultiCell(60, 6, iconv('utf-8', 'ISO-8859-9', $_GET["date"]), 0, 'L');

$pdf->SetY(45);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(35, 6, iconv('utf-8', 'ISO-8859-9', "YETKİLİ                :"), 0, 'C');

$pdf->SetY(45);
$pdf->SetX(45);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 6, iconv('utf-8', 'ISO-8859-9', base64_decode(urldecode($_GET["adsoyad"]))), 0, 'L');

$pdf->SetY(45);
$pdf->SetX(160);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(35, 6, iconv('utf-8', 'ISO-8859-9', "Rev: "), 0, 'L');

$pdf->SetY(45);
$pdf->SetX(178);
$pdf->SetFont("arial", "B", "11");
$pdf->MultiCell(60, 6, iconv('utf-8', 'ISO-8859-9', "00"), 0, 'L');

$pdf->SetY(50);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(35, 6, iconv('utf-8', 'ISO-8859-9', "TELEFON            :"), 0, 'C');

$pdf->SetY(50);
$pdf->SetX(45);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 6, iconv('utf-8', 'ISO-8859-9', base64_decode(urldecode($_GET["ceptel"]))), 0, 'L');

$pdf->SetY(50);
$pdf->SetX(160);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(35, 6, iconv('utf-8', 'ISO-8859-9', "Teklif No: "), 0, 'L');

$pdf->SetY(50);
$pdf->SetX(178);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(35, 6, iconv('utf-8', 'ISO-8859-9', $_GET["teklif"] . "-0001"), 0, 'L');

$pdf->SetY(55);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(35, 6, iconv('utf-8', 'ISO-8859-9', "FAKS                   :"), 0, 'C');

$pdf->SetY(55);
$pdf->SetX(45);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 6, iconv('utf-8', 'ISO-8859-9', base64_decode(urldecode($_GET["faks"]))), 0, 'L');

$pdf->SetY(65);
$pdf->AddFont('arial','B','arial.php');
$pdf->SetFont("arial","B","10");
$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9',"Firmanızca " . base64_decode(urldecode($_GET["binayeri"])) . " (" . $_GET["enlem"] . " - " . $_GET["boylam"] . ")" ." mevkiinde inşa edilmesi planlanan yatırımınıza ait betonarme prefabrike yapı elemanlarının, BETONEL Prefabrik Beton Elemanları A.Ş. tarafından imal edilip, montaj sahasına nakli ve montajının yapılmasına ilişkin teklifimiz aşağıda takdim edilmiştir. Teklifimizi uygun bulacağınızı umut eder çalışmalarınızda başarılar dileriz."), 0, 'J');

$pdf->SetY(90);
$pdf->AddFont('arial','BU','arial.php');
$pdf->SetFont("arial","BU","11");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "1. İŞİN TARİFİ"), 0, 1);

$pdf->SetY(95);
$pdf->AddFont('arial','','arial.php');
$pdf->SetFont("arial","","10");
$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9',"Akstan aksa " . $_GET["boy"] . "m x " . $_GET["en"] . "m ölçülerindeki yapı " . $_GET["genelHolSayisi"] . " holden meydana gelmektedir. Yapı oturma alanı yaklaşık " . $_GET["boy"]*$_GET["en"] . "m²' dir. Karkas yapının makas altından saha betonu üstüne kadar olan yüksekliği " . $_GET["yukseklik"] . "m' dir."), 0, 'J');

if ($_GET["vincKirisleri"] == 'true'){
	
	$pdf->SetY(105);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "Yapının ". $_GET["vincKirisYeriEn"] ."/". $_GET["vincKirisYeriBoy"] . " aksları arasında +6.70 kotunda max kullanım kapasite 100 ton olan vinç konsolları yer almaktadır. Vinç kirişleri tek vinç yüküne göre tasarlanmıştır. "), 0, 'J');
}


if ($_GET["kompleAraKat"] == 'true' || $_GET["kismiAraKat"] == 'true'){
	
	if($_GET["vincKirisleri"] == 'true'){

		$pdf->SetY(115);
		$pdf->SetFont("arial","","10");
		$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "Yapının ". $_GET["araKatYeriEn"] ."/" . $_GET["araKatYeriBoy"] ." aksları arasında +4.50 kotunda kullanım yükü 350 kg/m² olan arakatlar yer almaktadır."), 0, 'J');
	}
	else{

		$pdf->SetY(105);
		$pdf->SetFont("arial","","10");
		$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "Yapının ". $_GET["araKatYeriEn"] ."/" . $_GET["araKatYeriBoy"] ." aksları arasında +4.50 kotunda kullanım yükü 350 kg/m² olan arakatlar yer almaktadır."), 0, 'J');
	}
}

$pdf->SetY(125);
$pdf->AddFont('arial','BU','arial.php');
$pdf->SetFont("arial","BU","11");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "2. PROJE VE GENEL TEKNİK KONULAR"), 0, 1);

$pdf->SetY(130);
$pdf->AddFont('arial','','arial.php');
$pdf->SetFont("arial","","10");
$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "Firmamız Türkiye Prefabrik Birliği üyesi olup, TSEK118 Öndökümlü betonarme yapı elemanları kalite yönetim sistemi ve TSEN ISO 9001-2008 Kalite Yönetim Sistemi Belgelerine sahiptir. Yapıya ait statik/betonarme hesap ve projeler, zemin etüt raporunun tarafınızdan yazılı olarak şirketimize teslim edilmesini takip eden 15 iş günü içerisinde hazırlanarak, tarafınıza 4 takım olarak teslim edilecektir. Statik ve betonarme hesaplar TS500, TS498, TSEN13369, TS3233, PCI Design Handbook, TS-EN 1991-3 ve Afet Bölgelerinde Yapılacak Yapılar Hakkında Yönetmelik 2007 şartlarına uygun olarak yapılacaktır."), 0, 'J');

if ($_GET["vincKirisleri"] == 'true'){

	$pdf->SetY(160);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "Vinç tekerlek yüklerinin belirlenmesinde vinç üreticisinin vereceği değerler esas alınacaktır. Yapının projesinin hazırlanması aşamasında vinç üreticisinin belirli olmaması halinde Makintek marka vinçlere ait tekerlek yükleri esas alınacaktır."), 0, 'J');
}

$pdf->SetY(180);
$pdf->AddFont('arial','','arial.php');
$pdf->SetFont("arial","","10.5");
$pdf->SetTextColor(0,0,0);
$pdf->Cell(100, 5, iconv('utf-8', 'ISO-8859-9', "Teklifimize esas ön projelendirme hesap değerleri:"), 0, 1);

$pdf->SetY(185);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "Zemin Grubu / Sınıfı"), 0, 1);

$pdf->SetY(185);
$pdf->SetX(115);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "Z3 / C"), 0, 1);

$pdf->SetY(190);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, "Zemin Emniyet Gerilmesi", 0, 1);

$pdf->SetY(190);
$pdf->SetX(115);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "Oz,em = 1.00 kg/cm²"), 0, 1);

$pdf->SetY(195);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"Taşıyıcı sistem davranış katsayısı"), 0, 1);

$pdf->SetY(195);
$pdf->SetX(115);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"R = 3"), 0, 1);

$pdf->SetY(200);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"Bina Önem Katsayısı"), 0, 1);

$pdf->SetY(200);
$pdf->SetX(115);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"I = 1"), 0, 1);

$pdf->SetY(205);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"Deprem Bölgesi"), 0, 1);

$pdf->SetY(205);
$pdf->SetX(115);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', $_GET["depremBolgesi"] . '. Derece'), 0, 1);

if($_GET["depremBolgesi"] == 1){
	
	$pdf->SetY(205);
	$pdf->SetX(132);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "(Ao=0.4)"), 0, 1);
}

else if($_GET["depremBolgesi"] == 2){
	
	$pdf->SetY(205);
	$pdf->SetX(132);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "(Ao=0.3)"), 0, 1);
}

else if($_GET["depremBolgesi"] == 3){
	
	$pdf->SetY(205);
	$pdf->SetX(132);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "(Ao=0.2)"), 0, 1);
}

else{
	
	$pdf->SetY(205);
	$pdf->SetX(132);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "(Ao=0.1)"), 0, 1);
}

$pdf->SetY(210);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"Kar yükü"), 0, 1);

$pdf->SetY(210);
$pdf->SetX(115);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', $_GET["karyuku"] . ' kg/m² (' . $_GET["karBolgesi"] . '. Kar Bölgesi, Rakım: ' . $_GET["rakim"] . ')'), 0, 1);

$pdf->SetY(215);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"Çatı Eğimi"), 0, 1);

$pdf->SetY(215);
$pdf->SetX(115);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"%10"), 0, 1);

$pdf->SetY(220);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"Rüzgar Yükü"), 0, 1);

$pdf->SetY(220);
$pdf->SetX(115);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"50-80 kg/m²"), 0, 1);

$pdf->SetY(225);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"Çatı Kaplaması Ağırlığı"), 0, 1);

$pdf->SetY(225);
$pdf->SetX(115);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"15 kg/m²(sandwich panel yüküne göre)"), 0, 1);

if ($_GET["kompleAraKat"] == 'true' || $_GET["kismiAraKat"] == 'true'){ 
	
	$pdf->SetY(230);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"Arakat kullanım yükü"), 0, 1);

	$pdf->SetY(230);
	$pdf->SetX(115);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',$_GET["arakat"] ." kg/m²"), 0, 1);
}

if ($_GET["vincKirisleri"] == 'true'){

	$pdf->SetY(235);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"Vinç kullanım kapasitesi (max)"), 0, 1);

	$pdf->SetY(235);
	$pdf->SetX(115);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"10 ton"), 0, 1);
}

$pdf->SetY(240);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"Hareketli yük katılım katsayısı"), 0, 1);

$pdf->SetY(240);
$pdf->SetX(115);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"n = 0.3"), 0, 1);

/*
$pdf->SetY(240);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"Güneş Paneli Yükü"), 0, 1);

$pdf->SetY(240);
$pdf->SetX(115);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"kg/m²"), 0, 1);*/

//footer yazı ve resminin opacity'sini yüzde 50 yapmak
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

$pdf->SetAlpha(1);

//2. Sayfa***************************************************
$pdf->SetY(275);
$pdf->SetFont("arial","","11");
$pdf->SetTextColor(0,0,0);
$pdf->Cell(100, 5, "", 0, 1);

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

$pdf->SetY(35);
$pdf->AddFont('arial','BU','arial.php');
$pdf->SetFont("arial","BU","11");
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "3. ÜRETİMDE KULLANILAN MALZEME ÖZELLİKLERİ:"), 0, 1);

$pdf->SetY(45);
$pdf->AddFont('arial','B','arial.php');
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(70, 5, "Karkas Eleman", 1, 'C');

$pdf->SetY(45);
$pdf->SetX(80);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(50, 5, "Beton", 1, 'C');

$pdf->SetY(45);
$pdf->SetX(130);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, "Betonarme Demiri", 1, 'C');

$pdf->SetY(50);
$pdf->AddFont('arial','','arial.php');
$pdf->SetFont("arial","","10");
$pdf->MultiCell(70, 5, iconv('utf-8', 'ISO-8859-9', "Kolonlar, Tali Kirişler, Vinç Kirişleri"), 1, 'C');

$pdf->SetY(50);
$pdf->SetX(80);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9',"C 30"), 1, 'C');

$pdf->SetY(50);
$pdf->SetX(130);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "S420/B420C"), 1, 'C');

$pdf->SetY(55);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(70, 5, "Oluk Kirisleri, Asik Kirisleri-Cati Makasi, TT Plaklar, Arakat Kirisleri", 1, 'C');

$pdf->SetY(55);
$pdf->SetX(80);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 10, iconv('utf-8', 'ISO-8859-9', "C 40"), 1, 'C');

$pdf->SetY(55);
$pdf->SetX(130);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "S420/B420C-Çelik Hasır 270K Düşük Gevşemeli"), 1, 'C');

$he = 140;

$pdf->SetY(210 - $he);
$pdf->AddFont('arial','B','arial.php');
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(180, 5, iconv('utf-8', 'ISO-8859-9',"PREFABRİKE BETONARME YAPI ELEMANLARI"), 1, 1);

$pdf->SetY(215 - $he);
$pdf->AddFont('arial','','arial.php');
$pdf->SetFont("arial","","10");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9',"Aşık Kirişi"), 1, 'C');

$pdf->SetY(215 - $he);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(30, 5, $_GET["asikSayisi"], 1, 'C');

$pdf->SetY(215 - $he);
$pdf->SetX(100);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Arakat Kolonu"), 1, 'C');

$pdf->SetY(215 - $he);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(30, 5, $_GET["arakatKolon"], 1, 'C');

$pdf->SetY(220 - $he);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Oluk Kirişi"), 1, 'C');

$pdf->SetY(220 - $he);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(30, 5, $_GET["olukSayisi"], 1, 'C');

$pdf->SetY(220 - $he);
$pdf->SetX(100);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Tali Kiriş"), 1, 'C');

$pdf->SetY(220 - $he);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(30, 5, $_GET["taliKiris"], 1, 'C');

$pdf->SetY(225 - $he);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Ana Kolon"), 1, 'C');

$pdf->SetY(225 - $he);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(30, 5, $_GET["kolonSayisi"], 1, 'C');

$pdf->SetY(225 - $he);
$pdf->SetX(100);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Arakat Kirişi"), 1, 'C');

$pdf->SetY(225 - $he);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(30, 5, $_GET["arakatKiris"], 1, 'C');

$pdf->SetY(230 - $he);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Rüzgar Kolonu"), 1, 'C');

$pdf->SetY(230 - $he);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(30, 5, $_GET["ruzgarKolonSayisi"], 1, 'C');

$pdf->SetY(230 - $he);
$pdf->SetX(100);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(60, 5, "TT Plak", 1, 'C');

$pdf->SetY(230 - $he);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(30, 5, $_GET["ttPlak"], 1, 'C');

$pdf->SetY(235 - $he);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Çatı Makası"), 1, 'C');

$pdf->SetY(235 - $he);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(30, 5, $_GET["makasSayisi"], 1, 'C');

$pdf->SetY(235 - $he);
$pdf->SetX(100);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "Vinç Kirişi"), 1, 'C');

$pdf->SetY(235 - $he);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(30, 5, $_GET["vincKirisSayisi"], 1, 'C');

$pdf->SetY(105);
$pdf->AddFont('arial','BU','arial.php');
$pdf->SetFont("arial","BU","11");
$pdf->SetTextColor(0, 0, 0);
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "4. FİYATLAR:"), 0, 1);

$pdf->SetY(115);
$pdf->SetFont("arial","B","10");
$pdf->MultiCell(60, 5, "", 1, 'C');

$pdf->SetY(115);
$pdf->SetX(70);
$pdf->AddFont('arial','B','arial.php');
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', "MİKTARI"), 1, 'C');

$pdf->SetY(115);
$pdf->SetX(110);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(50, 5, iconv('utf-8', 'ISO-8859-9', "BİRİM FİYAT"), 1, 'C');

$pdf->SetY(115);
$pdf->SetX(160);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', "TUTARI"), 1, 'C');

$pdf->SetY(120);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "KARKAS"), 1, 'C');

$pdf->SetY(120);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $_GET["boy"]*$_GET["en"] ." m²") , 1, 'C');

$pdf->SetY(120);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, "x" . iconv('utf-8', 'ISO-8859-9', " TL/m²"), 1, 'C');

$pdf->SetY(120);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, "x" . " TL", 1, 'C');

$pdf->SetY(125);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "ARAKAT (350 KG/M²)"), 1, 'C');

if ($_GET["kompleAraKat"] == 'true' || $_GET["kismiAraKat"] == 'true'){
	
	if($_GET["kompleAraKat"] == 'true'){
		
		$pdf->SetY(125);
		$pdf->SetX(70);
		$pdf->SetFont("arial","","10");
		$pdf->MultiCell(40, 5, "0" . iconv('utf-8', 'ISO-8859-9', " m²") , 1, 'C');

		$pdf->SetY(125);
		$pdf->SetX(110);
		$pdf->SetFont("arial","","10");
		$pdf->MultiCell(50, 5, "0" . iconv('utf-8', 'ISO-8859-9', " TL/m²"), 1, 'C');

		$pdf->SetY(125);
		$pdf->SetX(160);
		$pdf->SetFont("arial","","10");
		$pdf->MultiCell(40, 5, "0" . " TL", 1, 'C');
	}
	else if($_GET["kismiAraKat"] == 'true'){
		
		$pdf->SetY(125);
		$pdf->SetX(70);
		$pdf->SetFont("arial","","10");
		$pdf->MultiCell(40, 5, iconv('utf-8', 'ISO-8859-9', $_GET["kismiAraKatHolBoyutu"] * $_GET["kismiAraKatAksBoyutu"] ." m²") , 1, 'C');

		$pdf->SetY(125);
		$pdf->SetX(110);
		$pdf->SetFont("arial","","10");
		$pdf->MultiCell(50, 5, "0" . iconv('utf-8', 'ISO-8859-9', " TL/m²"), 1, 'C');

		$pdf->SetY(125);
		$pdf->SetX(160);
		$pdf->SetFont("arial","","10");
		$pdf->MultiCell(40, 5, "0" . " TL", 1, 'C');
	}
}

else{
	
	$pdf->SetY(125);
	$pdf->SetX(70);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(40, 5, "0" . iconv('utf-8', 'ISO-8859-9', " m²") , 1, 'C');

	$pdf->SetY(125);
	$pdf->SetX(110);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(50, 5, "0" . iconv('utf-8', 'ISO-8859-9', " TL/m²"), 1, 'C');

	$pdf->SetY(125);
	$pdf->SetX(160);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(40, 5, "0" . " TL", 1, 'C');
}

$pdf->SetY(130);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 10, iconv('utf-8', 'ISO-8859-9', "MAX 10 TONLUK VİNÇ KİRİŞİ"), 1, 'C');

$pdf->SetY(130);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 10, $_GET["vincKirisSayisi"] . " Adet" , 1, 'C');

$pdf->SetY(130);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 10, "x" . " TL/ad", 1, 'C');

$pdf->SetY(130);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 10, "x" . " TL", 1, 'C');
/*
$pdf->SetY(140);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "YATAY CEPHE PANELİ"), 1, 'C');

$pdf->SetY(140);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, "x" . iconv('utf-8', 'ISO-8859-9', " m²") , 1, 'C');

$pdf->SetY(140);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, "x" . iconv('utf-8', 'ISO-8859-9', " TL/m²"), 1, 'C');

$pdf->SetY(140);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, "x" . " TL", 1, 'C');

$pdf->SetY(145);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "DÜŞEY CEPHE PANELİ"), 1, 'C');

$pdf->SetY(145);
$pdf->SetX(70);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, "x" . iconv('utf-8', 'ISO-8859-9', " m²") , 1, 'C');

$pdf->SetY(145);
$pdf->SetX(110);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(50, 5, "x" . iconv('utf-8', 'ISO-8859-9', " TL/m²"), 1, 'C');

$pdf->SetY(145);
$pdf->SetX(160);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(40, 5, "x" . " TL", 1, 'C');
*/
$pdf->SetY(140);
$pdf->SetFont("arial","B","11");
$pdf->MultiCell(60, 5, iconv('utf-8', 'ISO-8859-9', "GENEL TOPLAM"), 1, 'R');

$pdf->SetY(140);
$pdf->SetX(70);
$pdf->SetFont("arial","B","10");
$pdf->MultiCell(130, 5, "x" . " TL" , 1, 'R');

$pdf->SetY(160);
$pdf->AddFont('arial','','arial.php');
$pdf->SetFont("arial","","10");
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "Betona gömülü özel plaka ve ankrajların birim fiyatı 4TL/kg dır."), 0, 1);

$pdf->SetY(165);
$pdf->SetFont("arial","B","10");
$pdf->MultiCell(10, 5, "Not:", 0, 1);

$pdf->SetY(165);
$pdf->SetX(17);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(100, 5, iconv('utf-8', 'ISO-8859-9', "Fiyatlarımıza KDV dahil değildir."), 0, 1);

$pdf->SetY(170);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "Fiyat hesaplarında, $demirFiyatTarihdb tarihli www.kardemir.com sitesindeki fiyat listesi baz alınmış olup, inşaat demiri ton fiyatı "), 0, 1);

$pdf->SetY(175);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(100, 5, iconv('utf-8', 'ISO-8859-9', "$demirFiyatdb"), 0, 1);

$pdf->SetY(175);
$pdf->SetX(24);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(100, 5, iconv('utf-8', 'ISO-8859-9', "+ KDV olarak fiyatlara dahil edilmiştir."), 0, 1);


$pdf->SetY(185);
$pdf->AddFont('arial','BU','arial.php');
$pdf->SetFont("arial","BU","11");
$pdf->SetTextColor(0, 0, 0);
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "5. ÖDEME:"), 0, 1);

$pdf->SetY(190);
$pdf->AddFont('arial','','arial.php');
$pdf->SetFont("arial","","10");
$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "KDV'li toplam bedelin yüzde 30'u iş avansı olarak ödenecek, geriye kalan bakiye sözleşme imzasında verilecek olan 30, 60, 90 gün vadeli eşit tutarlı çekler ile yapılacaktır. Çekler sözleşme yapıldığı tarihte Betonel A.Ş.'ye teslim edilecektir. "), 0, 'J');

$pdf->SetY(205);
$pdf->AddFont('arial','BU','arial.php');
$pdf->SetFont("arial","BU","11");
$pdf->SetTextColor(0, 0, 0);
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "6. OPSİYON:"), 0, 1);

$pdf->SetY(210);
$pdf->AddFont('arial','','arial.php');
$pdf->SetFont("arial","","10");
$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "Teklifimiz demir, çimento ve akaryakıt zammına kadar geçerlidir."), 0, 1);

$pdf->SetY(220);
$pdf->AddFont('arial','BU','arial.php');
$pdf->SetFont("arial","BU","11");
$pdf->SetTextColor(0, 0, 0);
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "7. TESLİM SÜRESİ:"), 0, 1);

$pdf->SetY(225);
$pdf->AddFont('arial','','arial.php');
$pdf->SetFont("arial","","10");
$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9',"Sözleşme tarihinde karşılıklı olarak belirlenecektir."), 0, 1);

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

$pdf->SetAlpha(1);

//3. Sayfa*******************************************
$pdf->SetY(275);
$pdf->SetFont("arial","","11");
$pdf->SetTextColor(0,0,0);
$pdf->Cell(100, 5, "", 0, 1);

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

$pdf->SetY(35);
$pdf->AddFont('arial','BU','arial.php');
$pdf->SetFont("arial","BU","11");
$pdf->SetTextColor(0, 0, 0);
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "8. FİYATA DAHİL OLMAYAN İŞLER:"), 0, 1);

$pdf->SetY(45);
$pdf->SetX(20);
$pdf->AddFont('arial','','arial.php');
$pdf->SetFont("arial","","10");
$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "+ Sahanın ve ulaşım yollarının ağır vasıtalarımızın ve vincimizin çalışması için uygun halde bulundurulması."), 0, 1);

$pdf->SetY(50);
$pdf->SetX(20);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "+ Betonarme projeler dışında kalan tüm projelerin yaptırılması. Mimari projelerin statik proje ile olan uyumu."), 0, 1);

$pdf->SetY(55);
$pdf->SetX(20);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "+ Temel projelerinin yapılabilmesi için zemin etüdünün hazırlanması."), 0, 1);

if ($_GET["vincKirisleri"] === 'true'){
	
	$eksi = 0;
	
	$pdf->SetY(60);
	$pdf->SetX(20);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "+ Vinç yürüme yolu ve kirişlere ait kaynakların yapılması."), 0, 1);

	$pdf->SetY(65);
	$pdf->SetX(20);
	$pdf->SetFont("arial","","10");
	$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "+ Cephe panelleri yatay ve düşey ara derz dolgularının yapılması."), 0, 1);
}

else{
	
	$eksi = 10;
}

$pdf->SetY(70 - $eksi);
$pdf->SetX(20);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(180, 5, iconv('utf-8', 'ISO-8859-9', "+ Prefabrike betonarme yapı elemanları dışında kalan diğer inşaat imalatlarının yapılması. (Her türlü yerinde hazırlanan beton işleri, çatı kaplaması, dış cephe kaplaması, mütemadilik ve sürgü donatısı, temellerin yapılması, bağ hatıllarının yapılması, betonarme perdelerin yapılması, boya, badana, merdivenler, zemin ve topping betonları, yağmur oluğu izolasyonu, oluk kenar köşebentleri, yağmur suyu iniş boruları, drenaj işleri, kazı, dolgu, saha betonu altına stabilize serme ve sıkıştırma vb.)"), 0, 'J');

$pdf->SetY(95 - $eksi);
$pdf->SetX(20);
$pdf->SetFont("arial","","10");
$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "+ Bina ruhsat onay ve vize işlemleri ve bunlarla ilgili tüm harç, vergi ve onay masrafları."), 0, 1);

$pdf->SetY(105);
$pdf->AddFont('arial','BU','arial.php');
$pdf->SetFont("arial","BU","11");
$pdf->SetTextColor(0, 0, 0);
$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "9. FİYATA DAHİL OLAN İŞLER:"), 0, 1);

$pdf->SetY(115);
$pdf->SetX(20);
$pdf->AddFont('arial','','arial.php');
$pdf->SetFont("arial","","10");
$pdf->SetTextColor(0, 0, 0);
$pdf->MultiCell(180, 5, iconv('utf-8', 'ISO-8859-9', "+ Yürürlükteki yönetmelik ve standartlara uygun olarak prefabrike betonarme yapının temel ve taşıyıcı sistem projelerinin hazırlanması."), 0, 'J');

$pdf->SetY(125);
$pdf->SetX(20);
$pdf->SetFont("arial","","10");
$pdf->SetTextColor(0, 0, 0);
$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "+ Prefabrike betonarme yapı elemanlarının imali, montaj sahasına nakli ve montajının yapılması."), 0, 1);

$pdf->SetY(130);
$pdf->SetX(20);
$pdf->SetFont("arial","","10");
$pdf->SetTextColor(0, 0, 0);
$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "+ Yağmur oluklarında yağmur suyu borusunun takılması için redüksiyon kullanılacaktır."), 0, 1);

$pdf->SetY(135);
$pdf->SetX(20);
$pdf->SetFont("arial","","10");
$pdf->SetTextColor(0, 0, 0);
$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "+ Manşon, mesnet donatısı"), 0, 1);

$pdf->SetY(145);
$pdf->AddFont('arial','BU','arial.php');
$pdf->SetFont("arial","BU","11");
$pdf->SetTextColor(0, 0, 0);
$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "Bina Tasarımının 3 Boyutlu Gösterimi:"), 0, 'C');

$token = $_GET['token'];

$token = $token - 1;
$token2 = $token - 2;
$token3 = $token - 3;
$token4 = $token - 4;
$token5 = $token - 5;
$token6 = $token - 6;
$token7 = $token - 7;


if (file_exists('images/'.$token)){
	
	$token = $token;
}

else if(file_exists('images/'.$token2)){
	
	$token = $token2;
}

else if(file_exists('images/'.$token3)){
	
	$token = $token3;
}

else if(file_exists('images/'.$token4)){
	
	$token = $token4;
}

else if(file_exists('images/'.$token5)){
	
	$token = $token5;
}

else if(file_exists('images/'.$token6)){
	
	$token = $token6;
}

else if(file_exists('images/'.$token7)){
	
	$token = $token7;
}

else{
	
	$token = $token + 1;
}

$filename = 'images/'.$token.'/2Dimage.png';

if ((file_exists('images/'.$token.'/2Dimage.png')) and (filesize($filename) != 0)){
	
    $pdf->Image('images/'.$token.'/2Dimage.png', 25, 150, -200);
}

else{
	
	$pdf->SetY(180);
	$pdf->SetFont("arial","","11");
	$pdf->SetTextColor(0, 0, 0);
	$pdf->MultiCell(190, 5, iconv('utf-8', 'ISO-8859-9', "3D gösterim oluşturulamadı, lütfen bilgi almak için irtibata geçiniz."), 1, 'C');
}

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

$pdf->SetAlpha(1);

//4. Sayfa**********************************************************

$pdf->SetY(275);
$pdf->SetFont("arial","","11");
$pdf->SetTextColor(0,0,0);
$pdf->Cell(100, 5, "", 0, 1);

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

$pdf->SetY(45);
$pdf->AddFont('arial','','arial.php');
$pdf->SetFont("arial","","11");
$pdf->SetTextColor(0,58,124);
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "BETONEL PREFABRİK;"), 0, 1);

$pdf->Image('presets/tpb.png', 10, 60, -110);

$pdf->SetY(65);
$pdf->Setx(30);
$pdf->SetFont("arial","","11");
$pdf->SetTextColor(0,58,124);
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "Türkiye Prefabrik Birliği Üyesidir."), 0, 1);

$pdf->Image('presets/aja.png', 9, 80, -320);

$pdf->SetY(85);
$pdf->Setx(30);
$pdf->SetFont("arial","","11");
$pdf->SetTextColor(0,58,124);
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "ISO 9001 - 2008 Kalite Yönetim Sistemi"), 0, 1);

$pdf->Image('presets/tsek118.jpg', 10, 105, -220);

$pdf->SetY(105);
$pdf->Setx(30);
$pdf->SetFont("arial","","11");
$pdf->SetTextColor(0,58,124);
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9',"TSE K 118 Ön Dökümlü Betonarme Yapı Elemanları Kalite Yönetim Sistemi"), 0, 1);

$pdf->Image('presets/iso.png', 10, 115, -220);

$pdf->SetY(120);
$pdf->Setx(30);
$pdf->SetFont("arial","","11");
$pdf->SetTextColor(0,58,124);
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "ISO 14001 - 2004 Çevre Yönetimi Sistemi"), 0, 1);

$pdf->Image('presets/ohsas.png', 10, 135, -150);

$pdf->SetY(140);
$pdf->Setx(30);
$pdf->SetFont("arial","","11");
$pdf->SetTextColor(0,58,124);
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "OHSAS 18001 - 2007 İş Sağlığı ve Güvenliği Yönetim Sistemi"), 0, 1);

$pdf->Image('presets/tse.png', 6, 155, -150);

$pdf->SetY(160);
$pdf->Setx(30);
$pdf->SetFont("arial","","11");
$pdf->SetTextColor(0,58,124);
$pdf->MultiCell(200, 5, iconv('utf-8', 'ISO-8859-9', "Türk Standardına Uygunluk Belgelerine sahiptir."), 0, 1);

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

$pdf->SetAlpha(1);
$pdf->SetTextColor(0,0,0);

$pdf->Output('','betonel-teklif.pdf');

?>