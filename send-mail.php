<?php
 
require_once("class.phpmailer.php");

$adsoyad = $_GET["adsoyad"];
$unvan = $_GET["unvan"];
$sirketadi = $_GET["sirketadi"];
$adres = $_GET["adres"];
$ceptel = $_GET["ceptel"];
$cepis = $_GET["cepis"];
$faks = $_GET["faks"];
$email = $_GET["email"];
$boy = $_GET["boy"];
$en = $_GET["en"];
$yukseklik = $_GET["yukseklik"];
$vincliKolonlar = $_GET["vincliKolonlar"];
$vincKirisleri = $_GET["vincKirisleri"];
$vincKirisSayisi = $_GET["vincKirisSayisi"];
$kolonSayisi = $_GET["kolonSayisi"];
$ruzgarKolonSayisi = $_GET["ruzgarKolonSayisi"];
$standSayisi = $_GET["standSayisi"];
$olukSayisi = $_GET["olukSayisi"];
$makasSayisi = $_GET["makasSayisi"];
$asikSayisi = $_GET["asikSayisi"];
$kompleAraKat = $_GET["kompleAraKat"];
$KompleAraKatHolSayisi = $_GET["KompleAraKatHolSayisi"];
$KompleAraKatHolBoyutu = $_GET["KompleAraKatHolBoyutu"];
$kismiAraKat = $_GET["kismiAraKat"];
$kismiAraKatHolSayisi = $_GET["kismiAraKatHolSayisi"];
$kismiAraKatAksSayisi = $_GET["kismiAraKatAksSayisi"];
$kismiAraKatHolBoyutu = $_GET["kismiAraKatHolBoyutu"];
$kismiAraKatAksBoyutu = $_GET["kismiAraKatAksBoyutu"];
$genelHolSayisi = $_GET["genelHolSayisi"];
$vinc = $_GET["vinc"];
$arakat = $_GET["arakat"];
$binayeri = $_GET["binayeri"];
$lat = $_GET["lat"];
$lng = $_GET["lng"];
date_default_timezone_set('Europe/Istanbul');
$date = date("d-m-Y H:i:s");
$dateOnly = date("d-m-Y");
$teklif = date("ym");
$clientip = $_GET["clientip"];
$fabrika = $_GET["fabrika"];

$fabrikauzaklik = $_GET["fabrikauzaklik"];

$vincKirisYeriEn = $_GET["vincKirisYeriEn"];
$vincKirisYeriBoy = $_GET["vincKirisYeriBoy"];
$araKatYeriEn = $_GET["araKatYeriEn"];
$araKatYeriBoy = $_GET["araKatYeriBoy"];
$ttPlak = $_GET["ttPlak"];
$taliKiris = $_GET["taliKiris"];
$arakatKiris = $_GET["arakatKiris"];
$arakatKolon = $_GET["arakatKolon"];
$dateOnlyY = date("Y");
$depremBolgesi = $_GET["depremBolgesi"];
$karyuku = $_GET["karyuku"];
$karBolgesi = $_GET["karBolgesi"];
$rakim = $_GET["rakim"];
$token = $_GET["token"];

$arakatYuku = $_GET["arakatYuku"];

$vincKirisiMetreKup = $_GET["vincKirisiMetreKup"];
$olukMetreKup = $_GET["olukMetreKup"];
$asikMetreKupT = $_GET["asikMetreKupT"];
$makasMetreKup = $_GET["makasMetreKup"];
$kolonMetreKup = $_GET["kolonMetreKup"];
$ttPlakMetreKup = $_GET["ttPlakMetreKup"];

$ongermeHalatiToplam = $_GET["ongermeHalatiToplam"];
$ongermeHalatiKarkas = $_GET["ongermeHalatiKarkas"];
$ongermeHalatiAraKatKiris = $_GET["ongermeHalatiAraKatKiris"];

$ankrajToplam = $_GET["ankrajToplam"];



$servername = ''; //your server
$username = ''; //your server username
$password = ''; //your server pass
$dbname = ''; //your database name


$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){

	die("Bağlantı Hatası: " . $conn->connect_error);
}

$sql = "SELECT d_degeri, d_tarihi FROM degiskenler WHERE d_ismi = 'demir'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

$demirFiyatdb = $row["d_degeri"];

