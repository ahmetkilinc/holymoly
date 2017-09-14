<?php

$adsoyad = $_POST["adsoyad"];
$unvan = $_POST["unvan"];
$sirketadi = $_POST["sirketadi"];
$adres = $_POST["adres"];
$ceptel = $_POST["ceptel"];
$cepis = $_POST["cepis"];
$faks = $_POST["faks"];
$email = $_POST["email"];
$boy = $_POST["boy"];
$en = $_POST["en"];
$yukseklik = $_POST["yukseklik"];
$vincliKolonlar = $_POST["vincliKolonlar"];
$vincKirisleri = $_POST["vincKirisleri"];
$vincKirisSayisi = $_POST["vincKirisSayisi"];
$kolonSayisi = $_POST["kolonSayisi"];
$ruzgarKolonSayisi = $_POST["ruzgarKolonSayisi"];
$standSayisi = $_POST["standSayisi"];
$olukSayisi = $_POST["olukSayisi"];
$makasSayisi = $_POST["makasSayisi"];
$asikSayisi = $_POST["asikSayisi"];
$kompleAraKat = $_POST["kompleAraKat"];
$KompleAraKatHolSayisi = $_POST["KompleAraKatHolSayisi"];
$KompleAraKatHolBoyutu = $_POST["KompleAraKatHolBoyutu"];
$kismiAraKat = $_POST["kismiAraKat"];
$kismiAraKatHolSayisi = $_POST["kismiAraKatHolSayisi"];
$kismiAraKatAksSayisi = $_POST["kismiAraKatAksSayisi"];
$kismiAraKatHolBoyutu = $_POST["kismiAraKatHolBoyutu"];
$kismiAraKatAksBoyutu = $_POST["kismiAraKatAksBoyutu"];
$genelHolSayisi = $_POST["genelHolSayisi"];
$vinc = $_POST["vinc"];
$arakat = $_POST["arakat"];
$binayeri = $_POST["binayeri"];
$lat = $_POST["lat"];
$lng = $_POST["lng"];
date_default_timezone_set('Europe/Istanbul');
$date = date("d-m-Y H:i:s");
$clientip = $_POST["clientip"];
$fabrika = $_POST["fabrika"];
$gercekrakim = $_POST["gercekrakim"];
$vincKirisYeriEn = $_POST["vincKirisYeriEn"];
$vincKirisYeriBoy = $_POST["vincKirisYeriBoy"];
$araKatYeriEn = $_POST["araKatYeriEn"];
$araKatYeriBoy = $_POST["araKatYeriBoy"];
$ttPlak = $_POST["ttPlak"];
$taliKiris = $_POST["taliKiris"];
$arakatKiris = $_POST["arakatKiris"];
$arakatKolon = $_POST["arakatKolon"];
$dateOnlyY = date("Y");


	if(isset($_POST['g-recaptcha-response'])){
		
    	$captcha = $_POST['g-recaptcha-response'];
	}

	if(!$captcha){
		
		echo '<head>
				<meta charset="UTF-8">
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
						display: grid;
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
				  <p><img src="presets/logo.png" alt="Betonel A.Ş." style="width:150px;height:75;"> <br>Merhaba Sayın <i>'. $adsoyad . '</i>;<br><br>Lütfen aşağıdaki butona tıklayıp bir önceki sayfaya giderek <strong> ROBOT </strong> olmadığınızı doğrulayınız.<br><br>
				<head>
					<script>
						function geriDon(){

							window.history.back()
						}
					</script>
				</head>
			<body>

			<button onclick="geriDon()">Değişiklikler için Geri Dön.</button>
			
			</body>
	
		</p>
			</article>
			<footer> 
				BETONEL AŞ. Copyright &copy;' . $dateOnlyY .' .All rights reserved.
			</footer>
			
			</div>
			</body>';
		exit;
	}

	$kontrol = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lcx7ywUAAAAAG-g5z_Jl4TpYwkkoqztJK1H1Elj&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);

	if($kontrol === false){

		echo '<h2>Spam Gönderi!</h2>';
	}

	else{

		//echo '<h2>Bütün koşullar sağlandı. Form sorunsuz çalıştı.</h2>';
	}

echo '<html>

	<head>
	<style>
	
		#link {color: #E45635;display:block;font: 14px "Helvetica Neue", Helvetica, Arial, sans-serif;text-align:center; text-decoration: none;}
		#link:hover {color: #CCCCCC}

		#link, #link:hover {-webkit-transition: color 0.5s ease-out;-moz-transition: color 0.5s ease-out;-ms-transition: color 0.5s ease-out;-o-transition: color 0.5s ease-out;transition: color 0.5s ease-out;}

/** BEGIN CSS **/
        body{
		
			background: #ADD8E6;
		}
        @keyframes rotate-loading{
		
            0%  {transform: rotate(0deg);-ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -moz-transform: rotate(0deg);}
            100% {transform: rotate(360deg);-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); -moz-transform: rotate(360deg);}
        }

        @-moz-keyframes rotate-loading{
		
            0%  {transform: rotate(0deg);-ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -moz-transform: rotate(0deg);}
            100% {transform: rotate(360deg);-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); -moz-transform: rotate(360deg);}
        }

        @-webkit-keyframes rotate-loading{
		
            0%  {transform: rotate(0deg);-ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -moz-transform: rotate(0deg);}
            100% {transform: rotate(360deg);-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); -moz-transform: rotate(360deg);}
        }

        @-o-keyframes rotate-loading{
		
            0%  {transform: rotate(0deg);-ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -moz-transform: rotate(0deg);}
            100% {transform: rotate(360deg);-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); -moz-transform: rotate(360deg);}
        }

        @keyframes rotate-loading{
		
            0%  {transform: rotate(0deg);-ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -moz-transform: rotate(0deg);}
            100% {transform: rotate(360deg);-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); -moz-transform: rotate(360deg);}
        }

        @-moz-keyframes rotate-loading{
		
            0%  {transform: rotate(0deg);-ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -moz-transform: rotate(0deg);}
            100% {transform: rotate(360deg);-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); -moz-transform: rotate(360deg);}
        }

        @-webkit-keyframes rotate-loading{
		
            0%  {transform: rotate(0deg);-ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -moz-transform: rotate(0deg);}
            100% {transform: rotate(360deg);-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); -moz-transform: rotate(360deg);}
        }

        @-o-keyframes rotate-loading{
		
            0%  {transform: rotate(0deg);-ms-transform: rotate(0deg); -webkit-transform: rotate(0deg); -o-transform: rotate(0deg); -moz-transform: rotate(0deg);}
            100% {transform: rotate(360deg);-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); -o-transform: rotate(360deg); -moz-transform: rotate(360deg);}
        }

        @keyframes loading-text-opacity{
		
            0%  {opacity: 0}
            20% {opacity: 0}
            50% {opacity: 1}
            100%{opacity: 0}
        }

        @-moz-keyframes loading-text-opacity{
		
            0%  {opacity: 0}
            20% {opacity: 0}
            50% {opacity: 1}
            100%{opacity: 0}
        }

        @-webkit-keyframes loading-text-opacity{
		
            0%  {opacity: 0}
            20% {opacity: 0}
            50% {opacity: 1}
            100%{opacity: 0}
        }

        @-o-keyframes loading-text-opacity{
		
            0%  {opacity: 0}
            20% {opacity: 0}
            50% {opacity: 1}
            100%{opacity: 0}
        }
		
        .loading-container,
        .loading{
		
            height: 200px;
            position: relative;
            width: 200px;
            border-radius: 100%;
        }


        .loading-container{
		
			margin: 200px auto 
		}

        .loading{
		
            border: 10px solid transparent;
            border-color: transparent #0000FF transparent #0000FF;
            -moz-animation: rotate-loading 1.5s linear 0s infinite normal;
            -moz-transform-origin: 50% 50%;
            -o-animation: rotate-loading 1.5s linear 0s infinite normal;
            -o-transform-origin: 50% 50%;
            -webkit-animation: rotate-loading 1.5s linear 0s infinite normal;
            -webkit-transform-origin: 50% 50%;
            animation: rotate-loading 1.5s linear 0s infinite normal;
            transform-origin: 50% 50%;
        }

        .loading-container:hover .loading{
		
            border-color: transparent #8B0000 transparent #8B0000;
        }
        .loading-container:hover .loading,
        .loading-container .loading{
		
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }

        #loading-text{
		
            -moz-animation: loading-text-opacity 3s linear 0s infinite normal;
            -o-animation: loading-text-opacity 3s linear 0s infinite normal;
            -webkit-animation: loading-text-opacity 3s linear 0s infinite normal;
            animation: loading-text-opacity 3s linear 0s infinite normal;
            color: #0000FF;
            font-family: "Helvetica Neue, "Helvetica", ""arial";
            font-size: 20px;
            font-weight: bold;
            margin-top: 90px;
			margin-left: 10px;
            opacity: 0;
            position: absolute;
            text-align: center;
            text-transform: uppercase;
            top: 0;
            width: 200px;
        }
		
	p{
	
		position: absolute;
		left: 38%;
		top: 18%;
	}
	
	
	</style>
	</head>

<body>

<div class="loading-container">
    <div class="loading"></div>
    <div id="loading-text">Betonel A.Ş.</div>
</div>

<p align="center" >Doğrulama Mailiniz Gönderiliyor, Lütfen Bekleyin.</p>


<p id="depremBolgeleri"></p>

