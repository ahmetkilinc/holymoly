<?php

	//define('UPLOAD_DIR', 'C:\xampp\htdocs\tutorialsPoint\holymoly\images/');
	//chmod(UPLOAD_DIR, 0755);
	$img = $_REQUEST['imgBase64'];

	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);

	$data = base64_decode($img);

	//$file = UPLOAD_DIR . uniqid() . '.png';

	$token = time();

	if (!file_exists('images/'.$token)){
		
		mkdir('images/'.$token, 0777, true);
	}

	$a = 'images/'.$token;

	$success = file_put_contents('images/'.$token.'/2Dimage.png', $data, 8);
/*
	$dir = "http://ahmetkilinc.net/holymoly/images/";

	//fclose($dir);

	//2D image ları silme kısmı (tamamlanmadı, permission denied hatası veriyor)

	foreach(glob($dir."*") as $file){
		//30 günden eski png dosyalarını sil.
		if(filectime($file) < time()){

			unlink($file);
		}
	}*/
?>	

<html>
<head>
	
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teklif Formu</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js" type="text/javascript"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <link rel="stylesheet" href="css/new-form-style.css">
  <link rel="stylesheet" href="css/map-style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<style>
	.navigation{
		
		padding-top: 15;
		text-align: left;
	}
	
	.btnGonder{
		
		background-color: #2E9AFE;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: justify;
		text-decoration: underline;
		font-size: 14px;
		margin: 0px 0px;
		margin-left: 15%;
		cursor: pointer;
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

  <div class='header'>
	  
	  
  </div>
<div class='maincontent'>
  <div class='navigation'>
	  
	
	  <img height="60" width="120" src="presets/logo.png"/>
	  <h2>Betonel Teklif Formu</h2>
  </div>
  <form class='form' action="depBol.php" onsubmit="return controlfonk()" method="post">
	  
	  <div class='control_group required'>
		  <div class='control_group'>
		  
      <div class='label'>
        <label for='input_required_adsoyad'>Adı Soyadı</label>
      </div>
      <div class='input'>
        <input id='input' required='required' pattern=".{4,}" type='text' name='adsoyad' value='' title="Gerçek Ad-Soyad giriniz lütfen">
		<span class='hint'>Adınızı ve Soyadınızı giriniz.</span>
      </div>
		  
	  <div class='label'>
        <label for='input_required_unvan'>Ünvanı</label>
      </div>
      <div class='input'>
        <input id='unvan' required='required' pattern=".{2,}" type='text' name='unvan' value=''>
		<span class='hint'>Çalıştığınız iş yerindeki ünvanınızı yazınız.</span>
      </div>
		 
	  <div class='label'>
        <label for='input_required_sirketadi'>Şirket Adı</label>
      </div>
      <div class='input'>
        <input id='sirketadi' required='required' pattern=".{3,}" type='text' name='sirketadi'>
		<span class='hint'>Şirketinizin adını yazınız.</span>
      </div>
	
	  <div class='label'>
        <label for='textarea'>Şirket Adresi</label>
      </div>
      <div class='input'>
        <textarea id='adres' required='required' type='text' name='adres'></textarea>
		<span class='hint'>Şirketinizin tam açık adresini yazınız.</span>
      </div>
		 
	  <div class='label'>
        <label for='number_01'>Telefon (Cep)</label>
      </div>
      <div class='input'>
        
		<input type="text" class="textfield" required='required' pattern=".{11,}" value="" id="extra7" name="ceptel" onkeypress="return isNumber(event)" />
		<span class='hint'>İrtibat numaranızı giriniz. (0555 555 55 55)</span>
      </div>
		  
	  <div class='label'>
        <label for='number_02'>Telefon (İş)</label>
      </div>
      <div class='input'>
		<input type="text" class="textfield" pattern=".{11,}" value="" id="extra7" name="cepis" onkeypress="return isNumber(event)" />
		<span class='hint'>İrtibat numaranızı giriniz. (Zorunlu Değil)</span>
      </div>
		  
	  <div class='label'>
        <label for='number_03'>Faks</label>
      </div>
      <div class='input'>
		<input type="text" class="textfield" pattern=".{11,}" value="" id="extra7" name="faks" onkeypress="return isNumber(event)" />
		<span class='hint'>Faks numaranızı giriniz. (Zorunlu Değil)</span>
      </div>
		  
	  <div class='label'>
        <label for='input_email'>E-Posta</label>
      </div>
      <div class='input'>
        <input id='email' required='required' type='email' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name='email'>
		<span class='hint'>E-Posta adresinizi giriniz.</span>
      </div>
			  			  
        <input id='input_boy' type='hidden' name='boy' readonly value = <?php echo $_GET['boy']; ?> >
			  
        <input id='input_en' type='hidden' name='en' readonly value= <?php echo $_GET['en']; ?>>
			  
        <input id='input_yukseklik' type='hidden' name='yukseklik' readonly value= <?php echo $_GET['yukseklik']; ?>>
		
		<input id='input_vincliKolonlar' type='hidden' name='vincliKolonlar' readonly value= <?php echo $_GET['vincliKolonlar']; ?>>
			  
		<input id='input_vincKirisleri' type='hidden' name='vincKirisleri' readonly value= <?php echo $_GET['vincKirisleri']; ?>>
			  
		<input id='input_vincKirisSayisi' type='hidden' name='vincKirisSayisi' readonly value= <?php echo $_GET['vincKirisSayisi']; ?>>
			  
		<input id='input_kolonSayisi' type='hidden' name='kolonSayisi' readonly value= <?php echo $_GET['kolonSayisi']; ?>>
			  
		<input id='input_ruzgarKolonSayisi' type='hidden' name='ruzgarKolonSayisi' readonly value= <?php echo $_GET['ruzgarKolonSayisi']; ?>>
			  
		<input id='input_standSayisi' type='hidden' name='standSayisi' readonly value= <?php echo $_GET['standSayisi']; ?>>

		<input id='input_olukSayisi' type='hidden' name='olukSayisi' readonly value= <?php echo $_GET['olukSayisi']; ?>>

		<input id='input_makasSayisi' type='hidden' name='makasSayisi' readonly value= <?php echo $_GET['makasSayisi']; ?>>
			  
		<input id='input_asikSayisi' type='hidden' name='asikSayisi' readonly value= <?php echo $_GET['asikSayisi']; ?>>

		<input id='input_kompleAraKat' type='hidden' name='kompleAraKat' readonly value= <?php echo $_GET['kompleAraKat']; ?>>

		<input id='input_KompleAraKatHolSayisi' type='hidden' name='KompleAraKatHolSayisi' readonly value= <?php echo $_GET['KompleAraKatHolSayisi']; ?>>

		<input id='input_KompleAraKatHolBoyutu' type='hidden' name='KompleAraKatHolBoyutu' readonly value= <?php echo $_GET['KompleAraKatHolBoyutu']; ?>>

		<input id='input_kismiAraKat' type='hidden' name='kismiAraKat' readonly value= <?php echo $_GET['kismiAraKat']; ?>>  
  
		<input id='input_kismiAraKatHolSayisi' type='hidden' name='kismiAraKatHolSayisi' readonly value= <?php echo $_GET['kismiAraKatHolSayisi']; ?>>

		<input id='input_kismiAraKatAksSayisi' type='hidden' name='kismiAraKatAksSayisi' readonly value= <?php echo $_GET['kismiAraKatAksSayisi']; ?>>	
			  
		<input id='input_kismiAraKatHolBoyutu' type='hidden' name='kismiAraKatHolBoyutu' readonly value= <?php echo $_GET['kismiAraKatHolBoyutu']; ?>>

		<input id='input_kismiAraKatAksBoyutu' type='hidden' name='kismiAraKatAksBoyutu' readonly value= <?php echo $_GET['kismiAraKatAksBoyutu']; ?>>
			  
		<input id='input_genelHolSayisi' type='hidden' name='genelHolSayisi' readonly value= <?php echo $_GET['genelHolSayisi']; ?>>
		
		<input id='input_vincKirisYeriEn' type='hidden' name='vincKirisYeriEn' readonly value= <?php echo $_GET['vincKirisYeriEn']; ?>>
		
		<input id='input_vincKirisYeriBoy' type='hidden' name='vincKirisYeriBoy' readonly value= <?php echo $_GET['vincKirisYeriBoy']; ?>>
			  
		<input id='input_araKatYeriEn' type='hidden' name='araKatYeriEn' readonly value= <?php echo $_GET['araKatYeriEn']; ?>>
			  
		<input id='input_araKatYeriBoy' type='hidden' name='araKatYeriBoy' readonly value= <?php echo $_GET['araKatYeriBoy']; ?>>
			  
		<input id='input_ttPlak' type='hidden' name='ttPlak' readonly value= <?php echo $_GET['ttPlak']; ?>>
			  
		<input id='input_taliKiris' type='hidden' name='taliKiris' readonly value= <?php echo $_GET['taliKiris']; ?>>
			  
		<input id='input_arakatKiris' type='hidden' name='arakatKiris' readonly value= <?php echo $_GET['arakatKiris']; ?>>
		
		<input id='input_arakatKolon' type='hidden' name='arakatKolon' readonly value= <?php echo $_GET['arakatKolon']; ?>>
			  
		<input id='input_ip' type='hidden' name='clientip' readonly value= <?php echo $_SERVER['REMOTE_ADDR']; ?>>
			  
		<input id='input_token' type='hidden' name='token' readonly value= <?php echo $token ?>>
		
		
		
		
		<input id='input_vincKirisiMetreKup' type='hidden' name='vincKirisiMetreKup' readonly value= <?php echo $_GET['vincKirisiMetreKup']; ?>>
		
		<input id='input_olukMetreKup' type='hidden' name='olukMetreKup' readonly value= <?php echo $_GET['olukMetreKup']; ?>>
		
		<input id='input_asikMetreKupT' type='hidden' name='asikMetreKupT' readonly value= <?php echo $_GET['asikMetreKupT']; ?>>
		
		<input id='input_makasMetreKup' type='hidden' name='makasMetreKup' readonly value= <?php echo $_GET['makasMetreKup']; ?>>
		
		<input id='input_kolonMetreKup' type='hidden' name='kolonMetreKup' readonly value= <?php echo $_GET['kolonMetreKup']; ?>>
		
		<input id='input_ongermeHalatiToplam' type="hidden" name="ongermeHalatiToplam" readonly value= <?php echo $_GET['ongermeHalatiToplam'] ?>>
		
		<input id='input_ongermeHalatiKarkas' type="hidden" name="ongermeHalatiKarkas" readonly value= <?php echo $_GET['ongermeHalatiKarkas'] ?>>
			  
		<input id='input_ongermeHalatiAraKatKiris' type="hidden" name="ongermeHalatiAraKatKiris" readonly value= <?php echo $_GET['ongermeHalatiAraKatKiris'] ?>>
		
		<input id='input_ankrajToplam' type="hidden" name="ankrajToplam" readonly value= <?php echo $_GET['ankrajToplam'] ?>>
		
		<input id='input_ttPlakMetreKup30' type="hidden" name="ttPlakMetreKup30" readonly value= <?php echo $_GET['ttPlakMetreKup30'] ?>>
		
		<input id='input_ttPlakMetreKup45' type="hidden" name="ttPlakMetreKup45" readonly value= <?php echo $_GET['ttPlakMetreKup45'] ?>>
		
		<input id='input_ttPlakMetreKup70' type="hidden" name="ttPlakMetreKup70" readonly value= <?php echo $_GET['ttPlakMetreKup70'] ?>>


			  
		<input id='input_fabrika' type='hidden' name='fabrika' readonly value=>
			  
		<input id='fabrikauzaklik' type="hidden" name="fabrikauzaklik" readonly value=>
		
		<input id='input_rakim' type='hidden' name='gercekrakim' readonly value=>
			  
	  <div class='label'>
        <label for='number_01'>Vinç Kaldırma Kapasitesi (ton)</label>
      </div>
      <div class='input'>
		<input type="text" class="textfield" required='required' value="0" id="extra7" name="vinc" onkeypress="return isNumber(event)" />
		<span class='hint'>Vinç kaldırma kapasitesini ton cinsinden yazınız.</span>
      </div>
		  
	  <div class='label'>
        <label for='number_01'>Arakat Hareketli Yükü (kg/m^2)</label>
      </div>
      <div class='input'>
		<select class="textfield" id="arakatyukId" name="arakatYuku">
			<option value="0">0 - Arakat Yok</option>
			<option value="350">350 - Ofis</option>
			<option value="500">500 - Hafif Atolye (Tekstil, Elektrik)</option>
			<option value="750">750 - Atolye </option>
			<option value="1000">1000 - Hafif Forklift</option>
			<option value="1250">1250 - Forklift, Kamyonet</option>
			<option value="1500">1500 - Tır, Kamyon</option>
			<option value="2000">2000 - Ağır İmalat</option>
			<option value="2500">2500 - Ağır Depolama (Cam, Kağıt, Matbaa)</option>
		</select>
      </div>
	<p>
	<br>
	<div class='label'>
        <label for='map'>Binanın Adresini Giriniz:</label>
    </div>

<div class="col-md-12">
	<div class="panel panel-default">
	  	<div class="panel-body">
		    <div class="row">
		    	<div class="col-md-12">
		    		<div class="input">
	     				<input id="address" required='required' value='' class="form-control"  type="text" name='binayeri' placeholder="Adres">
						<span class='hint'>Lütfen teklif almak istediğiniz binanın adresini yazınız, sonrasında tam yerini kırmızı fabrika simgesini oynatarak belirleyebilirsiniz.</span>
	     			</div>
		    	</div>
		    	<br> <br>
		    </div>
		    <div class="row">
		    	<div class="col-md-12">
					<div id="geoSearch"></div>
				</div>
		    </div>			  
		</div>
		<div class="panel-footer">
			<div class="row">
			  	<div class="col-md-12">
			  		<div class="col-md-6">
			  			<div class="col-md-4">
							<label for="latitud">Enlem</label>
			  			</div>	
			  			<div class="col-md-8">
			  				<input id="latitude" name='lat' class="form-control" type="text" value="" />
			  			</div>
			  		</div>
			  		<div class="col-md-6">
			  			<div class="col-md-4">
							<label for="longitude">Boylam</label>
			  			</div>	
			  			<div class="col-md-8">
			  				<input id="longitude" name='lng' class="form-control" type="text" value=""/>
			  			</div>					
			  		</div>
				</div>
			</div>
		</div>
	</div>
</div>	
	</p> 	  

	<div class="g-recaptcha" data-sitekey="6Lcx7ywUAAAAAEC0NLFsBjgYqole_0EA0ckT_iBs"></div>

	<div><br><br></div>
		  
	<div class='control_group buttons'>
      <div class='label'></div>
      <div class='input'>
        <input class='btnGonder' type='submit' onsubmit="controlfonk()" onclick="return confirm('Verdiğiniz Bilgileri Onaylıyor musunuz?')" value='Gönder'>
        <input class='btnGeri' type="button" onclick="window.location.assign('index.html');" value='Geri Dön'>
      </div>
    </div>
	</div>
    </div>
  </form>
<div class='navigation' style="text-align:center; height: 15px; font-size:8px;">
    <h2> BETONEL AŞ. Copyright &copy; <?php echo date("Y"); ?> .All rights reserved.</h2>
</div>
</div>
<script>
	
	function controlfonk(){
		
		
		var e = document.getElementById("arakatyukId").value;
		
		var arakatKomple = document.getElementById("input_kompleAraKat").value;
		
		var arakatKismi = document.getElementById("input_kismiAraKat").value;
		
		if((arakatKomple == "true" && e == 0) || (arakatKismi == "true" && e == 0)){
			
			alert("Lütfen arakat yükünü seçiniz. (Çiziminizde arakat var olduğu gözüküyor.)");
			return false;
		}
		
		var controlParameterUzaklik = document.getElementById('fabrikauzaklik').value;
		
		if(controlParameterUzaklik == 'undefined' || controlParameterUzaklik == null || controlParameterUzaklik == "" || document.getElementById('fabrika').value == '' || document.getElementById('fabrika').value == 'undefined' || document.getElementById('fabrika').value == null){
					   
		   alert("Harita üzerindeki kırmızı bina şeklini lütfen bina adresine taşıyınız. Aksi halde rakım bilgisine ulaşamayız.");
		   //window.history.back();
		   return false;
		}
		return true;
	}
	
	function isNumber(evt){
		
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		
		if(charCode > 31 && (charCode < 48 || charCode > 57)){
			//"window.location.assign('index.html');"
			return false;
		}
		return true;
	}

</script>
  	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/new-form-index.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8LekTJKEelUsRKGwKXaunkVJt8wHV7Gk&libraries=geometry&language=tr&region=TR">
	</script>	
	<script src="https://ahmetkilinc.net/holymoly/js/googlemaps.js"></script>
	<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
</body>
</html>