$demirFiyatTarihdb = $row["d_tarihi"];


//fiyat hesabı pdf ine yollamak için databaseden verileri çek.
$sqlHesap = "SELECT d_degeri FROM degiskenler";

$result = $conn->query($sqlHesap);

$i = 0;

if($result->num_rows > 0){
	
	while($row = $result->fetch_assoc()){
		
		$degiskenDegerleri[$i] = $row["d_degeri"];

		$i = $i + 1;
	}
}//4:nakliyat fiyatı <70km - 9:nakliyat fiyatı 70km<x<150km - 10:nakliyat fiyatı 150<

if($fabrikauzaklik <= 70000){
	
	$nakliyatFiyat = $degiskenDegerleri[4];
}
else if($fabrikauzaklik > 70000 && $fabrikauzaklik <= 150000){
	
	$nakliyatFiyat = $degiskenDegerleri[9];
}
else if($fabrikauzaklik > 150000 && $fabrikauzaklik <= 300000){
	
	$nakliyatFiyat = $degiskenDegerleri[10];
}
else{
	
	$nakliyatFiyat = $degiskenDegerleri[10];

}

//sadece karkas fiyatı
$karkasBetonMetreKup = round(($asikMetreKupT + $olukMetreKup + $kolonMetreKup + $makasMetreKup), 2);
$karkasDemirMetreKup = round(($karkasBetonMetreKup * 150), 2);
$karkasBetonMetreKupFiyat = round(($karkasBetonMetreKup * $degiskenDegerleri[1]), 2);
$karkasDemirMetreKupFiyat = round((($karkasDemirMetreKup * $degiskenDegerleri[0]) / 1000), 2);
$karkasBetonIscilikFiyat = round(($karkasBetonMetreKup * $degiskenDegerleri[2]), 2);

$karkasDemirIscilikFiyat = round((($karkasDemirMetreKup * $degiskenDegerleri[3])), 2);
$karkasNakliyatFiyat = ceil($karkasBetonMetreKup * 0.125) * $nakliyatFiyat;

$karkasMontajIscilikFiyat = round(($karkasBetonMetreKup * $degiskenDegerleri[5]), 2);
$karkasBuharKuruFiyat = round(($karkasBetonMetreKup * $degiskenDegerleri[6]), 2);
$ongermeHalatiKarkasFiyat = round(($ongermeHalatiKarkas * $degiskenDegerleri[8]), 2);

$karkasToplamFiyat = round(($karkasBetonMetreKupFiyat + $karkasDemirMetreKupFiyat + $karkasBetonIscilikFiyat + $karkasDemirIscilikFiyat + $karkasNakliyatFiyat + $karkasMontajIscilikFiyat + $karkasBuharKuruFiyat + $ongermeHalatiKarkasFiyat), 2);

//sadece arakat fiyatı (eklenecek: arakatkolonu, tali kiriş, arakat kirişi)
$arakatBetonMetreKup = round($ttPlakMetreKup, 2);
$arakatDemirMetreKup = round(($arakatBetonMetreKup * 150), 2);
$arakatBetonMetreKupFiyat = round(($arakatBetonMetreKup * $degiskenDegerleri[1]), 2);
$arakatDemirMetreKupFiyat = round((($arakatDemirMetreKup * $degiskenDegerleri[0]) / 1000), 2);
$arakatBetonIscilikFiyat = round(($arakatBetonMetreKup * $degiskenDegerleri[2]), 2);

$arakatDemirIscilikFiyat = round((($arakatDemirMetreKup * $degiskenDegerleri[3])), 2);
$arakatNakliyatFiyat = ceil($arakatBetonMetreKup * 0.125) * $nakliyatFiyat;

$arakatMontajIscilikFiyat = round(($arakatBetonMetreKup * $degiskenDegerleri[5]), 2);
$arakatBuharKuruFiyat = round(($arakatBetonMetreKup * $degiskenDegerleri[6]), 2);
$arakatOngermeliHalatFiyat = round(($ongermeHalatiAraKatKiris * $degiskenDegerleri[8]), 2);

$arakatToplamFiyat = round(($arakatBetonMetreKupFiyat + $arakatDemirMetreKupFiyat + $arakatBetonIscilikFiyat + $arakatDemirIscilikFiyat + $arakatNakliyatFiyat + $arakatMontajIscilikFiyat + $arakatBuharKuruFiyat + $arakatOngermeliHalatFiyat), 2);