<script>

	var iller = {

		adana : 2,
		adıyaman : 2,
		afyon : 2,
		ağrı : 2,
		aksaray : 5,
		amasya : 1,
		ankara : 4,
		antalya : 2,
		ardahan : 2,
		artvin : 3,
		aydın : 1,
		balıkesir : 1,
		bartın : 1,
		batman : 2,
		bayburt : 3,
		bilecik : 1,
		bingöl : 1,
		bitlis : 1,
		bolu : 1,
		burdur : 1,
		bursa : 1,
		çanakkale : 1,
		çankırı : 1,
		çorum : 2,
		denizli : 1,
		diyarbakır : 2,
		edirne : 4,
		elazığ : 2,
		erzincan : 1,
		erzurum : 2,
		eskişehir : 2,
		gaziantep : 3,
		giresun : 4,
		gümüşhane : 3,
		hakkari : 1,
		hatay : 1,
		içel : 3,
		mersin : 3,
		ığdır : 2,
		ısparta : 1,
		istanbul : 1,
		izmir : 1,
		kahramanmaraş : 1,
		karabük : 1,
		karaman : 5,
		kars : 2,
		kastamonu : 1,
		kayseri : 3,
		kilis : 3,
		kırıkkale : 1,
		kırklareli : 4,
		kırşehir : 1,
		kocaeli : 1,
		konya : 4,
		kütahya : 2,
		malatya : 1,
		manisa : 1,
		mardin : 3,
		muğla : 1,
		muş : 1,
		nevşehir : 3,
		niğde : 4,
		ordu : 3,
		rize : 4,
		sakarya : 1,
		samsun : 2,
		siirt : 1,
		sinop : 4,
		sivas : 3,
		şanlıurfa : 3,
		şırnak : 2,
		tekirdağ : 2,
		tokat : 1,
		trabzon : 4,
		tunceli : 2,
		uşak : 2,
		van : 2,
		yalova : 1,
		yozgat: 3,
		zonguldak: 2
	};

	var adana = {

		Aladağ : 3,
		Bahçe : 1,
		Ceyhan : 2,
		Kösreli : 2,
		Sağkaya : 2,
		Düziçi : 1,
		Böcekli : 2,
		Feke : 4,
		Mansurlu : 4,
		İmamoğlu : 3,
		Kadirli : 3,
		Sumbaz : 3,
		Karaisaalı : 3,
		Çatalan : 3,
		Karataş : 2,
		Tuzla : 2,
		Kozan : 3,
		Gazi : 2,
		Hacıbeyli : 2,
		Tepecikören : 3,
		Osmaniye : 1,
		Kaypak : 1,
		Tecirli : 2,
		Toprakkale : 1,
		Yarpuz : 1,
		Pozantı : 3,
		Kamışlı : 3,
		Saimbeyli : 4,
		Seyhan : 2,
		Küçükdikilibel : 3,
		Turfanbeyli : 4,
		Yumurtalık : 1,
		Kaldırım : 2,
		Yeşilköy : 2,
		Zeytinbeyli : 2,
		Yüreğir : 2,
		Doğankent : 2,
		Yakapınar : 2
	};

	var adıyaman = {

		Yaylakonak : 1,
		Akpınar : 2,
		Bağpınar : 2,
		Koçali : 1,
		Kuyucuk : 1,
		Besni : 2,
		Çakırhöyük : 2,
		Kızılin : 2,
		Şuvarlı : 2,
		Şambayat : 2,
		Çelikhan : 1,
		Gerger : 1,
		Taraksu : 1,
		Gölbaşı : 1,
		Belören : 1,
		Harmanlı : 1,
		Kahta : 2,
		Bölükyayla : 1,
		Akıncılar : 2,
		Damlacık : 1,
		Narince : 1,
		Samsat : 2,
		Sincik : 1,
		Yarpuzlu : 1,
		Tut : 1
	};

	var afyon = {

		Işıklar : 1,
		Başmakçı : 1,
		Bayat : 2,
		Bolvadin : 1,
		Büyükkarabağ : 2,
		Dişli : 2,
		Kemerkaya : 2,
		Özburun : 2,
		Çay : 1,
		Çobanlar : 1,
		Dazkırı : 1,
		Dinar : 1,
		Dombayova : 1,
		Haydarlı : 1,
		Emirdağ : 2,
		Davulga : 2,
		Aşağıpiribeyli : 3,
		Ümraniye : 2,
		Evciler : 1,
		Hocalar : 2,
		İhsaniye : 2,
		İscehisar : 2,
		Kızılören : 1,
		Sandıklı : 1,
		Kızık : 2,
		Sorkun : 2,
		Karadirek : 2,
		Sincanlı : 2,
		Sultandağı : 1,
		Şuhut : 1
	};

	var ağrı = {

		Cumaçay : 2,
		Murat : 2,
		Diyadin : 2,
		Doğubeyazıt : 2,
		Suluçam : 2,
		Eleşkirt : 2,
		Tahir : 2,
		Hamur : 2,
		Patnos : 1,
		Dedeli : 1,
		Doğansu : 1,
		Sansu : 1,
		Taşlıçay : 2,
		Tutak : 2
	};

	var aksaray = {

		Bağlıkaya : 4,
		Topkaya : 4,
		Acıpınar : 4,
		Sultanhanı : 5,
		Taşpınar : 5,
		Yeşilova : 4,
		Ağaçören : 2,
		Eşkil : 4,
		Eşmekaya : 5,
		Gülağaç : 4,
		Demirci : 5,
		Güzelyurt : 5,
		Ortaköy : 3,
		Çiftevi : 2,
		Harmandalı : 2,
		Balcı : 2,
		Sarıyahşi : 2
	};

	var amasya = {

		Akdağ : 1,
		Doğantepe : 1,
		Ezinepazarı : 1,
		Göynücek : 1,
		Gediksaray : 1,
		Gümüşhacıköy : 1,
		Saraycık : 1,
		Hamamözü : 1,
		Merzifon : 1,
		Alıcık : 1,
		Sarıbuğday : 1,
		Suluova : 1,
		Taşova : 1,
		Destek : 1,
		Esençay : 1,
		Tekke : 1
	};

	var ankara = {

		Akyurt : 3,
		Altındağ:4,
		Altınova:3,
		Ayaş:4,
		Bala:2,
		Kesikköprü	:1,
		Karali:3,
		Beypazarı:3,
		Karaşar:2,
		Kırbaşı:4,
		Uruş:2,
		Çamlıdere:1,
		Peçenek:1,
		Çankaya:4,
		Çubuk:3,
		Sirkeli:3,
		Elmadağ:2,
		Hasanoğlan:3,
		Lalahan:3,
		Yeşildere:3,
		Etimesgut:4,
		Evren:1,
		Gölbaşı:4,
		Karagedik:3,
		Selametli:3,
		Güdül:3,
		Haymana:4,
		İkizce:4,
		Yenice:4,
		Kalecik:3,
		Çandır:3,
		Hasayaz:3,
		Kazan:3,
		Keçiören:4,
		Sarayköy:3,
		Bağlum:4,
		Kızılcahamam:2,
		Çeltikli:2,
		Güven:1,
		Pazar:2,
		Mamak:4,
		Kutludüğün:3,
		Nallıhan:2,
		Beydili:2,
		Çayırhan:3,
		Polatlı:4,
		Temelli:4,
		Yenimehmetli:4,
		Sincan:4,
		Yenikent:4,
		Şereflikoçhisar:2,
		Çalören:3,
		Yenimahalle:4
	};

	var antalya = {

		Aksu : 2,
		Çakırlar : 2,
		Dağ : 2,
		Döşemealtı : 2,
		Akseki : 3,
		Cevizli : 3,
		Geriş : 3,
		Güzelsu : 3,
		Alanya : 4,
		Avsallar : 3,
		Konaklı : 3,
		Okurcalar : 3,
		Payallar : 3,
		Türkler : 3,
		Demirtaş : 4,
		Elmalı : 2,
		Akçay : 2,
		Gölova : 2,
		Finike : 1,
		Gazipaşa : 4,
		Gündoğmuş : 4,
		Güzelbağ : 3,
		Köprülü : 4,
		İbradi : 3,
		Kale : 1,
		Kaş : 1,
		Kalkan : 1,
		Kemer : 1,
		Korkuteli : 2,
		Bozova : 1,
		Kızılcadağ : 1,
		Kumluca : 1,
		Altınyaka : 2,
		Manavgat : 2,
		Başkonak : 2,
		Taşağıl : 2,
		Serik : 2,
		Gebiz : 2
	};

	var ardahan = {

		Hasköy : 2,
		Yalnızçam : 2,
		Çıldır : 2,
		Doğruyol : 2,
		Kurtkale : 2,
		Damal : 2,
		Göle : 2,
		Çayırbaşı : 2,
		Hanak : 2,
		Posof : 3,
		Eminbey : 3
	};

	var artvin = {

		Ortaköy : 3,
		Zeytinlik : 3,
		Ardanuç : 3,
		Aşağıırmaklar : 3,
		Arhavi : 4,
		Ortacalar : 4,
		Borçka : 4,
		Camili : 4,
		Muratlı : 4,
		Hopa : 4,
		Kemalpaşa : 4,
		Murgul : 4,
		Şavşat : 3,
		Meydancık : 3,
		Veliköy : 3,
		Yusufeli : 3,
		Demirkent : 3,
		Kılıçkaya : 3,
		Öğdan : 3,
		Sarıgöl : 3
	};

	var aydın = {

		all : 1
	};

	var balıkesir = {

		all : 1
	};

	var bartın = {

		Arif : 1,
		Kozcağız : 1,
		Amasra : 1,
		Kurucaşile : 1,
		Ulus : 1,
		Kumluca : 2
	};

	var batman = {

		Beşiri : 2,
		Beşpınar : 2,
		Beyçayırı : 1,
		Oğuz : 2,
		Gercüş : 2,
		Kayapınar : 2,
		Hasankeyf : 2,
		Kozluk : 1,
		Tuzlagözü : 1,
		Sason : 1,
		Yücebağ : 1
	};

	var bayburt = {

		Maden : 2,
		Aydıntepe : 3,
		Demirözü : 1
	};

	var bilecik = {

		Köplü : 2,
		Yarhisar : 1,
		Bozhöyük : 2,
		Dodurga : 2,
		Gölpazarı : 1,
		İnhisar : 2,
		Osmanili : 1,
		Pazaryeri : 2,
		Söğüt : 2,
		Yenipazar : 2
	};

	var bingöl = {

		all : 1
	};

	var bitlis = {

		Bölükyazı : 1,
		Narlıdere : 1,
		Sarıkonak : 1,
		Adilcevaz : 1,
		Göldüzü : 1,
		Ahlat : 1,
		Ovakışla : 1,
		Güroymak : 2,
		Hizan : 1,
		Akşar : 1,
		Sağınlı : 1,
		Mutki : 1,
		Geyikpınar : 1,
		Kavakbaşı : 1,
		Meydan : 1,
		Tatvan : 2,
		Küçüksu : 2,
		Reşadiye : 2
	};

	var bolu = {

		all : 1
	};

	var burdur = {

		Ağlasun : 1,
		Altınyayla : 1,
		Bucak : 1,
		Kızılkaya : 1,
		Kocaaliler : 2,
		Çavdır : 1,
		Çeltikli : 1,
		Gölhisar : 1,
		Karamanlı : 1,
		Kemer : 1,
		Tefenni : 1,
		Yeşilova : 1
	};

	var bursa = {

		Büyükortan : 2,
		Gemlik : 1,
		Gürsu : 1,
		Harmancık : 2,
		İnegöl : 1,
		Kurşunlu : 2,
		Tahtaköprü : 2,
		İzmik : 1,
		Karacabey : 1,
		Keleş : 2,
		Kestel : 1,
		Mudanya : 1,
		Zeytinbağı : 1,
		MustafaKemalPaşa : 1,
		Çatılıbük : 1,
		Devecikonağı : 1,
		Söğütalan : 1,
		Nilüfer : 1,
		Çalı : 1,
		Görükle : 1,
		Orhaneli : 2,
		Göynükbelen : 1,
		Karıncalı : 1,
		Orhangazi : 1,
		Osmangazi : 1,
		Demirtaş : 1,
		Soğukpınar : 1,
		Yenişehir : 1
	};

	var çanakkale = {

		all : 1
	};

	var çankırı = {

		Atkaracalar : 1,
		Bayramören : 1,
		Çerkeş : 1,
		Eldivan : 2,
		Ilgaz : 1,
		Belören : 1,
		Kızılırmak : 3,
		Korgun : 1,
		Kurşunlu : 1,
		Orta : 1,
		Şabanözü : 2,
		Yapraklı : 1,
		İkizören : 1
	};

	var çorum = {

		Cemilbey : 2,
		Seydim : 3,
		Alaca : 3,
		Bayat : 2,
		Kunduzlu : 1,
		Boğazkale : 3,
		Dodura : 1,
		İskilip : 1,
		Kargı : 1,
		Hazıhamza : 1,
		Laçin : 1,
		Mecitözü : 1,
		Oğuzlar : 1,
		Ortaköy : 2,
		Osmancık : 1,
		Kamil : 1,
		Sungurlu : 3,
		Uğurludağ : 3
	};

	var denizli = {

		Çivril : 2,
		all : 1
	};

	var diyarbakır = {

		Mermer : 2,
		Pirinçlik : 2,
		Bismil : 2,
		Salat : 2,
		Tepe : 2,
		Çermik : 1,
		Yoğun : 1,
		Çınar : 2,
		Ovabağ : 2,
		Çüngüş : 1,
		Dicle : 1,
		Eğil : 1,
		Ergani : 1,
		Ahmetli : 1,
		Hani : 1,
		Hazro : 1,
		Kocaköy : 1,
		Kulp : 1,
		Ağaçlı : 1,
		Akçasır : 1,
		Hamzalı : 1,
		Lice : 1,
		Kayacık : 1,
		Silvan : 1,
		Bağdere : 1,
		Çatalköprü : 1
	};

	var edirne = {

		Karakasım : 4,
		Sırpsındığı : 4,
		Enez : 2,
		Hafsa : 4,
		Hasköy : 4,
		İpsala : 3,
		İbriktepe : 3,
		Keşan : 2,
		Mecidiye : 1,
		Yerlisu : 1,
		LalaPaşa : 4,
		Meriç : 4,
		Köplü : 4,
		Süloğlu : 4,
		Uzunköprü : 4,
		Çöğköy : 4,
		Hamidiye : 3,
		Kurtbey : 4,
		Kırcasalih : 4
	};

	var elazığ = {

		Hankendi : 2,
		Harput : 2,
		Hıdırbaba : 2,
		İçme : 1,
		Mollakendi : 1,
		Poyraz : 2,
		Ağın : 2,
		Alacakaya : 1,
		Arıcak : 1,
		Baskil : 2,
		Aydınlar : 2,
		Kuşsarayı : 2,
		Karakoçan : 2,
		Sarıcan : 1,
		Başyurt : 1,
		Çan : 1,
		Keban : 2,
		Kovancılar : 1,
		Çaybağı : 1,
		Maden : 1,
		Hazar : 1,
		Palu : 1,
		Gökdere : 1,
		Sivrice : 1,
		Gözeli : 1
	};

	var erzincan = {

		Çağlayan : 1,
		Çatalarmut : 1,
		Çayırlı : 1,
		Başköy : 1,
		İliç : 2,
		Armutlu : 2,
		Kuruçay : 1,
		Kemah : 1,
		Alpköy : 1,
		Bozoğlak : 1,
		Doğanbeyli : 1,
		Oğuz : 1,
		Kemaliye : 2,
		Başpınar : 2,
		Dutluca : 2,
		Otlukbeli : 1,
		Refahiye : 1,
		Akarsu : 1,
		Cengerli : 1,
		Çatalçam : 1,
		Gümüşakar : 1,
		Tercan : 1,
		Üzümlü : 1,
		Tanyeli : 1
	};

	var erzurum = {

		Dumlu : 2,
		Aşkale : 2,
		Yeniköy : 1,
		Çiftlik : 1,
		Kandilli : 2,
		Çat : 1,
		Hınıs : 1,
		Halilçavuş : 1,
		Horasan : 2,
		Aras : 2,
		Ilıca : 2,
		Ovacık : 2,
		İspir : 3,
		Çamlıkaya : 3,
		Kırık : 3,
		Karaçoban : 1,
		Karaköprü : 1,
		Karayazı : 2,
		Elmalıdere : 2,
		Göksu : 1,
		Söylemez : 2,
		Köprüköy : 2,
		Narman : 2,
		Kışlaköy : 2,
		Oltu : 2,
		Olur : 2,
		Pasinler : 2,
		Pazaryolu : 3,
		Şenkaya : 2,
		Akşar : 2,
		Gaziler : 2,
		Kömürlü : 2,
		Tekman : 1,
		Gökoğlan : 1,
		Tortun : 2,
		Şenyurt : 2,
		Uzundere : 2
	};

	var eskişehir = {

		Hekimdağ : 2,
		Alpuğ : 3,
		Beylikova : 3,
		Çifteler : 2,
		Günyüzü : 4,
		Han : 2,
		İnönü : 2,
		Mahmudiye : 2,
		Mihalgazi : 2,
		Mihalıcçık : 3,
		Sarıcakaya : 2,
		Seyitgazi : 2,
		Kırka : 2,
		Sivrihisar : 3,
		Kaymaz : 3
	};

	var gaziantep = {

		Araban : 3,
		İslahiye : 1,
		Fevzipaşa : 1,
		Karganış : 4,
		Nizip : 4,
		Salkım : 3,
		Nudağı : 1,
		Sakçagöz : 1,
		Oğuzeli : 4,
		Doğanpınar : 4,
		Şahinbey : 3,
		Büyükşahinbey : 4,
		Burç : 3,
		Şehitkamil : 3,
		Yavuzeli : 3
	};

	var giresun = {

		Çaldağ : 3,
		Alucra : 1,
		Bulancak : 4,
		Kovanlık : 3,
		Çamoluk : 1,
		Çanakçı : 4,
		Dereli : 3,
		Yavuzkemal : 3,
		Doğankent : 4,
		Espiye : 4,
		Eynesil : 4,
		Görele : 4,
		Güce : 4,
		Keşap : 4,
		Karabulduk : 4,
		Piraziz : 4,
		Şebinkarahisar : 1,
		Tirebolu : 4,
		Yağlıdere : 4,
		Uctepe : 3
	};

	var gümüşhane = {

		Kale : 3,
		Yağmurdere : 4,
		Kelkit : 1,
		Köse : 2,
		Kürtün : 4,
		Şiran : 1,
		Torul : 3
	};

	var hakkari = {

		all : 1
	};

	var hatay = {

		all : 1
	};

	var içel = {

		Aslanköy : 4,
		Gözne : 3,
		Kazanlı : 3,
		Kuzucubelen : 3,
		Fındıkpınarı : 4,
		Tepeköy : 4,
		Anamur : 5,
		Aydıncık : 5,
		Bozyazı : 5,
		Çamlıyayla : 3,
		Erdemli : 4,
		Elvanlı : 4,
		Güzeloluk : 4,
		Gülnar : 5,
		Ovacık : 5,
		Mut : 5,
		Sarıkavak : 5,
		Silifke : 4,
		Kırobası : 4,
		Taşucu : 4,
		Tarsus : 3,
		Gülek : 3,
		Yenice : 3
	};

	var mersin = {

		Aslanköy : 4,
		Gözne : 3,
		Kazanlı : 3,
		Kuzucubelen : 3,
		Fındıkpınarı : 4,
		Tepeköy : 4,
		Anamur : 5,
		Aydıncık : 5,
		Bozyazı : 5,
		Çamlıyayla : 3,
		Erdemli : 4,
		Elvanlı : 4,
		Güzeloluk : 4,
		Gülnar : 5,
		Ovacık : 5,
		Mut : 5,
		Sarıkavak : 5,
		Silifke : 4,
		Kırobası : 4,
		Taşucu : 4,
		Tarsus : 3,
		Gülek : 3,
		Yenice : 3
	};

	var ığdır = {

		all : 2
	};

	var ısparta = {

		Aksu : 1,
		Atabey : 1,
		Eğirdir : 1,
		Barla : 1,
		Gelendost : 1,
		Gönen : 1,
		Keçiborlu : 1,
		Senirkent : 1,
		Sütçüler : 2,
		Ayvalıpınar : 1,
		Kasımlar : 2,
		Şarkikaraağaç : 1,
		Uluborlu : 1,
		Yalvaç : 1,
		Bağkonak : 1,
		Kumdanlı : 1,
		Yenişarbademli : 2
	};

	var istanbul = {

		Büyükşehir : 1,
		Adalar : 1,
		Avcılar : 1,
		Bakırköy : 1,
		Büyükçekmece : 2,
		Gürpınar : 1,
		Kavaklı : 1,
		Kumburgaz : 1,
		Mimarsinan : 1,
		Yakuplu : 1,
		Bağcılar : 2,
		Mahmutbey : 2,
		Bahçelievler : 2,
		Bayrampaşa : 2,
		Beşiktaş : 2,
		Beykoz : 2,
		MahmutŞevketPaşa : 2,
		Beyoğlu : 2,
		Çatalca : 2,
		Binkılıç : 4,
		Boyalık : 2,
		Durusu : 3,
		Karacaköy : 4,
		Eminönü : 1,
		Esenler : 2,
		Eyüp : 3,
		Kemerburgaz : 2,
		Göktürk : 3,
		Fatih : 2,
		Gaziosmanpaşa : 2,
		Arnavutköy : 3,
		Boğazköy : 3,
		Bolluca : 3,
		Haraçcı : 3,
		Taşoluk : 3,
		Güngören : 2,
		Kadıköy : 1,
		Kağıthane : 2,
		Kartal : 1,
		Samandıra : 1,
		Küçükçekmece : 1,
		Maltepe : 1,
		Pendik : 1,
		Sarıyer : 3,
		Silivri : 2,
		Değirmen : 3,
		Sinekli : 3,
		Büyükçavuşlu : 2,
		Sultanbeyli : 1,
		Şile : 2,
		Ağva : 2,
		Teke : 2,
		Yeşilvadi : 2,
		Şişli : 2,
		Tuzla : 1,
		Ümraniye : 2,
		Üsküdar : 1,
		Zeytinburnu : 1
	};

	var izmir = {

		all : 1
	};

	var kahramanmaraş = {

		Dönüklü : 1,
		Fatmalı : 2,
		Kale : 2,
		Karadere : 2,
		Kavlaklı : 2,
		Kürtül : 2,
		Önsen : 2,
		Şahinkayası : 2,
		Tekir : 2,
		Ağabeyli : 2,
		Sülaymanlı : 2,
		Yenicekale : 2,
		Afşin : 3,
		Çoğulhan : 2,
		Esence : 2,
		Tanır : 3,
		Andırın : 3,
		Yeşilova : 2,
		Çokak : 3,
		Çağlayancerit : 1,
		Ekinözü : 2,
		Elbistan : 2,
		Büyükyapalak : 3,
		Gücük : 2,
		Göksun : 3,
		Çardak : 2,
		Nurhak : 2,
		Pazarcık : 1,
		Narlı : 1,
		Evri : 2,
		Türkoğlu : 1
	};

	var karabük = {

		Eflani : 2,
		Eskipazar : 1,
		Ovacık : 1,
		Safranbolu : 1,
		Ovacuma : 2,
		Yenice : 1
	};

	var karaman = {

		all : 5
	};

	var kars = {

		all : 2
	};

	var kastamonu = {

		Akkaya : 1,
		Kuzkaya : 1,
		Abana : 4,
		Ağlı : 3,
		Araç : 1,
		Boyalı : 1,
		Iğdır : 1,
		Azdavay : 3,
		Bozkurt : 4,
		Cide : 2,
		Çatalzeytin : 4,
		Daday : 2,
		Devrekani : 3,
		Doğanyurt : 3,
		Hanönü : 3,
		İhsangazi : 1,
		İnebolu : 4,
		Küre : 3,
		Pınarbaşı : 2,
		Seydiler : 3,
		Şempazar : 3,
		Taşköprü : 2,
		Tosya : 1
	};

	var kayseri = {

		Pınarbaşı : 4,
		all : 3
	};

	var kilis = {

		Yavuzlu : 4,
		Elbeyi : 4,
		Musabeyli : 3,
		Polateli : 3
	};

	var kırıkkale = {

		Bahşılı : 1,
		Balışeyh : 1,
		Koçubaba : 2,
		Kulaksız : 2,
		Çelebi : 1,
		Delice : 2,
		Çerikli : 1,
		Karakeçili : 1,
		Keskin : 1,
		Sulakyurt : 3,
		Yahşihan : 2
	};

	var kırklareli = {

		all : 4
	};

	var kırşehir = {

		Göllü : 1,
		Akçakent : 1,
		Kösefakılı : 1,
		Akpınar : 1,
		Boztepe : 1,
		Çiçekdağı : 2,
		Boğazevci : 1,
		Kaman : 1,
		Savcılı : 1,
		Mucur : 2
	};

	var kocaeli = {

		Kandıra : 2,
		all : 1
	};

	var konya = {

		Ahırlı : 4,
		Akören : 4,
		Akşehir : 1,
		Reis : 1,
		Altınekin : 4,
		Beyşehir : 3,
		Aşağıesence : 4,
		Gülkaya : 2,
		Kurucaova : 2,
		Doğanbey : 3,
		Karaali : 2,
		Üzümlü : 3,
		Bozkır : 4,
		Belören : 5,
		Üçpınar : 4,
		Cihanbeyli : 4,
		Yeniceoba : 4,
		Çeltik : 3,
		Çumra : 5,
		Dinek : 5,
		Derbent : 3,
		Derebucak : 3,
		Gencek : 3,
		Doğanhisar : 1,
		Emirgazi : 5,
		Gölören : 5,
		Ereğli : 5,
		Çakmak : 4,
		Güneysınır : 5,
		Hadım : 5,
		Dedemli : 4,
		Korualan : 4,
		Aladağ : 5,
		Halkapınar : 4,
		Hüyük : 2,
		Çavuş : 1,
		İlmen : 1,
		Kıreli : 1,
		Ilgın : 1,
		Argıthanı : 1,
		Aşağıçiğil : 2,
		Kadınhanı : 3,
		Kurthasanlı : 2,
		Karapınar : 5,
		Hotamış : 5,
		Karatay : 4,
		Obruk : 5,
		Yarma : 5,
		Kulu : 3,
		Celep : 4,
		Karacadağ : 4,
		Kozanlı : 4,
		Tavşanlı : 4,
		Meran : 4,
		Hatip : 4,
		Harunsaray : 4,
		Kızılören : 3,
		İnlice : 4,
		Sefaköy : 4,
		Sarayönü : 3,
		Selçuklu : 4,
		Aşağıpınarbaşı : 4,
		Sille : 4,
		Başarakavak : 3,
		Tepe : 3,
		Seydişehir : 4,
		Çavuş : 4,
		Taşkent : 5,
		Tuzlukçu : 1,
		Yalıhöyük : 4,
		Yunak : 2,
		Saray : 3,
		Sülüklü : 4,
		Turgut : 1
	};

	var kütahya = {

		Altıntaş : 2,
		Zafertepeçalköy : 1,
		Aslanapa : 1,
		Çavdarhisar : 1,
		Domaniç : 2,
		Dumlupınar : 2,
		Emet : 1,
		Örencik : 1,
		Gediz : 1,
		Hisarcık : 1,
		Pazarlar : 1,
		Simav : 1,
		Dağardı : 1,
		Şaphane : 1,
		Tavşanlı : 2,
		Balıköy : 1
	};

	var malatya = {

		Dilek : 2,
		Şahnahan : 2,
		Çolaklı : 1,
		Akçadağ : 2,
		Kürecik : 2,
		Levent : 2,
		Arapkir : 2,
		Taşdelen : 2,
		Arguvan : 2,
		Yoncalı : 2,
		Battalgazi : 2,
		Balaban : 2,
		Doğanşehir : 1,
		Sürgü : 1,
		Doğanyol : 1,
		Hekimhan : 2,
		Hasançelebi : 2,
		Kurşunlu : 2,
		Kale : 1,
		Kuluncak : 3,
		Pötürge : 1,
		Tepehan : 1,
		Yazıhan : 2,
		Yeşilyurt : 1
	};

	var manisa = {

		all : 1
	};

	var mardin = {

		Akıncı : 3,
		Dargeçit : 2,
		Derig : 3,
		Kocatepe : 3,
		Kızıltepe : 3,
		Dikmen : 4,
		Şenyurt : 4,
		Mazıdağı : 3,
		Midyat : 3,
		Nusaybin : 3,
		Akarsu : 3,
		Girmeli : 3,
		Ömerli : 3,
		Savur : 3,
		Sürgücü : 3,
		Yeşilli : 3
	};

	var muğla = {

		all : 1
	};

	var muş = {

		all : 1
	};

	var nevşehir = {

		Kaymaklı : 4,
		Acıgöl : 4,
		Tatlarin : 3,
		Avanos : 3,
		Özkonak : 3,
		Topraklı : 3,
		Derinkuyu : 4,
		Gülşehir : 3,
		Gümüşkent : 3,
		Hacıbektaş : 3,
		Kozaklı : 3,
		Karahasanlı : 3,
		Ürgüp : 3
	};

	var niğde = {

		Gölcük : 4,
		Altunhisar : 5,
		Bor : 4,
		Çukurboyu : 5,
		Kızılca : 5,
		Kemerhisar : 4,
		Çamardı : 4,
		Çiftlik : 4,
		Kitreli : 5,
		Ulukışla : 4,
		Çiftehan : 4
	};

	var ordu = {

		Uzunisa : 3,
		Akkuş : 1,
		Aybastı : 1,
		Çamaş : 2,
		Çatalpınar : 2,
		Çaybaşı : 2,
		Fatsa : 3,
		Dağgüvezi : 2,
		Geyikçeli : 2,
		Kösebucağı : 2,
		Bolaman : 3,
		Gölköy : 1,
		Gülyalı : 3,
		Gürgentepe : 2,
		Direkli : 1,
		İkizce : 3,
		Devecik : 2,
		Yoğunoluk : 2,
		Kabadüz : 3,
		Yokuşdibi : 2,
		Kabataş : 1,
		Korgan : 1,
		Kumru : 2,
		Yukarıdamlalı : 1,
		Mesudiye : 1,
		Topçam : 1,
		Yeşilce : 1,
		Perşembe : 3,
		Ulubey : 2,
		Ünye : 3,
		Yeşilkent : 2,
		Tekkiraz : 2
	};

	var rize = {

		all : 4
	};

	var sakarya = {

		all : 1
	};

	var samsun = {

		Çayırkent : 1,
		Taflan : 3,
		Alaçam : 3,
		Asarcık : 1,
		Ayvacık : 1,
		Bafra : 3,
		Boğazkaya : 2,
		Kolay : 2,
		Çarşamba : 2,
		Dikbıyık : 2,
		Çınarlık : 3,
		Havza : 1,
		Çakıralan : 1,
		Kavak : 1,
		Ladik : 1,
		Şeyhli : 1,
		Ondokuzmayıs : 3,
		Salıpazarı : 2,
		Tekkeköy : 2,
		Terme : 3,
		Bazlamaç : 2,
		Vezirköprü : 1,
		Başpınar : 1,
		Köprübaşı : 1,
		Mezraa : 1,
		Yakakent : 3
	};

	var siirt = {

		Bağgöze : 2,
		all : 1
	};

	var sinop = {

		Kabalı : 4,
		Ayancık : 4,
		Yenikonak : 4,
		Boyabat : 1,
		Dikmen : 3,
		Durağan : 1,
		Çerçiler : 1,
		Erfelek : 4,
		Gerze : 4,
		Yenikent : 3,
		Saraydüzü : 1,
		Türkeli : 4,
		Elaldı : 4
	};

	var sivas = {

		Bedirli : 4,
		Karaçayır : 2,
		Karayün : 3,
		Kayadibi : 4,
		Akıncılar : 1,
		Altınyayla : 3,
		Divriği : 3,
		Danışment : 2,
		Gedikbaşı : 3,
		Mursal : 3,
		Sincan : 3,
		Doğanşar : 1,
		Gemerek : 3,
		Gülova : 1,
		Gürün : 4,
		Konakpınar : 4,
		Yazyurdu : 4,
		Hafik : 2,
		Celalli : 3,
		İmranlı : 1,
		Karacaören : 1,
		Kangal : 4,
		Alacahan : 3,
		Çetinkaya : 4,
		Deliktaş : 4,
		Kavak : 4,
		Kuşkayası : 4,
		Koyulhisar : 1,
		Ortakent : 1,
		Suşehri : 1,
		Gökçekent : 1,
		Şarkışla : 3,
		Akçakışla : 4,
		Ortaköy : 3,
		Ulaş : 4,
		Yıldızeli : 3,
		Çırçır : 2,
		Direkli : 3,
		Yavu : 3,
		Zara : 1,
		Beypınarı : 3,
		Bulucan : 2,
		Şerefiye : 1
	};

	var şanlıurfa = {

		Akziyaret : 3,
		Çalıdere : 3,
		Kabahaydar : 3,
		Payamlı : 3,
		Yardımcı : 3,
		Akçakale : 4,
		Şehirnusretbey : 4,
		Birecik : 4,
		Ayran : 3,
		Böğürtlen : 3,
		Bozova : 3,
		Kanlıavşar : 3,
		Yaylak : 2,
		Ceylanpınar : 4,
		Halfeti : 3,
		Harran : 3,
		Hilvan : 3,
		Gölcük : 3,
		Ovacık : 3,
		Siverek : 2,
		Bucak : 2,
		Çaylarbaşı : 2,
		Dağbaşı : 1,
		Karacadağ : 2,
		Karakeçi : 3,
		Şekerli : 3,
		Suruç : 4,
		Mürşitpınar : 4,
		Viranşehir : 3,
		Demirci : 3
	};

	var şırnak = {

		Kızılsu : 2,
		Beytüşşebap : 1,
		Cizre : 2,
		Dicle : 2,
		Güçlükonak : 2,
		Fındık : 2,
		İdil : 2,
		Haberli : 3,
		Oyalı : 3,
		Silopi : 2,
		Uludere : 1,
		Ortabağ : 1
	};

	var tekirdağ = {

		Banarlı : 2,
		Barbaros : 1,
		İnecik : 2,
		Çerkezköy : 3,
		Çorlu : 3,
		Hayrabolu : 3,
		Dambaslar : 3,
		SusuzMüsellim : 3,
		Malkara : 2,
		Ballı : 1,
		Şahin : 3,
		Yürük : 2,
		Marmaraereğlisi : 2,
		Muratlı : 3,
		Saray : 4,
		Beyazköy : 4,
		Şarköy : 1,
		Müreffe : 1
	};

	var tokat = {

		Çamlıbel : 2,
		Gökdere : 1,
		Almus : 1,
		Artova : 2,
		Başçiftlik : 1,
		Erbaa : 1,
		Doğanyurt : 1,
		Karakaya : 1,
		Kozlu : 1,
		Niksar : 1,
		Çamiçi : 1,
		Gökçeli : 1,
		Pazar : 1,
		Reşadiye : 1,
		Bereketli : 1,
		Sulusaray : 3,
		Turhal : 1,
		Dökmetepe : 1,
		Yeşilyurt : 3,
		Zile : 1,
		Boztepe : 2,
		Iğdır : 2
	};

	var trabzon = {

		all : 4
	};

	var tunceli = {

		Çiçekli : 2,
		Karakoç : 2,
		Sütlüce : 2,
		Çemişgezek : 2,
		Akçapınar : 2,
		Gedikler : 2,
		Hozat : 2,
		Çağlarca : 2,
		Mazgirt : 2,
		Akpazar : 2,
		Darıkent : 2,
		Nazmiye : 1,
		Büyükyurt : 1,
		Dallıbahçe : 2,
		Ovacık : 1,
		Karaoğlan : 1,
		Yeşilyazı : 1,
		Hertek : 2,
		Akdemir : 2,
		Dere : 2,
		Pınarlar : 2,
		Pülümür : 1,
		Balpayam : 1,
		Dağyolu : 1,
		Kırmızıköprü : 1,
		Üçadam : 1
	};

	var uşak = {

		Güre : 2,
		Banas : 2,
		Eşme : 1,
		Karahallı : 2,
		Sivaslı : 2,
		Ulubey : 2
	};

	var van = {

		Erçek : 1,
		Timar : 1,
		Bahçesaray : 1,
		Başkale : 2,
		Albayrak : 2,
		Çavdıran : 1,
		Çatak : 1,
		Narlı : 1,
		Edremit : 2,
		Erciş : 1,
		Deliçay : 1,
		Kocapınar : 2,
		Güzelsu : 2,
		Kırkgeçit : 1,
		Yalınca : 1,
		Muradiye : 1,
		Özalp : 1,
		Dorutay : 1,
		Saray : 1
	};

	var yalova = {

		all : 1
	};

	var yozgat = {

		Musabeyli : 3,
		Osmanpaşa : 3,
		Akdağmadeni : 3,
		Aydıncık : 2,
		Boğazlıyan : 3,
		Yenipazar : 3,
		Çandır : 3,
		Çayıralan : 3,
		Çekerek : 3,
		Kadışehri : 3,
		Saraykent : 3,
		Sarıkaya : 3,
		Hasbek : 3,
		Sorgun : 3,
		Eymir : 3,
		Şefaatli : 3,
		Yenifakılı : 3,
		Yerköy : 2,
		Salmahlı : 2
	};

	var zonguldak = {

		Beycuma : 2,
		Kilimli : 2,
		Kozlu : 2,
		Alaplı : 1,
		Çaycuma : 2,
		Hisarönü : 2,
		Perşembe : 2,
		Saltukova : 2,
		Devrek : 1,
		Eğerci : 1,
		Ereğli : 2,
		Güneşli : 1,
		Övberler : 1,
		Ormanlı : 1,
		Gökçebay : 2
	};