//vinç kiriş fiyatı
$vincKirisiBetonMetreKup = round($vincKirisiMetreKup, 2);
$vinckirisiDemirMetreKup = round(($vincKirisiBetonMetreKup * 150), 2);
$vinckirisiBetonMetreKupFiyat = round(($vincKirisiBetonMetreKup * $degiskenDegerleri[1]), 2);
$vinckirisiDemirMetreKupFiyat = round((($vinckirisiDemirMetreKup * $degiskenDegerleri[0]) / 1000), 2);
$vinckirisiBetonIscilikFiyat = round(($vincKirisiBetonMetreKup * $degiskenDegerleri[2]), 2);
$vinckirisiDemirIscilikFiyat = round((($vinckirisiDemirMetreKup * $degiskenDegerleri[3]) / 1000), 2);

$vinckirisiNakliyatFiyat = ceil($vincKirisiBetonMetreKup * 0.125) * $nakliyatFiyat;

$vinckirisiMontajIscilikFiyat = round(($vincKirisiBetonMetreKup * $degiskenDegerleri[5]), 2);
$vinckirisiBuharKuruFiyat = round(($vincKirisiBetonMetreKup * $degiskenDegerleri[6]), 2);

$vinckirisiToplamFiyat = round(($vinckirisiBetonMetreKupFiyat + $vinckirisiDemirMetreKupFiyat + $vinckirisiBetonIscilikFiyat + $vinckirisiDemirIscilikFiyat + $vinckirisiNakliyatFiyat + $vinckirisiMontajIscilikFiyat + $vinckirisiBuharKuruFiyat), 2);

$message = str_replace(' ', '+', 'http://localhost/tutorialsPoint/holymoly/create-pdf.php?adsoyad=' .urlencode(base64_encode($adsoyad)) . '&sirketadi=' . urlencode(base64_encode($sirketadi)) . '&ceptel=' . urlencode(base64_encode($ceptel)) . '&faks=' . urlencode(base64_encode($faks)) . '&binayeri=' . urlencode(base64_encode($binayeri)) . '&boy=' . $boy . '&en=' . $en . '&yukseklik=' . $yukseklik . '&vincKirisleri=' . $vincKirisleri . '&asikSayisi=' . $asikSayisi . '&olukSayisi=' . $olukSayisi . '&kolonSayisi=' . $kolonSayisi . '&ruzgarKolonSayisi=' . $ruzgarKolonSayisi . '&makasSayisi=' . $makasSayisi . '&vincKirisSayisi=' . $vincKirisSayisi . '&genelHolSayisi=' . $genelHolSayisi . '&kompleAraKat=' . $kompleAraKat . '&kismiAraKat=' . $kismiAraKat . '&KompleAraKatHolSayisi=' . $KompleAraKatHolSayisi . '&KompleAraKatHolBoyutu=' . $KompleAraKatHolBoyutu . '&kAKatHolByt=' . $kismiAraKatHolBoyutu . '&kAKatAksByt=' . $kismiAraKatAksBoyutu . '&enlem=' . $lat . '&boylam=' . $lng . '&vincKirisYeriEn=' . $vincKirisYeriEn . '&vincKirisYeriBoy=' . $vincKirisYeriBoy . '&araKatYeriEn='. $araKatYeriEn . '&araKatYeriBoy=' . $araKatYeriBoy . '&ttPlak=' . $ttPlak . '&taliKiris=' . $taliKiris . '&arakatKiris=' . $arakatKiris . '&arakatKolon=' . $arakatKolon . '&depremBolgesi=' . $depremBolgesi . '&karyuku=' . $karyuku . '&karBolgesi=' . $karBolgesi . '&rakim=' . $rakim . '&token=' . $token . '&arakat=' . $arakat . '&demirFiyatdb=' . $demirFiyatdb . '&demirFiyatTarihdb=' . $demirFiyatTarihdb . '&date=' . $dateOnly . '&teklif=' . $teklif . '&arakatYuku=' . $arakatYuku . '&karkasToplamFiyat=' . $karkasToplamFiyat . '&vinckTFiyat=' . $vinckirisiToplamFiyat . '&aFiyat=' . $arakatToplamFiyat . '&vinc=' . $vinc);