var gercekrakim = '. $gercekrakim .';

console.log("gerçek rakım değeri: " + gercekrakim);


//********************** deprem bölgesi bulmak ************************

var str = "'. $binayeri .'";
str = str.toLowerCase();
str = str.substring(str.indexOf("/") + 1);
str = str.substring(0, str.indexOf(","));

console.log("Deprem Bölgesi İl: " + str);

depremBolgesiIl = iller[str.toLowerCase()];

var sbt = "'. $binayeri .'";
sbt = sbt.substring(0, sbt.indexOf("/"));

sbt = sbt.split(" ");

sbt = sbt[sbt.length - 1];

console.log("Deprem Bölgesi İlçe: " + sbt);

var depremBolgesi = this[str][sbt];

console.log("deprem bölgesi hepsinin aynı olduğu nokta: " + this[str].all);

if(depremBolgesi == null){

	depremBolgesi = depremBolgesiIl;
}

console.log("Deprem Bölgesi: " + depremBolgesi);

//********************** deprem bölgesi bulmak ************************

	var karbolgesiiller = {

		adana : 1,
		adıyaman : 2,
		afyon : 3,
		ağrı : 4,
		aksaray : 1,
		amasya : 3,
		ankara : 2,
		antalya : 1,
		ardahan : 4,
		artvin : 4,
		aydın : 1,
		balıkesir : 1,
		bartın : 3,
		batman : 2,
		bayburt : 3,
		bilecik : 3,
		bingöl : 4,
		bitlis : 4,
		bolu : 3,
		burdur : 2,
		bursa : 4,
		çanakkale : 1,
		çankırı : 3,
		çorum : 2,
		denizli : 2,
		diyarbakır : 2,
		edirne : 3,
		elazığ : 3,
		erzincan : 3,
		erzurum : 3,
		eskişehir : 2,
		gaziantep : 3,
		giresun : 4,
		gümüşhane : 3,
		hakkari : 4,
		hatay : 1,
		içel : 3,
		mersin : 3,
		ığdır : 2,
		ısparta : 2,
		istanbul : 2,
		izmir : 1,
		kahramanmaraş : 3,
		karabük : 3,
		karaman : 2,
		kars : 4,
		kastamonu : 3,
		kayseri : 1,
		kilis : 2,
		kırıkkale : 2,
		kırklareli : 2,
		kırşehir : 1,
		kocaeli : 2,
		konya : 2,
		kütahya : 3,
		malatya : 3,
		manisa : 1,
		mardin : 2,
		muğla : 3,
		muş : 3,
		nevşehir : 1,
		niğde : 2,
		ordu : 3,
		rize : 4,
		sakarya : 3,
		samsun : 3,
		siirt : 2,
		sinop : 3,
		sivas : 3,
		şanlıurfa : 1,
		şırnak : 4,
		tekirdağ : 2,
		tokat : 3,
		trabzon : 4,
		tunceli : 4,
		uşak : 2,
		van : 4,
		yalova : 3,
		yozgat: 3,
		zonguldak: 3
	};
	
	var kbadana = {
	
		Bahçe : 3,
		Ceyhan : 1,
		Düziçi : 3,
		Feke : 3,
		Kadirli : 3,
		Karaisalı : 3,
		Karataş : 1,
		Kozan : 3,
		Mağara : 3,
		Osmaniye : 3,
		Pozantı : 2,
		Saimbeyli : 3,
		Yumurtalık : 1
	}
	
	var kbadıyaman = {
	
		Besni : 4,
		Çelikhan : 3,
		Gerger : 3,
		Gölbaşı : 4,
		Rahtaağ : 2,
		Samsat : 2
	}
	
	var kbafyon = {
	
		Bolvadin : 3,
		Çay : 2,
		Dazkırı : 2,
		Dinar : 2,
		Emirdağ : 3,
		İhsaniye : 3,
		Sandıklı : 2,
		Sincanlı : 2,
		Şuhut : 2,
		Sultandağı :2
	}
	
	var kbağrı = {
	
		Diyadin : 2,
		Doğubeyazıt : 2,
		Eleskirt : 4,
		Hamur : 4,
		Patnos : 4,
		Taşlıçay : 4,
		Tutak : 4
	}
	
	var kbaksaray = {
	
		Siyahşi : 2,
		Ağaçören : 2,
		Ortaköy : 3,
		Eski : 4,
		Gülağaç : 4,
		Sultanhanı : 5,
		Taşpınar : 5,
		Güzelyurt : 5
	}
	
	var kbamasya = {
	
		Göynüçek : 2,
		Gümüşhacıköy : 2,
		Merzifon : 2,
		Sulovaarı : 2,
		Taşova : 3
	}
	
	var kbankara = {
	
		Akyurt: 1,
		Altındağ : 1,
		Ayaş: 3,
		Bala: 1,
		Beypazarı: 4,
		Çamlıdere: 3,
		Çankara: 2,
		Çubuk: 3,
		Delice: 2,
		Elmadağ: 4,
		Etimesgut: 1,
		Güdül: 3,
		Haymana: 2,
		Kalecik: 3,
		Keskin: 1,
		Kızılcahamam: 3,
		Nallıhan: 2,
		Polatlı: 2,
		Yenimahalle: 1
	}
	
	var kbantalya = {
	
		Akseki : 3,
		Alanya : 1,
		Elmalı : 3,
		Finike : 1,
		Gazipaşa : 1,
		Gündoğmuş : 3,
		İbradi : 3,
		Kaş : 1,
		Korkuteli : 3,
		Kumluca : 1,
		Manavgat : 1,
		Serik : 1
	}
	
	var kbardahan = {
	
		Posof : 4,
		Hanak : 4,
		Çıldır : 4,
		Göle : 4,
	}
	
	var kbartvin = {
	
		Ardanuç : 3,
		Arhani : 4,
		Borçka : 4,
		Hopa : 4,
		Sarp : 4,
		Şavşat : 4,
		Yusufeli : 3
	}
	
	var kbaydın = {
	
		Buzdoğan : 1,
		Çine : 1,
		Germencik : 1,
		Karacasu : 2,
		Koçarlı : 1,
		Kuşadası : 1,
		Kuyucak : 1,
		Nazilli : 1,
		Söke : 1,
		Sultanhisar : 1,
		Yenipazar : 1
	}
	
	var kbbalıkesir = {
	
		Ayvalık : 1,
		Balya : 1,
		Bandırma : 1,
		Bigadiç : 1,
		Burhaniye : 1,
		Dursunbey : 3,
		Edremit : 1,
		Erdek : 1,
		Gönen : 1,
		Havran : 1,
		İvrindi : 1,
		Kepsun : 3,
		Manyas : 1,
		Savaştepe : 1,
		Sındırgı : 3,
		Susurluk : 3
	}
	
	var kbbartın = {}
	
	var kbbatman = {}
	
	var kbbayburt = {}
	
	var kbbilecik = {
	
		Bozöyük : 3,
		Gölpazarı : 3,
		Osmaneli : 3,
		Pazaryeri : 3,
		Söğüt : 3
	}
	
	var kbbingöl = {
		
		Genç : 2, 
		Karlıova : 4,
		Kiği : 4,
		Solhan : 4
	}
	
	var kbbitlis = {
	
		Adilcevaz : 4,
		Ahlat : 4,
		Hizan : 4,
		Kotum : 4,
		Mutki : 2,
		Tatvan : 4
	}
	
	var kbbolu = {
	
		Akçaova : 3,
		Düzce : 3,
		Gerede : 4,
		Göynük : 3,
		Kıbrısçık : 4,
		Menyen : 4,
		Mudurnu : 3,
		Seben : 4,
		Yığılça : 3
	}
	
	var kbburdur = {
	
		Ağlasun : 2,
		Bucak : 2,
		Gölhisar : 2,
		Tefenni : 2,
		Yeşilova : 2
	}
	
	var kbbursa = {
	
		Armutlu : 3,
		Gemlik : 3,
		İnegöl : 4,
		İznik : 3,
		Karacabey : 3,
		Keles : 4,
		Mudanya : 3,
		Mustafakemalpaşa : 3,
		Orhaneli : 4,
		Orhangazi : 4,
		Yalova : 3,
		Yenişehir : 3
	}
	
	var kbçanakkale = {
	
		Ayvacık : 1,
		Bayramiç : 1,
		Biga : 3,
		Çan : 1,
		Eceabat : 3,
		Ezine : 1,
		Gelibolu : 3,
		Lapseki : 3,
		Yenice : 1
	}
	
	var kbçankırı = {
		
		Çerkeş : 3,
		Eldivan : 3,
		Eskipazar : 4,
		Ilgaz : 3,
		Kurşunlu : 3,
		Orta : 3,
		Ovacık : 4,
		Şabanözü : 3,
		Yapraklı : 3
	}
	
	var kbçorum = {
	
		Alaca : 2,
		Bayat : 2,
		İskilip : 2,
		Kargı : 2,
		Mecitözü : 2,
		Ortaköy : 2,
		Osmancık : 2,
		Sungurlu : 2
		
	}
	
	var kbdenizli = {
	
		Acıbayram : 2,
		Babadağ : 2,
		Buldan : 2,
		Çal : 2,
		Çameli : 2,
		Çardak : 2,
		Çivril : 2,
		Güney : 2,
		Kale : 2,
		Sarayköy : 2,
		Tavas : 2
	}
	
	var kbdiyarbakır = {
	
		Bismil : 2,
		Çermik : 3,
		Çınar : 2,
		Çüngüş : 3,
		Dicle : 3,
		Eğil : 3,
		Ergani : 3,
		Hani : 2,
		Hazro : 2,
		Kulp : 2,
		Lice : 2,
		Silvan : 2
	}
	
	var kbedirne = {
	
		Enez : 3,
		Havşa : 3,
		İpsala : 3,
		Keşan : 3,
		Lalapaşa : 3,
		Meriç : 3,
		Uzunköprü : 3
	}
	
	var kbelazığ = {
	
		Ağın : 4,
		Başkil : 3,
		Karakoçan : 3,
		Keban : 4,
		Maden : 3,
		Palu : 3,
		Sivrice : 3
	}
	
	var kberzincan = {
	
		Çayırlı : 3,
		Ilıç : 3,
		Kemah : 3,
		Kemaliye : 4,
		Refahiye : 3,
		Tercan : 3
	}
	
	var kberzurum = {
	
		Aşkale : 3,
		Çat : 3,
		İspir : 3,
		Hınıs : 4,
		Horasan : 3,
		Karayazı : 4,
		Narman : 3,
		Olur : 3,
		Oltu : 3,
		Pasinler : 3,
		Şenkaya : 3,
		Tekman : 3,
		Tortum : 3
	}
	
	var kbeskişehir = {
	
		Çifteler : 2,
		Mahmudiye : 2,
		Mihalıcçık : 2,
		Sarıkaya : 2,
		Seyitgazi : 2,
		Sivrihisar : 2
	}
	
	var kbgaziantep = {
	
		Araban : 4,
		Barak : 3,
		Çobanbeyi : 2,
		Fevzipaşa : 3,
		Islahiye : 3,
		Kilis : 2,
		Nizip : 3,
		Oğuzeli : 3,
		Yavuzeli : 3
	}
	
	var kbgiresun = {
	
		Alucra : 4,
		Bulancak : 3,
		Dereli : 4,
		Esbiye : 4,
		Eynesil :4,
		Görele : 4,
		Keşap : 4,
		Şebinkarahisar : 4,
		Tirebolu : 4
	}
	
	var kbgümüşhane = {
	
		Kelkit : 3,
		Şiran : 3,
		Torul : 4
	}
	
	var kbhakkari = {
	
		Beytüşşebap : 4,
		Bacirge : 4,
		Çukurca : 4,
		Şemdinli : 4,
		Şirelan : 4,
		Uludere : 4,
		Yüksekova : 4
	}
	
	var kbhatay = {
	
		Altınözü : 1,
		Arsuz : 1,
		Belen : 1,
		Dörtyol : 1,
		Erzin : 3,
		Hassa : 3,
		İskenderun : 1,
		Kırıkhan : 1,
		Reyhanlı : 1,
		Samandağı : 1,
		Yayladağı : 1
	}
	
	var kbiçel = {}
	
	var kbmersin = {}
	
	var kbığdır = {}
	
	var kbısparta = {
	
		Atabey : 2,
		Eğridir : 2,
		Gelendost : 2,
		Keçiborlu : 2,
		Senirkent : 2,
		Sütçüler : 2,
		Şarkikaraağaç : 3,
		Uluborlu : 2,
		Yalvaç : 2
	}
	
	var kbistanbul = {
	
		Bakırköy : 2,
		Beşiktaş : 2,
		Beykoz : 2,
		Beyoğlu : 2,
		Çatalca : 2,
		Eminönü : 2,
		Eyüp : 2,
		Gaziosmanpaşa : 2,
		Kadıköy : 2,
		Kartal : 2,
		Sarıyer : 2,
		Silivri : 2,
		Şile : 2,
		Şişli : 2,
		Üsküdar : 2,
		Yalova : 2,
		Zeytinburnu : 2
	}
	
	var kbizmir = {
	
		Aliağa : 1,
		Bayındır : 1,
		Bergama : 1,
		Bornova : 1,
		Buca : 1,
		Çeşme : 1,
		Dikili : 1,
		Foça : 1,
		Karaburun : 1,
		Karşıyaka : 1,
		kemalpaşa : 1,
		Kınık : 1,
		Kozak : 1,
		Menemen : 1,
		Ödemiş : 1,
		Seferihisar : 1,
		Selçuk : 1,
		Tire : 1,
		Torbalı :1,
		Urla : 1
	}
	
	var kbkahramanmaraş = {
	
		Afşin : 3,
		Andirin : 3,
		Elbistan : 3,
		Göksun : 3,
		Pazarcık : 3,
		Türkoğlu : 3
	}
	
	var kbkarabük = {}
	
	var kbkaraman = {}
	
	var kbkars = {
	
		Aralık : 2,
		Ardahan : 4,
		Arpaçay : 4,
		Çıldır : 4,
		Digar : 4,
		Göle : 4,
		Hanak : 4,
		Iğdır : 2,
		Kağızman : 2,
		Posof : 4,
		Sarıkamış :4,
		Selim : 4,
		Susuz : 4,
		Tuzluca : 2
	}
	
	var kbkastamonu = {
	
		Abana : 3,
		Araç : 3,
		Azdavay : 3,
		Bozkurt : 3,
		Çatalzeytin : 3,
		Cide : 3,
		Daday : 3,
		Devrekani : 3,
		İnebolu : 3,
		Taşköprü : 3,
		Tosya : 3
	}
	
	var kbkayseri = {
	
		Bünyan : 1,
		Develi : 3,
		Felahiye : 1,
		Hacılar : 3,
		İncesu : 1,
		Pınarbaşı : 3,
		Sarıoğlan : 3,
		Sarız : 3,
		Talas : 3,
		Tomarza : 3,
		Viranşehir : 3,
		Yahyalı : 3,
		Yeşilhisar : 3
	}
	
	var kbkilis = {
		
	}
	
	var kbkırıkkale = {
	
		Keskin : 1
	}
	
	var kbkırklareli = {
	
		Babaeski : 2,
		Demirköy : 3,
		Kofcaz : 3,
		Lüleburgaz : 2,
		Midye : 2,
		Pehlivanköy : 2,
		Pınarhisar : 3
	}
	
	var kbkırşehir = {
	
		Çiçekdağı : 1,
		Kaman : 1,
		Kozaklı : 3,
		Mucur : 1
	}
	
	var kbkocaeli = {
		
		Gebze : 2,
		Gölcük : 2,
		Hereke : 2,
		Kandıra : 3,
		Karamürsel : 2,
		Kaynarca : 3
	}
	
	var kbkonya = {
	
		Akşehir : 2,
		beyşehir : 2,
		Bozkır : 2,
		Cihanbeyli : 1,
		Çumra : 2,
		Doğanhisar : 2,
		Ereğli : 2,
		Ermenek : 2,
		Hadım : 2,
		Ilgın : 2,
		Kadınhanı : 2,
		Karaman : 2,
		Karapınar : 1,
		Kulu : 1,
		Sarayönü : 2,
		Seydişehir : 2,
		Yunak : 2,
		Zıvarık : 1
	}
	
	var kbkütahya = {
	
		Altıntaş : 2,
		Dağardı : 3,
		Domaniç : 3,
		Dumlupınar : 2,
		Emet : 3,
		Gediz : 3,
		Simav : 3,
		Tavşanlı : 3
	}
	
	var kbmalatya = {
	
		Ağın : 4,
		Akçadağ : 3,
		Arapkir : 4,
		Arguvan : 4,
		Darende : 3,
		Doğanşehir : 3,
		Hekimhan : 3,
		Pötürge : 3,
		Yeşilyurt : 3
	}
	
	var kbmanisa = {
	
		Akhisar : 1,
		Alaşehir : 1,
		Demirci : 3,
		Gölmarmara : 1,
		Gördes : 3,
		Kırkağaç : 1,
		Kula : 2,
		Salihli : 1,
		Sarıgöl : 2,
		Saruhanlı : 1,
		Selendi : 2,
		Soma : 1,
		Turgutlu : 1
	}
	
	var kbmardin = {
	
		Cizre : 1,
		Derik : 1,
		Gercüş : 2,
		Hasankeyf : 2,
		İdil : 1,
		Kızıltepe : 1,
		Mazıdağı : 1,
		Midyat : 4,
		Nusaybin : 1,
		Ömerli : 4,
		Savur : 2,
		Silopi : 1
	}
	
	var kbmuğla = {
	
		Bodrum : 1,
		Dalaman : 1,
		Datça : 1,
		Fethiye : 1,
		Güllük : 1,
		Köyceğiz : 1,
		Marmaris : 1,
		Milas : 1,
		Ula : 1,
		Yatağan : 1
	}
	
	var kbmuş = {
	
		Bulanık : 4,
		Malazgirt : 4,
		Varto : 4
	}
	
	var kbnevşehir = {
	
		Avanos : 1,
		Derinkuyu : 1,
		Gülşehir : 1,
		Hacıbektaş : 1,
		Ürgüp : 1
	}
	
	var kbniğde = {
	
		Aksaray : 1,
		Bor : 2,
		Çamardı : 2,
		Ortaköy : 2,
		Ulukışla : 2
	}
	
	var kbordu = {
	
		Akkuş : 3,
		Aybastı : 3,
		Fatsa : 3,
		Gölköy : 3,
		Korgan : 3,
		Kumru : 3,
		Mesudiye : 3,
		Perşembe : 3,
		Ulubey : 3,
		Ünye : 3
	}
	
	var kbrize = {
	
		Ardeşen : 4,
		Çamlıhemşin : 4,
		Çayeli : 4,
		Fındıklı : 4,
		İkizdere : 3,
		Pazar : 4
	}
	
	var kbsakarya = {}
	
	var kbsamsun = {
	
		Alaçam : 3,
		Bafra : 3,
		Çarşamba : 3,
		Havza : 2,
		Kavak : 3,
		Ladik : 3,
		Terme : 3,
		Vezirköprü : 3
	}
	
	var kbsiirt = {
	
		Batman : 2,
		Baykan : 2,
		Beşiri : 2,
		Eruh : 4,
		Kozluk : 2,
		Kurtalan : 2,
		Pervari : 4,
		Sason : 2,
		Şırnak : 4,
		Şirvan : 2
	}
	
	var kbsinop = {
	
		Ayancık : 3,
		Boyabat : 3,
		Durağan : 3,
		Gerze : 3,
		Türkeli : 3
	}
	
	var kbsivas = {
	
		Divriği : 4,
		Gemerek : 3,
		Gürün : 3,
		Hafik : 3,
		İmranlı : 3,
		Kangal : 4,
		Koyulhisar : 3,
		Suşehri : 3,
		Şarkışla : 3,
		Yıldızeli : 3,
		Zara : 3
	}
	
	var kbşanlıurfa = {
	
		Akçakale : 1,
		Birecik : 1,
		Bozova : 1,
		Ceylanpınar : 1,
		Hilvan : 2,
		Siverek : 2,
		Sürüç : 1,
		Viranşehir : 1
	}
	
	var kbşırnak = {}
	
	var kbtekirdağ = {
	
		Alpullu : 2,
		Çorlu : 2,
		Ganos : 2,
		Hayrabolu : 3,
		Malkara : 3,
		Muratlı : 2,
		Mürefte : 2,
		Saray : 2,
		Şarköy : 2
	}
	
	var kbtokat = {
	
		Almus : 3,
		Artova : 3,
		Erbaa : 3,
		Niksar : 3,
		Reşadiye : 3,
		Turhal : 3,
		Zile : 3
	}
	
	var kbtrabzon = {
	
		Akçaabat : 4,
		Araklı : 4,
		Arsin : 4,
		Çaykara : 3,
		Maçka : 4,
		Of : 4,
		Sürmene : 4,
		Tonya : 4,
		Vakfıkebir : 4,
		Yomra : 4
	}
	
	var kbtunceli = {
	
		Çemişgezek : 4,
		Hozat : 4,
		Kalan : 4,
		Mazgirt : 4,
		Nazimiye : 4,
		Ovacık : 4,
		Pertek : 4,
		Pülümür : 4
	}
	
	var kbuşak = {
	
		Banaz : 2,
		Eşme : 2,
		Karahallı : 2,
		Sivaslı : 2,
		Ulubey : 2
	}
	
	var kbvan = {
	
		Başkale : 4,
		Çatak : 4,
		Gevaş : 4,
		Gürpınar : 4,
		Muradiye : 2,
		Özalp : 2
	}
	
	var kbyalova = {}
	
	var kbyozgat = {
	
		Akdağmadeni : 3,
		Boğazköy : 1,
		Boğazlıyan : 3,
		Çayıralan : 3,
		Çekerek : 3,
		Sarıkaya : 3,
		Sorgun : 3,
		Şefaatli : 3,
		Yerköy : 3
	}
	
	var kbzonguldak = {
	
		Amasra : 3,
		Bartın : 3,
		Çaycuma : 3,
		Devrek : 3,
		Eflani : 4,
		Ereğli : 3,
		Karabük : 3,
		Kilimli : 3,
		Kozlu : 3,
		Kurucaşile : 3,
		Safranbolu : 4,
		Ulus : 3
	}
	
	
	//*****************************
	
	
	var rakimiller = {
	
		adana : 23,
		adıyaman : 669,
		afyon : 1.021,
		ağrı : 1.640,
		aksaray : 980,
		amasya : 411,
		ankara : 938,
		antalya : 43,
		ardahan : 1.900,
		artvin : 345,
		aydın : 70,
		balıkesir : 101,
		bartın : 25,
		batman : 550,
		bayburt : 1550,
		bilecik : 526,
		bingöl : 1177,
		bitlis : 1545,
		bolu : 732,
		burdur : 1025,
		bursa : 100,
		çanakkale : 3,
		çankırı : 730,
		çorum : 798,
		denizli : 450,
		diyarbakır : 677,
		edirne : 48,
		elazığ : 1015,
		erzincan : 1214,
		erzurum : 1893,
		eskişehir : 732,
		gaziantep : 840,
		giresun : 84,
		gümüşhane : 1210,
		hakkari : 1720,
		hatay : 85,
		içel : 6,
		mersin : 6,
		ığdır : 858,
		ısparta : 1043,
		istanbul : 30,
		izmir : 25,
		kahramanmaraş : 568,
		karabük : 278,
		karaman : 1250,
		kars : 1750,
		kastamonu : 800,
		kayseri : 1071,
		kilis : 680,
		kırıkkale : 700,
		kırklareli : 203,
		kırşehir : 985,
		kocaeli : 76,
		konya : 1026,
		kütahya : 969,
		malatya : 977,
		manisa : 42,
		mardin : 1150,
		muğla : 646,
		muş : 1300,
		nevşehir : 1250,
		niğde : 1208,
		ordu : 10,
		rize : 4,
		sakarya : 31,
		samsun : 44,
		siirt : 895,
		sinop : 32,
		sivas : 1285,
		şanlıurfa : 547,
		şırnak : 1350,
		tekirdağ : 3,
		tokat : 623,
		trabzon : 37,
		tunceli : 914,
		uşak : 921,
		van : 1661,
		yalova : 2,
		yozgat: 1418,
		zonguldak: 13
	}
	
	var rakimankara = {
	
		Akyurt: 1050,
		Altındağ: 1000,
		Ayaş: 900,
		Bala: 1320,
		Beypazarı: 700,
		Çamlıdere: 1250,
		Çankaya: 1050,
		Çubuk: 940,
		Elmadağ: 1150,
		Etimesgut: 830,
		Evren: 833,
		Gölbaşı: 980,
		Güdül: 725,
		Haymana: 1230,
		Kalecik: 750,
		Keçiören: 950,
		Kızılcahamam: 980,
		Mamak: 950,
		Nallıhan: 630,
		Polatlı: 870,
		Pursaklak: 1030,
		Sincan: 790,
		Yenimahalle: 875
	}
	
	var rakimadana = {
	
		Aladağ : 860,
		Ceyhan : 25,
		Çukurova : 150,
		Feke : 560,
		İmamoğlu : 84,
		Karaisalı : 300,
		Karataş : 10,
		Kozan : 150,
		Pozantı : 790,
		Saimbeyli : 945,
		Sarıçam : 100,
		Seyhan : 30,
		Tufanbeyli : 1472,
		Yumurtalık : 20,
		Yüreğir : 20
	}
	
	var rakimadıyaman = {
	
		Besni : 925,
		Çelikhan : 1400,
		Gerger : 780,
		Gölbaşı : 890,
		Kahta : 710,
		Samsat : 415,
		Sincik : 1300,
		Tut : 1072
	}
	
	var rakimafyon = {
	
		Başmakçı : 850,
		Bayat : 1065,
		Bolvadin : 995,
		Çay : 1050,
		Çoban : 990,
		Dazkırı : 890,
		Dinar : 900,
		Emirdağ : 970,
		Evciler : 907,
		Hocalar : 1111,
		İhsaniye : 1100,
		İscehisar : 1120,
		Kızılören : 1125,
		Sandıklı : 1120,
		Sinanpaşa : 1125,
		Şuhut : 1130,
		Sultandağı : 1010
	}
	
	var rakimağrı = {
	
		Diyadin : 1925,
		Doğubeyazıt : 1600,
		Eleşkirt : 1810,
		Hamur : 1690,
		Patnos : 1635,
		Taşlıçay : 1760,
		Tutak : 1565
	}
	
	var rakimaksaray = {
	
		Ağaçören : 1220,
		Eskil : 935,
		Gülağaç : 1160,
		Güzelyurt : 1505,
		Ortaköy : 1210,
		Sarıyahşi : 947
	}
	
	var rakimamasya = {
	
		Göynücek : 525,
		Gümüşhacıköy : 815,
		Hamamözü : 710,
		Merzifon : 750,
		Suluova : 550,
		Taşova : 235
	}
	
	var rakimantalya = {
	
		Akseki : 1150,
		Aksu : 87,
		Alanya : 18,
		Demre : 12,
		Döşemealtı : 790,
		Elmalı : 1150,
		Finike : 7,
		Gazipaşa : 20,
		Gündoğmuş : 890,
		İbradi : 1040,
		Kaş : 125,
		Kemer : 10,
		Kepez : 289,
		Konyaaltı : 42,
		Korkuteli : 1480,
		Kumluca : 29,
		Manavgat : 40,
		Muratpaşa : 40,
		Serik : 28
	}
	
	var rakimardahan = {
	
		Çıldır : 1910,
		Damal : 2110,
		Göle : 2030,
		Hanak : 1820,
		Posof : 1540
	}
	
	var rakimartvin = {
		
		Ardanuç : 500,
		Arhani : 30,
		Borçka : 140,
		Hopa : 50,
		Murgul : 450,
		Şavşat : 1220,
		Yusufeli : 600
	}
	
	var rakimaydın = {
	
		Bozdoğan : 350,
		Buharkent : 173,
		Çine : 75,
		Didim : 50,
		Germencik : 55,
		İncirliova : 40,
		Karacasu : 570,
		Karpuzlu : 125,
		Koçarlı : 50,
		Köşk : 72,
		Kuşadası : 40,
		Kuyucak : 130,
		Nazilli : 90,
		Söke : 40,
		Sultanhisar : 90,
		Yenipazar : 60
	}
	
	var rakimbalıkesir = {
	
		Ayvalık : 10,
		Balya : 225,
		Bandırma : 20,
		Bigadiç : 160,
		Burhaniye : 12,
		Dursunbey : 635,
		Edremit : 25,
		Erdek : 10,
		Gömeç : 13,
		Gönen : 40,
		Havran : 30,
		İvrindi : 270,
		Kepsut : 75,
		manyas : 50,
		Marmara : 10,
		Savaştepe : 300,
		Sındırgı : 225,
		Susurluk : 50
	}
	
	var rakimbartın = {
	
		Amasra : 20,
		Kurucaşile : 25,
		Ulus : 170
	}
	
	var rakimbatman = {
	
		Beşiri : 750,
		Gercüş : 1000,
		Hasankeyf : 500,
		Kozluk : 868,
		Sason : 950
	}
	
	var rakimbayburt = {
	
		Aydıntepe : 1635,
		Demirözü  :1710
	}
	
	var rakimbilecik = {
	
		Bozüyük : 750,
		Gölpazarı : 550,
		İnhisar : 210,
		Osmaneli : 110,
		Pazaryeri : 800,
		Söğüt : 685,
		Yenipazar : 615
	}
	
	var rakimbingöl = {
	
		Adaklı : 1520,
		Genç : 1010,
		Karlıova : 1830,
		Kığı : 1550,
		Solhan : 1410,
		Yayladere : 1600,
		Yedisu : 1500
	}
	
	var rakimbitlis = {
	
		Adilcevaz : 1700,
		Ahlat : 1720,
		Güroymak : 1400,
		Hizan : 1500,
		Mutki : 1510,
		Tatvan : 1655
	}
	
	var rakimbolu = {
	
		Dörtdivan : 1160,
		Gerede : 1330,
		Göynük : 750,
		Kıbrıscık : 1135,
		Mengen : 610,
		Mudurnu : 850,
		Seben : 750,
		Yeniçağa : 1000
	}
	
	var rakimburdur = {
	
		Ağlasun : 1140,
		Altınyayla : 1240,
		Bucak : 820,
		Çavdır : 1073,
		Çeltikçi : 867,
		Gölhisar : 1005,
		Karamanlı : 1150,
		Kemer : 1162,
		Tefenni : 1164,
		Yeşilova : 1206
	}
	
	var rakimbursa = {
	
		Gemlik : 5,
		Gürsu : 108,
		Harmancık : 668,
		İnegöl : 290,
		İznik : 91,
		Karacabey : 15,
		Keles : 1010,
		Kestel : 130,
		Mudanya : 10,
		Nilüfer : 70,
		Orhaneli : 490,
		Orhangazi : 125,
		Osmangazi : 91,
		Yenişehir : 222,
		Yıldırım : 110
	}
	
	var rakimçanakkale = {
	
		Ayvalık : 285,
		Bayramiç : 100,
		Biga : 40,
		Bozcaada : 20,
		Çan : 6,
		Eceabat : 4,
		Ezine : 50,
		Gelibolu : 20,
		Gökçeada : 48,
		Lapseki : 20,
		Yenice : 310
	}
	
	var rakimçankırı = {
	
		Atkaracalar : 1240,
		Bayramören : 865,
		Çerkeş : 1129,
		Eldivan : 912,
		Ilgaz : 940,
		Kızılırmak : 555,
		Korgun : 880,
		Kurşunlu : 1129,
		Orta : 1253,
		Şabanözü : 1040,
		Yapraklı : 1210
	}
	
	var rakimçorum = {
	
		Alaca : 915,
		Bayat : 750,
		Boğazkale : 1005,
		Dodurga : 590,
		İskilip : 800,
		Kargı : 420,
		Laçin : 730,
		Mecitözü : 820,
		Oğuzlar : 650,
		Ortaköy : 800,
		Osmancık : 425,
		Sungurlu : 750,
		Uğurludağ : 830
	}
	
	var rakimdenizli = {
	
		Acıpayam : 1000,
		Babadağ : 720,
		Baklan : 1000,
		Bekilli : 834,
		Beyağaç : 690,
		Bozkurt : 856,
		Buldan : 650,
		Çal : 840,
		Çameli : 1325,
		Çardak : 880,
		Çivril : 830,
		Güney : 750,
		Honaz : 550,
		Kale : 1050,
		Sarayköy : 160,
		Serinhisar : 1000,
		Tavas : 940
	}
	
	var rakimdiyarbakır = {
	
		Bağlar : 880,
		Bismil : 535,
		Çermik : 700,
		Çınar : 680,
		Çüngüş : 1000,
		Dicle : 950,
		Eğil : 800,
		Ergani : 950,
		Hani : 900,
		Hazro : 1050,
		Kayapınar : 730,
		Kocaköy : 930,
		Kulp : 1050,
		Lice : 1125,
		Silvan : 830,
		Sur : 650,
		Yenişehir : 790
	}
	
	var rakimedirne = {
	
		Enez :20,
		Havsa : 80,
		İpsala : 17,
		Keşan : 110,
		Lalapaşa : 160,
		Meriç : 30,
		Süloğlu : 155,
		Uzunköprü : 20
	}
	
	var rakimelazığ = {
	
		Ağın : 900,
		Alacakaya : 1060,
		Arıcak : 1080,
		Baskil : 1220,
		Karakoçan : 1090,
		Keban : 816,
		Kovancılar : 980,
		Maden : 1100,
		Palu : 1050,
		Sivrice : 1266
	}
	
	var rakimerzincan = {
	
		Çayırlı : 1520,
		İliç : 1060,
		Kemah : 1100,
		Kemaliye : 925,
		Otlukbeli : 1755,
		Refahiye : 1550,
		Tercan : 1475,
		Üzümlü : 1450
	}
	
	var rakimerzurum = {
	
		Aşkale : 1625,
		Aziziye : 1885,
		Çat : 1895,
		Hınıs : 1750,
		Horasan : 1540,
		İspir : 1300,
		Karaçoban : 1545,
		Karayazı : 2360,
		Köprüköy : 1635,
		Narman : 1700,
		Oltu : 1280,
		Palandöken : 1935,
		Pasinler : 1660,
		Pazaryolu : 1450,
		Şenkaya : 1850,
		Tekman : 2000,
		Tortum : 1600,
		Uzundere : 1140,
		Yakutiye : 1830
	}
	
	var rakimeskişehir = {
	
		Alpu : 765,
		Beylikova : 761,
		Çifteler : 865,
		Günyüzü : 891,
		Han : 1218,
		İnönü : 840,
		Mahmudiye : 885,
		Mihalgazi : 209,
		Mihalıcçık : 1320,
		Odunpazarı : 960,
		Sarıcakaya : 220,
		Seyitgazi : 1000,
		Sivrihisar : 1100,
		Tepebaşı : 960
	}
	
	var rakimgaziantep = {
	
		Araban : 566,
		İslahiye : 530,
		Nizip : 510,
		Nurdağı : 630,
		Oğuzeli : 750,
		Şahinbey : 900,
		Şehitkamil : 720,
		Yavuzeli : 565
	}
	
	var rakimgiresun = {
	
		Alucra : 1500,
		Bulancak : 10,
		Çamoluk : 1120,
		Çanaklı : 500,
		Dereli : 300,
		Doğankent : 190,
		Espiye : 10,
		Eynesil : 50,
		Görele : 50,
		Güce : 340,
		Keşap : 50,
		Piraziz : 5,
		Tirebolu : 50,
		Yağlıdere : 200
	}
	
	var rakimgümüşhane = {
	
		Kelkit : 1400,
		Köse : 1560,
		Kürtün : 910,
		Şiran : 1400,
		Torul : 930
	}
	
	var rakimhakkari = {
	
		Çukurca : 1340,
		Şemdinli : 1420,
		Yüksekova : 1900
	}
	
	var rakimhatay = {
	
		Altınözü : 350,
		Belen : 750,
		Dörtyol : 50,
		Erzin : 160,
		Hassa : 435,
		İskenderun : 20,
		Kırıkhan : 150,
		Kumlu : 100,
		Reyhanlı : 150,
		Samandağ : 40,
		Yayladağı : 450
	}
	
	var rakimiçel = {
	
		Akdeniz : 230,
		Anamur : 15,
		Aydıncık : 5,
		Bozyazı : 150,
		Çamlıyayla : 1200,
		Erdemli : 10,
		Gülnar : 1000,
		Mezitli : 19,
		Mut : 350,
		Silifke : 30,
		Tarsus : 15,
		Toroslar : 1500,
		Yenişehir : 150
	}
	
	var rakimmersin = {
	
		Akdeniz : 230,
		Anamur : 15,
		Aydıncık : 5,
		Bozyazı : 150,
		Çamlıyayla : 1200,
		Erdemli : 10,
		Gülnar : 1000,
		Mezitli : 19,
		Mut : 350,
		Silifke : 30,
		Tarsus : 15,
		Toroslar : 1500,
		Yenişehir : 150
	}
	
	var rakimığdır = {
	
		Aralık : 813,
		Karakoyunlu : 844,
		Tuzluca : 1075
	}
	
	var rakimısparta = {
	
		Aksu : 1250,
		Atabey : 1050,
		Eğirdir : 950,
		Gelendost : 945,
		Gönen : 1050,
		Keçiborlu : 1000,
		Senirkent : 1000,
		Sütçüler : 1030,
		Uluborlu : 1150,
		Yalvaç : 1090
	}
	
	var rakimistanbul = {
	
		Adalar : 10,
		Arnavutköy : 100,
		Avcılar : 70,
		Bağcılar : 90,
		Bahçelievler : 150,
		Bakırköy : 10,
		Başakşehir : 50,
		Bayrampaşa : 60,
		Beşiktaş : 10,
		Beykoz : 10,
		Beylikdüzü : 100,
		Beyoğlu : 50,
		Büyükçekmece : 10,
		Çatalca : 150,
		Çekmeköy : 150,
		Esenler : 80,
		Esenyurt : 80,
		Eyüp : 10,
		Fatih : 50,
		Güngören : 50,
		Kadıköy : 10,
		Kağıthane : 50,
		Kartal : 10,
		Küçükçekmece : 70,
		maltepe : 10,
		Pendik : 10,
		Sancaktepe : 100,
		Sarıyer : 10,
		Şile : 50,
		Silivri : 10,
		Şişli : 100,
		Sultanbeyli : 130,
		Tuzla : 19, 
		Ümraniye : 120,
		Üsküdar : 50,
		Zeytinburnu : 10
	}
	
	var rakimizmir = {
	
		Aliağa : 30,
		Balçova : 50,
		Bayındır : 100,
		Bergama : 50,
		Beydağ : 235,
		Bornova : 50,
		Buca : 120,
		Çeşme : 10,
		Çiğli : 50,
		Dikili : 10,
		Foça : 10,
		Gaziemir : 150,
		Güzelbahçe : 90,
		Karabağlar : 510,
		Karaburun : 50,
		Karşıyaka : 10,
		Kemalpaşa : 230,
		Kınık : 40,
		Kiraz : 300,
		Konak : 8,
		Menderes : 110,
		Menemen : 30,
		Narlıdere : 30,
		Ödemiş : 120,
		Seferhisar : 30,
		Selçuk : 20,
		Tire : 100,
		Torbalı : 50,
		Urla : 50
	}
	
	var rakimkahramanmaraş = {
	
		Afşin : 1240,
		Andırın : 1050,
		Çağlayancerit : 1100,
		Ekinözü : 1280,
		Elbistan : 1150,
		Göksun : 1350,
		Nurhak : 1400,
		Pazarcık : 750,
		Türkoğlu : 500
	}
	
	var rakimkarabük = {
	
		Eflani : 900,
		Eskipazar : 736,
		Ovacık : 1130,
		Safranbolu : 290,
		Yenice : 140
	}
	
	var rakimkaraman = {
	
		Ayrancı : 1145,
		Başyayla : 1370,
		Ermenek : 1300,
		Kazımkarabekir : 1050,
		Sarıveliler : 1650
	}
	
	var rakimkars = {
	
		Akyaka : 1530,
		Arpaçay : 1690,
		Digor : 1640,
		Kağızman : 1420,
		Sarıkamış : 2060,
		Selim : 1847,
		Susuz : 1750
	}
	
	var rakimkastamonu = {
	
		Abana : 10,
		Ağlı : 1220,
		Araç : 650,
		Azdavay : 830,
		Bozkurt : 40,
		Çatalzeytin : 20,
		Cide : 15,
		Daday : 860,
		Devrekani : 1070,
		Doğanyurt : 45,
		Hanönü : 430,
		İhsangazi : 1000,
		İnebolu : 25,
		Küre : 950,
		Pınarbaşı : 700,
		Şenpazar : 650,
		Seydiler : 1030,
		Taşköprü : 525,
		Tosya : 880
	}
	
	var rakimkayseri = {
	
		Akkışla : 1370,
		Bünyan : 1350,
		Develi : 1250,
		Felahiye : 1300,
		Hacılar : 1400,
		İncesu : 1100,
		Kocasinan : 1060,
		Melikgazi : 1050,
		Özvatan : 1270,
		Pınarbaşı : 1520,
		Sarıoğlan : 1150,
		Sarız : 1565,
		Talas : 1150,
		Tomarza : 1375,
		Yahyalı : 1180,
		Yeşilhisar : 1150
	}
	
	var rakimkilis = {
	
		Elbeyli : 514,
		Musabeyli : 735,
		Polateli : 840
	}
	
	var rakimkırıkkale = {
	
		Bahşılı : 810,
		Balışeyh : 860,
		Çelebi : 1250,
		Delice : 750,
		Karakeçili : 850,
		Keskin : 1425,
		Sulakyurt : 830,
		Yahşihan : 710
	}
	
	var rakimkırklareli = {
	
		Babaeski : 70,
		Demirköy : 300,
		Kofçaz : 450,
		Lüleburgaz : 60,
		Pehlivanköy : 40,
		Pınarhisar : 200,
		Vize : 200
	}
	
	var rakimkırşehir = {
	
		Akçakent : 1400,
		Akpınar : 1150,
		Boztepe : 1170,
		Çiçekdağı : 950,
		Kaman : 1075,
		Mucur : 1080
	}
	
	var rakimkocaeli = {
	
		Başiskele : 45,
		Çayırova : 140,
		Darıca : 50,
		Derince : 20,
		Dilovası : 45,
		Gebze : 190,
		Gölcük : 10,
		İzmit : 300,
		Kandıra : 100,
		Karamürsel  :10,
		Kartepe : 25,
		Körfez : 50
	}
	
	var rakimkonya = {
	
		Ahırlı : 1220,
		Akören : 1129,
		Akşehir : 1050,
		Altınekin : 1003,
		Beyşehir : 1150,
		Bozkır : 1150,
		Çeltik : 850,
		Cihanbeyli : 965,
		Çumra : 1009,
		Derbent : 1500,
		Derebucak : 1230,
		Doğanhisar : 1200,
		Emirgazi : 1080,
		Ereğli : 1050,
		Güneysınır : 1130,
		Hadim : 1510,
		Halkapınar : 1190,
		Hüyük : 1240,
		Ilgın : 1030,
		Kadınhanı : 1128,
		Karapınar : 990,
		Karatay : 1007,
		Kulu : 989,
		Meram : 1030,
		Sarayönü : 1050,
		Selçuklu : 1020,
		Seydişehir : 1130,
		Taşkent : 1500,
		Tuzlukçu : 1000,
		Yalıhüyük : 1102,
		Yunak : 1100
	}
	
	var rakimkütahya = {
	
		Altıntaş : 1030,
		Aslanapa : 1030,
		Çavdarhisar : 1000,
		Domaniç : 880,
		Dumlupınar : 1228,
		Emet : 880,
		Gediz : 800,
		Hisarcık : 750,
		Pazarlar : 950,
		Şaphane : 1000,
		Simav : 830,
		Tavşanlı : 840
	}
	
	var rakimmalatya = {
	
		Akçadağ : 1050,
		Arguvan : 1075,
		Battalgazi : 885,
		Darende : 1000,
		Doğanşehir : 1210,
		Doğanyol : 920,
		Hekimhan : 1050,
		Kale : 740,
		Kuluncak : 1280,
		Pütürge : 1250,
		Yazıhan : 825,
		Yeşilyurt : 1000
	}
	
	var rakimmanisa = {
	
		Ahmetli : 85,
		Akhisar : 100,
		Alaşehir : 200,
		Demirci : 900,
		Gölmarmara : 150,
		Gördes : 680,
		Kırkağaç : 200,
		Köprübaşı : 250,
		Kula : 669,
		Salihli : 110,
		Sarıgöl : 210,
		Saruhanlı : 35,
		Selendi : 440,
		Soma : 200,
		Turgutlu : 80
	}
	
	var rakimmardin = {
	
		Dargeçit : 940,
		Derik : 850,
		Kızıltepe : 480,
		Mazıdağı : 1050,
		Midyat : 950,
		Nusaybin : 467,
		Ömerli : 1100,
		Savur : 800,
		Yeşilli : 850
	}
	
	var rakimmuğla = {
	
		Bodrum : 10,
		Dalaman : 10,
		Datça : 15,
		Fethiye : 10,
		Kavaklıdere : 860,
		Köyceğiz : 10,
		Marmaris : 10,
		Milas : 50,
		Ortaca : 25,
		Ula : 600,
		Yatağan : 400
	}
	
	var rakimmuş = {
	
		Bulanık : 1500,
		Hasköy : 1345,
		Korkut : 1400,
		Malazgirt : 1530,
		Varto : 1530
	}
	
	var rakimnevşehir = {
	
		Acıgöl : 1232,
		Avanos : 950,
		Derinkuyu : 1350,
		Gülşehir : 950,
		Hacıbektaş : 1300,
		Kozaklı : 1100,
		Ürgüp : 1030
	}
	
	var rakimniğde = {
	
		Altunhisar : 1220,
		Bor : 1140,
		Çamardı : 1500,
		Çiftlik : 1555,
		Ulukışla : 1428
	}
	
	var rakimordu = {
	
		Akkuş : 1250,
		Aybastı : 700,
		Çamaş : 600,
		Çatalpınar : 150,
		Çaybaşı : 490,
		Fatsa : 10,
		Gölköy : 850,
		Gülyalı : 100,
		Gürgentepe : 1235,
		İkizce : 140,
		Kabadüz : 450,
		Kabataş : 430,
		Korgan : 760,
		Kumru : 450,
		Mesudiye : 1150,
		Perşembe : 100,
		Ulubey : 550,
		Ünye : 20
	}
	
	var rakimrize = {
	
		Ardeşen : 10,
		Çamlıhemşin : 350,
		Çayeli : 10,
		Derepazarı : 50,
		Fındıklı : 20,
		Güneysu : 200,
		Hemşin : 350,
		İkizdere : 800,
		İyidere : 50, 
		Kalkandere : 150,
		Pazar : 50
	}
	
	var rakimsakarya = {
	
		Adapazarı : 20,
		Akyazı : 45,
		Arifiye : 40,
		Erenler : 30,
		Ferizli : 35,
		Geyve : 80,
		Hendek : 180,
		Karapürçek : 150,
		Karasu : 60,
		Kaynarca : 50,
		Kocaali : 50,
		Pamukova : 100,
		Sapanca : 40,
		Serdivan : 85,
		Söğütlü : 15,
		Taraklı : 440
	}
	
	var rakimsamsun = {
	
		Alaçam : 10,
		Asarcık : 780,
		Atakum : 610,
		Ayvacık : 50,
		Bafra : 10,
		Canik : 670,
		Çarşamba : 35,
		Havza : 675,
		İlkadım : 335,
		Kavak : 600,
		Ladik : 900,
		Salıpazarı : 60,
		Tekkeköy : 240,
		Vezirköprü : 330,
		Yakakent : 2
	}
	
	var rakimsiirt = {
	
		Baykan : 720,
		Eruh : 1150,
		Kurtalan : 690,
		Pervari : 1400,
		Şirvan : 1050
	}
	
	var rakimsinop = {
	
		Ayancık : 10,
		Boyabat : 350,
		Dikmen : 200,
		Durağan : 200,
		Erfelek : 300,
		Gerze : 50,
		Saraydüzü : 410,
		Türkeli :20
	}
	
	var rakimsivas = {
	
		Akıncılar : 1055,
		Altınyayla : 1460,
		Divriği : 1050,
		Doğanşar : 1300,
		Gemerek : 1230,
		Gölova : 1320,
		Gürün : 1330,
		Hafik : 1275,
		İmranlı : 1600,
		Kangal : 1480,
		Koyulhisar : 890,
		Şarkışla : 1270,
		Suşehri : 1120,
		Ulaş : 1380,
		Yıldızeli : 1400,
		Zara : 1350
	}
	
	var rakimşanlıurfa = {
	
		Akçakale : 360,
		Birecik : 345,
		Bozova : 519,
		Ceylanpınar : 360,
		Halfeti : 450,
		Harran : 380,
		Hilvan : 585,
		Siverek : 800,
		Suruç : 493,
		Viranşehir : 550
	}
	
	var rakimşırnak = {
	
		Beytüşşebap : 1550,
		Cizre : 360,
		Güçlükonak : 795,
		İdil : 760,
		Silopi : 510,
		Uludere : 1250
		
	}
	
	var rakimtekirdağ = {
	
		Çerkezköy : 150,
		Çorlu : 150,
		Hayrabolu : 60,
		Malkara : 250,
		Muratlı : 90,
		Saray : 150,
		Şarköy : 6
	}
	
	var rakimtokat = {
	
		Almus : 843,
		Artova : 1180,
		Başçiftlik : 1380,
		Erbaa : 240,
		Niksar : 375,
		Pazar : 580,
		Reşadiye : 559,
		Sulusaray : 1010,
		Turhal : 480,
		Yeşilyurt : 970,
		Zile : 740
	}
	
	var rakimtrabzon = {
	
		Akçaabat : 3,
		Araklı : 5,
		Arsin : 20,
		Beşikdüzü : 4,
		Çarşıbaşı : 6,
		Çaykara : 300,
		Dernekpazarı : 200,
		Düzköy : 850,
		Hayrat : 180,
		Köprübaşı : 650,
		Maçka : 350,
		Of : 10,
		Şalpazarı : 350,
		Sürmene : 20,
		Tonya : 800,
		Vakfıkebir : 20,
		Yomra : 10
	}
	
	var rakimtunceli = {
	
		Çemişgezek : 1000,
		Hozat : 1530,
		Mazgirt : 1430,
		Nazimiye : 1530,
		Ovacık : 1250,
		Pertek : 1100,
		Pülümür : 1535
	}
	
	var rakimuşak = {
	
		Banaz : 910,
		Eşme :850,
		Karahallı : 950,
		Sivaslı : 950,
		Ulubey : 750
	}
	
	var rakimvan = {
	
		Bahçesaray : 1620,
		Başkale : 2000,
		Çaldıran : 2040,
		Çatak : 1625,
		Edremit : 1650,
		Erciş : 1775,
		Gevaş : 1750,
		Gürpınar : 2250,
		Muradiye : 1780,
		Özalp : 2075,
		Saray : 1620
	}
	
	var rakimyalova = {
	
		Altınova : 15,
		Armutlu : 15,
		Çiftlikköy : 10,
		Çınarcık : 10,
		Termal : 120
	}
	
	var rakimyozgat = {
	
		Akdağmadeni : 1350,
		Aydıncık : 840,
		Boğazlıyan : 1062,
		Çandır : 1235,
		Çayıralan : 1372,
		Çekerek : 925,
		Kadışehri : 1050,
		Saraykent : 1170,
		Sarıkaya : 1125,
		Şefaatli : 910,
		Sorgun : 1080,
		Yenifakılı : 1010,
		Yerköy : 795 
	}
	
	var rakimzonguldak = {
	
		Alaplı : 10,
		Çaycuma : 40,
		Devrek : 80,
		Ereğli : 10,
		Gökçebey : 60
	}
	
var katsayi = 0;
var karyuku = 0;
var asilrakim = 0;

//************************ Kar Bölgesi Bulma ***************************
	
var kbg = "'. $binayeri .'";
kbg = kbg.toLowerCase();
kbg = kbg.substring(kbg.indexOf("/") + 1);
kbg = kbg.substring(0, kbg.indexOf(","));

console.log("kar bölgesi il: " + kbg);

console.log("kar bölgesi: " + karbolgesiiller[kbg.toLowerCase()]);

karBolgesiIl = karbolgesiiller[kbg.toLowerCase()];


var karbolgesiilce = "'. $binayeri .'";
karbolgesiilce = karbolgesiilce.substring(0, karbolgesiilce.indexOf("/"));

karbolgesiilce = karbolgesiilce.split(" ");

karbolgesiilce = karbolgesiilce[karbolgesiilce.length - 1];

console.log(karbolgesiilce);

//console.log("kar bölgesi ilçe bazlı:" + this["kb" + kbg][karbolgesiilce]);

if(this["kb" + kbg][karbolgesiilce]){

	karBolgesi = this["kb" + kbg][karbolgesiilce];
}
else{

	karBolgesi = karBolgesiIl;
}

//eğer ilçenin kar bölgesini bulamazsa bağlı olduğu ilin kar bölgesini al.
if(karBolgesi == null){

	
}