$messageHesap = str_replace('', '+', 'http://localhost/tutorialsPoint/holymoly/create-pdf-hesap.php?demirFiyat=' . $degiskenDegerleri[0] . '&betonFiyat=' . $degiskenDegerleri[1] . '&betonIscilik=' . $degiskenDegerleri[2] . '&demirIscilik=' . $degiskenDegerleri[3] . '&nakliyat=' . $nakliyatFiyat . '&montajIscilik=' . $degiskenDegerleri[5] . '&buharKuru=' . $degiskenDegerleri[6] . '&ankraj=' . $degiskenDegerleri[7]  . '&ongermeHalatFiyati=' . $degiskenDegerleri[8] . '&sirketadi=' . urlencode(base64_encode($sirketadi)) . '&adsoyad=' . urlencode(base64_encode($adsoyad)) . '&ceptel=' . urlencode(base64_encode($ceptel)) . '&date=' . $dateOnly . '&vincKirisiMetreKup=' . $vincKirisiMetreKup . '&olukMetreKup=' . $olukMetreKup . '&asikMetreKupT=' . $asikMetreKupT . '&makasMetreKup=' . $makasMetreKup . '&kolonMetreKup=' . $kolonMetreKup . '&ongermeHalatiToplam=' . $ongermeHalatiToplam . '&ankrajToplam=' . $ankrajToplam . '&arakatYuku=' . $arakatYuku . '&ttPlakMetreKup=' . $ttPlakMetreKup);

//veritabanına müşteri bilgilerini yazdırma----->

if($vincKirisleri == 'true'){
	
	if($kompleAraKat == 'true' || $kismiAraKat == 'true'){//v+a
		
		$t = $karkasToplamFiyat + $vinckirisiToplamFiyat + $arakatToplamFiyat;
	}
	else{
		
		$t = $karkasToplamFiyat + $vinckirisiToplamFiyat;
	}
}
else{
	
	if($kompleAraKat == 'true' || $kismiAraKat == 'true'){
		
		$t = $karkasToplamFiyat + $arakatToplamFiyat;
	}
	
	else{
		
		$t = $karkasToplamFiyat;
	}
}

//toplam fiyatı bulma ->
$genelGiderlerFiyat = round(($t * 0.1), 2);

$t = $t + $genelGiderlerFiyat;

if($t < 100000){
	
	$karOrani = 25;
	$kar = ($t * $karOrani) / 100;
}

else if($t >= 100000 && $t < 200000){
	
	$karOrani = 20;
	$kar = ($t * $karOrani) / 100;
}

else if($t >= 200000 && $t < 500000){
	
	$karOrani = 15;
	$kar = ($t * $karOrani) / 100;
}

else if($t >= 500000){
	
	$karOrani = 10;
	$kar = ($t * $karOrani) / 100;
}

$t = $t + $kar;

$t = money_format('%i', $t);
//<- toplam fiyat bulma

//doğru formatlı date yollama ->
$dateDb = date("Y-m-d");
//<- doğru formatlı date yollama

$servername = "mysql.hostinger.web.tr";
$username = "u786273580_cv";
$password = "ahmet3899";
$dbname = "u786273580_dbcv";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	
	die("Bağlantı sağlanamadı: " . $conn->connect_error);
}

$sql = "INSERT INTO musteri (musteri_adi, musteri_firma, musteri_tel, musteri_eposta, teklif_fiyat, teklif_tarih) VALUES ('$adsoyad', '$sirketadi', '$ceptel', '$email', '$t' ,'$dateDb')";