console.log("Kar Bölgesi: " + karBolgesi);

//************************ Kar Bölgesi Bulma ***************************


//*************************** rakım bulma ******************************
/*
var rakimil = "'. $binayeri .'";
rakimil = rakimil.toLowerCase();
rakimil = rakimil.substring(rakimil.indexOf("/") + 1);
rakimil = rakimil.substring(0, rakimil.indexOf(","));

console.log("rakım il: " + rakimil);

rakimill = rakimiller[rakimil.toLowerCase()];

console.log("ilin rakımı yeni: " + rakimill);

var rakimilce = "'. $binayeri .'";
rakimilce = rakimilce.substring(0, rakimilce.indexOf("/"));

rakimilce = rakimilce.split(" ");

rakimilce = rakimilce[rakimilce.length - 1];

console.log("rakım ilçe: " + rakimilce);

//console.log("rakım ilçe sayı: " + this["rakim" + rakimil][rakimilce]);



if(this["rakim" + rakimil][rakimilce]){

	var rakim = this["rakim" + rakimil][rakimilce];
}

else{

	rakim = rakimill;
}
*/

asilrakim = gercekrakim;
rakim = gercekrakim;

//*************************** rakım bulma ********************************


//************************* kar yükü bulma *******************************

if(rakim < 200){

	rakim = 200;
}

if(rakim > 1000 && rakim < 1500){

	rakim = 1000;
	katsayi = 1.1;
}

if(rakim > 1500){

	rakim = 1000;
	katsayi = 1.15
}

console.log("rakım: " + rakim);

if(rakim >= 200 && rakim < 300){

	if(karBolgesi == 1){
		
		katsayi = 0.75;
		karyuku = 0.75;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else if(karBolgesi == 2){
	
		katsayi = 0.75;
		karyuku = 0.75;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else if(karBolgesi == 3){
	
		katsayi = 0.75;
		karyuku = 0.75;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else{
	
		katsayi = (((rakim - 200) * 0.05) / 100) + 0.75;
		karyuku = katsayi;
		karyuku = (karyuku * 1000) / 9.81;
	}
}

if(rakim >= 300 && rakim < 400){

	if(karBolgesi == 1){
		
		katsayi = 0.75;
		karyuku = 0.75;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else if(karBolgesi == 2){
	
		katsayi = 0.75;
		karyuku = 0.75;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else if(karBolgesi == 3){
	
		katsayi = 0.75;
		karyuku = 0.75;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else{
	
		katsayi = 0.8;
		karyuku = 0.8;
		karyuku = (karyuku * 1000) / 9.81;
	}
}

if(rakim >= 400 && rakim < 500){

	if(karBolgesi == 1){
		
		katsayi = 0.75;
		karyuku = 0.75;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else if(karBolgesi == 2){
	
		katsayi = 0.75;
		karyuku = 0.75;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else if(karBolgesi == 3){
	
		katsayi = 0.75;
		karyuku = 0.75;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else{
	
		katsayi = (((rakim - 400) * 0.05) / 100) + 0.8;
		karyuku = katsayi;
		karyuku = (karyuku * 1000) / 9.81;
	}
}

if(rakim >= 500 && rakim < 600){

	if(karBolgesi == 1){
		
		katsayi = 0.75;
		karyuku = 0.75;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else if(karBolgesi == 2){
	
		katsayi = 0.75;
		karyuku = 0.75;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else if(karBolgesi == 3){
	
		katsayi = (((rakim - 500) * 0.05) / 100) + 0.75;
		karyuku = katsayi;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else{
	
		katsayi = (((rakim - 500) * 0.05) / 100) + 0.85;
		karyuku = katsayi;
		karyuku = (karyuku * 1000) / 9.81;
	}
}

if(rakim >= 600 && rakim < 700){

	if(karBolgesi == 1){
		
		katsayi = 0.75;
		karyuku = 0.75;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else if(karBolgesi == 2){
	
		katsayi = 0.75;
		karyuku = 0.75;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else if(karBolgesi == 3){
	
		katsayi = (((rakim - 600) * 0.05) / 100) + 0.8;
		karyuku = katsayi;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else{
	
		katsayi = (((rakim - 600) * 0.05) / 100) + 0.9;
		karyuku = katsayi;
		karyuku = (karyuku * 1000) / 9.81;
	}
}

if(rakim >= 700 && rakim < 800){

	if(karBolgesi == 1){
		
		katsayi = (((rakim - 700) * 0.05) / 100) + 0.75;
		karyuku = katsayi;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else if(karBolgesi == 2){
	
		katsayi = (((rakim - 700) * 0.1) / 100) + 0.75;
		karyuku = katsayi;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else if(karBolgesi == 3){
	
		katsayi = (((rakim - 700) * 0.4) / 100) + 0.85;
		karyuku = katsayi;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else{
	
		katsayi = (((rakim - 700) * 0.45) / 100) + 0.95;
		karyuku = katsayi;
		karyuku = (karyuku * 1000) / 9.81;
	}
}

if(rakim >= 800 && rakim < 900){

	if(karBolgesi == 1){
		
		katsayi = 0.8;
		karyuku = 0.8;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else if(karBolgesi == 2){
	
		katsayi = (((rakim - 800) * 0.1) / 100) + 0.85;
		karyuku = katsayi;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else if(karBolgesi == 3){
	
		katsayi = (((rakim - 800) * 0.05) / 100) + 1.25;
		karyuku = katsayi;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else{
	
		katsayi = (((rakim - 800) * 0.1) / 100) + 1.4;
		karyuku = katsayi;
		karyuku = (karyuku * 1000) / 9.81;
	}
}

if(rakim >= 900 && rakim <= 1000){

	if(karBolgesi == 1){
		
		katsayi = 0.8;
		karyuku = 0.8;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else if(karBolgesi == 2){
	
		katsayi = (((rakim - 900) * 0.1) / 100) + 0.95;
		karyuku = katsayi;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else if(karBolgesi == 3){
	
		katsayi = (((rakim - 900) * 0.05) / 100) + 1.3;
		karyuku = katsayi;
		karyuku = (karyuku * 1000) / 9.81;
	}
	
	else{
	
		katsayi = (((rakim - 900) * 0.1) / 100) + 1.5;
		karyuku = katsayi;
		karyuku = (karyuku * 1000) / 9.81;
	}
}

karyuku = karyuku.toFixed(2);

console.log("kar yükü: " + karyuku);

console.log("asıl rakım değeri: " + asilrakim);
console.log("hesap rakımı ise: " + rakim);

//************************* kar yükü bulma *******************************

/*
window.location.assign("http://localhost/tutorialsPoint/holymoly/send-mail.php?=" + "&adsoyad=" + "'. $adsoyad .'" + "&unvan=" + "'.$unvan.'" + "&sirketadi=" + "'. $sirketadi .'" + "&adres=" + "'. $adres .'" +"&ceptel=" + "'. $ceptel .'" + "&cepis=" + "'. $cepis .'" + "&faks=" + "'. $faks .'" + "&email=" + "'. $email .'" + "&boy=" + "'. $boy .'" + "&en=" + "'. $en .'" + "&yukseklik=" + "'. $yukseklik .'" + "&vincliKolonlar=" + "'. $vincliKolonlar .'" + "&vincKirisleri=" + "'. $vincKirisleri .'" + "&vincKirisSayisi=" + "'. $vincKirisSayisi .'" + "&kolonSayisi=" + "'. $kolonSayisi .'" + "&ruzgarKolonSayisi=" + "'. $ruzgarKolonSayisi .'" + "&standSayisi=" + "'. $standSayisi .'" + "&olukSayisi=" + "'. $olukSayisi .'" + "&makasSayisi=" + "'. $makasSayisi .'" + "&asikSayisi=" + "'. $asikSayisi .'" + "&kompleAraKat=" + "'. $kompleAraKat .'" + "&KompleAraKatHolSayisi=" + "'. $KompleAraKatHolSayisi .'" + "&KompleAraKatHolBoyutu=" + "'. $KompleAraKatHolBoyutu .'" + "&kismiAraKat=" + "'. $kismiAraKat .'" + "&kismiAraKatHolSayisi=" + "'. $kismiAraKatHolSayisi .'" + "&kismiAraKatAksSayisi=" + "'. $kismiAraKatAksSayisi .'" + "&kismiAraKatHolBoyutu=" + "'. $kismiAraKatHolBoyutu .'" + "&kismiAraKatAksBoyutu=" + "'. $kismiAraKatAksBoyutu .'" + "&genelHolSayisi=" + "'. $genelHolSayisi .'" + "&vinc=" + "'. $vinc .'" + "&arakat=" + "'. $arakat .'" + "&binayeri=" + "'. $binayeri .'" + "&lat=" + "'. $lat .'" + "&lng=" + "'. $lng .'" + "&clientip=" + "'. $clientip .'" + "&fabrika=" + "'. $fabrika .'" + "&vincKirisYeriEn=" + "'. $vincKirisYeriEn .'" + "&vincKirisYeriBoy=" + "'. $vincKirisYeriBoy .'" + "&araKatYeriEn=" + "'. $araKatYeriEn .'" + "&araKatYeriBoy=" + "'. $araKatYeriBoy .'" + "&ttPlak=" + "'. $ttPlak .'" + "&taliKiris=" + "'. $taliKiris .'" + "&arakatKiris=" + "'. $arakatKiris .'" + "&arakatKolon=" + "'. $arakatKolon .'" + "&depremBolgesi=" + depremBolgesi + "&karyuku=" + karyuku + "&karBolgesi=" + karBolgesi + "&rakim=" + asilrakim);*/

</script>
			
</body>
</html>';

?>