if ($conn->query($sql) === TRUE) {
	
    //echo "New record created successfully";
} else {
	
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//<-----veritabanına müşteri bilgilerini yazdırma

$message = wordwrap($message, 1500, "\n", true);
$messageHesap = wordwrap($messageHesap, 1500, "\n", true);


$mail = new PHPMailer();

$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Mailer = "smtp";
$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = 465;
$mail->SMTPAuth = true; // SMTP auth
$mail->Username = ""; // SMTP username
$mail->Password = ""; // SMTP password


$mail->setFrom('', 'Betonel A.Ş.');
$mail->AddAddress($_GET["email"]);
$mail->addReplyTo("", "");


$mail->Subject = "Betonel E-Posta Dogrulama Maili";
$mail->AddEmbeddedImage('presets/mail-footer.png', 'mail-footer');
$mail->AltBody = "BETONEL Teklif PDF'ine ulaşmak için linki kopyalayınız ve tarayıcınıza kopyalayınız:    $message";
				
$mail->Body =
		"<head>

			<meta charset='UTF-8' name='viewport' content='width=device-width, initial-scale=1.0'>
		  	<meta name='theme-color' content='#F0FFFF'/>

			<style>
				div.container{
				
					width: 100%;
					border: 1px solid gray;
					padding-left:5em;
				}
			</style>
		</head>
			<body>
				<div class=\"container\">
					<br> <h4> Merhaba Sayın  <i>$adsoyad</i>, <h4>
					<h4>BETONEL Teklif PDFine ulaşmak için lütfen <a href= $message>tıklayınız.</a></h4><br><br><br><br>
				</div>
				<footer>
					<img src=\"cid:mail-footer\" alt=\"Betonel A.Ş.\" style=\"width:1326px;height:195;\">
				</footer>
			</body>";
				
$mail->IsHTML(true);
$mail->WordWrap = 50;
//!$mail->Send()
if(!$mail->Send()){

		echo '<head>
				<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">

  				<title>Doğrulama Maili Bilgi Ekranı</title>
				<style>
					div.container{

						width: 80%;
						height: 100%;
						border: 5px solid gray;
						margin: 0 auto;
					}

					header, footer{

						padding: 1em;
						color: white;
						background-color: gray;
						clear: left;
						text-align: center;
					}

					article{

						height: 70%;
						margin-left: 170px;
						border-left: 0px solid gray;
						padding: 1em;
						overflow: hidden;
					}
					
					footer{
					
						font-size:12px;
						height:30px;
						padding-top:11px;
					}
					
					.btnGeri{
		
						background-color: #2E9AFE;
						border: none;
						color: white;
						padding: 15px 32px;
						text-align: justify;
						text-decoration: underline;
						font-size: 14px;
						margin: 4px 2px;
						cursor: pointer;
					}
				</style>
			</head>
			<body>

				<div class="container">

				<header>
				   <h1>Betonel Teklif Alma</h1>
				</header>

				<article>
				  <p><img src="presets/logo.png" alt="Betonel A.Ş." style="width:150px;height:75;"> <br>Merhaba Sayın '. $adsoyad . ';<br><br> <strong><i>' .$email. '</i></strong> e-posta adresine doğrulama maili yollanamadı. Lütfen aşağıdaki butona tıklayıp bir önceki sayfaya giderek bilgilerinizi kontrol ediniz.<br><br>
				<head>
					<script>
						function geriDon(){

							window.history.back()
						}
					</script>
				</head>
			<body>

			<input class="btnGeri" type="button" onclick="geriDon()" value="Değişiklikler için Geri Dön">
			
			</body>
	
		</p>
			</article>

			<footer> 
				BETONEL AŞ. Copyright &copy;' . $dateOnlyY .' .All rights reserved.
			</footer>			
			</div>
			</body>';
}

else{
	
	echo '<head>
			<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">

  			<title>Doğrulama Maili Bilgi Ekranı</title>
			<style>
				div.container{

					width: 80%;
					height: 100%;
					border: 5px solid gray;
					margin: 0 auto;
				}

				header, footer{

					padding: 1em;
					color: white;
					background-color: gray;
					clear: left;
					text-align: center;
				}

				article{

					height: 70%;
					margin-left: 170px;
					border-left: 0px solid gray;
					padding: 1em;
					overflow: hidden;
				}
				footer{
					
						font-size:12px;
						height:30px;
						padding-top:11px;
				}
			</style>
		</head>
			<body>

				<div class="container">

				<header>
				   <h1>Betonel Teklif Alma</h1>
				</header>

				<article>

				  <p><img src="presets/logo.png" alt="Betonel A.Ş." style="width:150px; height:75;"> <br> <br> Merhaba Sayın '. $adsoyad . '<strong><i>; <br> <br>' .$email. '</i></strong> e-posta adresine bir doğrulama maili gönderildi, mailinizdeki linke tıklayarak teklif pdfine ulaşabilirsiniz.</p>
				</article>

				<footer> BETONEL AŞ. Copyright &copy;' . $dateOnlyY .' .All rights reserved.</footer>

				</div>
			</body>';
}

//2. mail - şirkete, müşteri bilgilerinin iletildiği mail- kimler teklif almak istemiş tüm bilgileri yolla.

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Mailer = "smtp";
$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = 465;
$mail->SMTPAuth = true; // SMTP auth
$mail->Username = ""; // SMTP username
$mail->Password = ""; // SMTP password 

$mail->setFrom('', '');
$mail->AddAddress("");
$mail->addReplyTo("", "");

$mail->Subject = "Betonel Müşteri Teklif Bilgileri";
$mail->AddEmbeddedImage('presets/mail-footer.png', 'mail-footer');
$mail->AltBody = "BETONEL Teklif PDF'ine ulaşmak için linki kopyalayınız ve tarayıcınıza yapıştırınız:    $message <br> Betonel Fiyat Hesabı için bu linki kopyalayıp tarayıcınıza kopyalayanız: $messageHesap <br> Bu maili gelişmiş bir tarayıcıda açarsanız, asıl halini görebilirsiniz.";

$mail->Body = 
		"<head> 

			<meta charset='UTF-8' name='viewport' content='width=device-width, initial-scale=1.0'>

			<style>
				div.container{

						width: 100%;
						border: 1px solid gray;	
						padding-left:5em;
				}
				
				table, th, td{
				
					border: 1px solid black;
					padding: 5px;
				}
				
				td{
				
					text-align: left;
				}
				
				table{
				
					border-spacing: 5px;
				}
			</style>
		</head>
				
		<body> 
			<table style=\"width:100%\">
			  <tr>
				<th colspan=\"2\">Teklif Alan Müşteri Bilgileri</th>
			  </tr>
			  <tr>
				<td>Müşteri Ad-Soyadı:</td>
				<td>$adsoyad</td>
			  </tr>

			  <tr>
				<td>Müşteri Ünvanı:</td>
				<td>$unvan</td>
			  </tr>

			  <tr>
				<td>Şirket Adı:</td>
				<td>$sirketadi</td>
			  </tr>

			  <tr>
				<td>Şirket Adresi:</td>
				<td>$adres</td>
			  </tr>

			  <tr>
				<td>Cep Telefonu:</td>
				<td>$ceptel</td>
			  </tr>

			  <tr>
				<td>İş Telefonu:</td>
				<td>$cepis</td>
			  </tr>
			  <tr>
				<td>Faks Numarası:</td>
				<td>$faks</td>
			  </tr>
			  <tr>
				<td>E-Posta Adresi:</td>
				<td>$email</td>
			  </tr>
			  <tr>
				<td>Teklif alınan binaya en yakın fabrika:</td>
				<td>$fabrika</td>
			  </tr>
			  <tr>
				<td>Teklif Tarih ve Saati:</td>
				<td>$date</td>
			  </tr>
			  <tr>
				<td>Müşterinin IP Adresi:</td>
				<td>$clientip</td>
			  </tr>
			</table>
				<div class=\"container\">
				
					<br> <h4>Müşterinin aldığı PDF dosyasına ulaşmak için <a href= $message>tıklayınız.</a></h4> <br> 
					<h4>Hesap PDF dosyasına ulaşmak için tıklayınız: <a href= $messageHesap>Fiyat Hesabı PDF</a></h4>
					<br> <br> <br>
				</div>
				<footer>
					<img src=\"cid:mail-footer\" alt=\"Betonel A.Ş.\" style=\"width:1326px;height:195;\">
				</footer>
		</body>";

$mail->IsHTML(true);
$mail->WordWrap = 50;
//!$mail->Send()
if(!$mail->Send()){
'<html>
		<header>

			<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">

			<style>
				a{
				
					float: center;
					text-color: black;
					width: 100px;
					height: 50px;
				}
				table{
				
					padding: 5px;
				}
			</style>
			<body>
				<div>
					<br>Bilgi maili yollanamadı. Olasılık bir: müşteri maili yanlış. olasılık iki: server maili yollayamadı. olasılık üç: sever müşteri ipsini çok fazla denemeden dolayı blokladı.
				</div>
			</body>
		</header>
	</html>';
}

else{
	
}

$conn->close();
?>

