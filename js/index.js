class ThreeUtils{
	
    static setupApp({containerid = 'container', grid = true} = {}){
		
		var vincKirisiSayisi = 0;
		var kolonSayisi = 16;
		var ruzgarKolonSayisi = 2;
		var tumStandSayisi = 18;
		var olukSayisi = 14;
		var makasSayisi = 8;
		var KompleAraKatHolSayisi = 0;
		var KompleAraKatHolBoyutu = 0;
		var kismiAraKatHolSayisi = 0;
		var kismiAraKatAksSayisi = 0;
		var kismiAraKatHolBoyutu = 0;
		var kismiAraKatAksBoyutu = 0;
		var genelHolSayisi = 1;
		var asikSayisi = 12;
		var vincKirisYeriEn = 'A-B';
		var vincKirisYeriBoy = '0-7';
		var araKatYeriEn = 'A-B';
		var araKatYeriBoy = '0-7';
		var ttPlak = 0;
		var taliKiris = 0;
		var arakatKiris = 0;
		var arakatKolon = 0;
		var butunParcalar = 0;
		var olukEn = 0.4;
		var olukBoy = 0;
		var olukYukseklik = 0.4;
		var olukMetreKup = 0;
		
		var asikBoy = 0;
		var asikBoyH = 0;
		var asikMetreKupT = 0;
		var asikMetreKupH = 0;
		
		var makasAlan = 0;
		var makasAlanUcgen = 0;
		var makasMetreKup = 0;
		
		var makasAlanT = 0;
		var makasAlanUcgenT = 0;
		var makasMetreKupT = 0;
		
		//makaslar
		var makasHasanoglan12 = {
			
			fabrika : "hasanoglan",
			boy : [12, 14.5],
			en : [35, 25],
			yukseklik : 51.6,
			yukseklikUcgen : 25.75
		};
		
		var makasHasanoglan15 = {
			
			fabrika : "hasanoglan",
			boy : [14.5, 16.5],
			en : [35, 25],
			yukseklik : 51.6,
			yukseklikUcgen : 25.75
		};
		
		var makasHasanoglan16 = {
			
			fabrika : "hasanoglan",
			boy : [16.5, 18.5],
			en : [35, 30],
			yukseklik : 49.5,
			yukseklikUcgen : 24.75
		};
		
		var makasHasanoglan18 = {
			
			fabrika : "hasanoglan",
			boy : [18.5, 20.5],
			en : [35, 30],
			yukseklik : 49.5,
			yukseklikUcgen : 24.75
		};
		
		var makasHasanoglan20 = {
		
			fabrika : "hasanoglan",
			boy : [20.5, 22.5],
			en : [35, 30],
			yukseklik : 49.5,
			yukseklikUcgen : 24.75
		};
		
		var makasHasanoglan21 = {
			
			fabrika : "hasanoglan",
			boy : [22.5, 23.5],
			en : [43, 41.5],
			yukseklik : 49.5,
			yukseklikUcgen : 24.75
		};
		
		var makasHasanoglan23 = {
			
			fabrika : "hasanoglan",
			boy : [23.5, 26.5],
			en : [43, 41.5],
			yukseklik : 49.5,
			yukseklikUcgen : 24.75
		};
		
		var makasHasanoglan26 = {
			
			fabrika : "hasanoglan",
			boy : [26.5, 30],
			en : [43, 41.5],
			yukseklik : 49.5,
			yukseklikUcgen : 24.75
		};
		
		var makasTemelli7 = {
			
			fabrika : "temelli",
			boy : [7.5, 10.5],
			en : [35, 25],
			yukseklik : 53,
			yukseklikUcgen : 52
		};
		
		var makasTemelli9 = {
			
			fabrika : "temelli",
			boy : [10.5, 12.5],
			en : [35, 25],
			yukseklik : 53,
			yukseklikUcgen : 62
		};
		
		var makasTemelli12 = {
			
			fabrika : "temelli",
			boy : [12.5, 15.5],
			en : [35, 25],
			yukseklik : 53,
			yukseklikUcgen : 77
		};
		
		var makasTemelli16 = {
			
			fabrika : "temelli",
			boy : [15.5, 18],
			en : [35, 25],
			yukseklik : 49.5,
			yukseklikUcgen : 49.5
		};
		
		var makasTemelli18 = {
			
			fabrika : "temelli",
			boy : [18, 20.5],
			en : [35, 25],
			yukseklik : 49.5,
			yukseklikUcgen : 49.5
		};
		
		var makasTemelli20 = {
			
			fabrika : "temelli",
			boy : [20.5, 22.5],
			en : [35, 25],
			yukseklik : 49.5,
			yukseklikUcgen : 49.5
		};
		
		var makasTemelli21 = {
			
			fabrika : "temelli",
			boy : [22.5, 23.5],
			en : [43, 41.5],
			yukseklik : 37.3,
			yukseklikUcgen : 37.3
		};
		
		var makasTemelli23 = {
			
			fabrika : "temelli",
			boy : [23.5, 26.5],
			en : [43, 41.5],
			yukseklik : 37.3,
			yukseklikUcgen : 37.3
		};
		
		var makasTemelli26 = {
			
			fabrika : "temelli",
			boy : [26.5, 29.5],
			en : [43, 41.5],
			yukseklik : 37.5,
			yukseklikUcgen : 37.5
		};
		//makaslar end
		
		var asikYukseklikH = {
			
			fabrika : "hasanoglan",
			yirmibeslik : [15, 25, 8],
			yirmidokuzluk : [16, 29, 9],
			otuzikilik : [17, 32, 9],
			otuzdortluk : [17, 34, 9]
		};

		var asikYukseklikT = {
			
			fabrika : "temelli",
			yirmibeslik : [12, 25, 8],
			yirmiyedibucukluk : [18, 27.5, 7],
			yirmisekizlik : [15.5, 28, 9],
			otuzsekizlik : [26, 38, 9]
		};

        ThreeUtils.app = {};
        var app = ThreeUtils.app;
        app.container = document.getElementById(containerid);
        app.renderer = ThreeUtils.setupRenderer(app.container);

        app.scene = new THREE.Scene();
        var group = new THREE.Group();
        app.scene.add(group);
		var light1 = new THREE.DirectionalLight(0xFFFFFF, 1);
		light1.position.set(-100, -80, -150);
        var light = new THREE.DirectionalLight(0xFFFFFF, 1);
        light.position.set(100, 80, 130);
        group.add(light);
		group.add(light1);

        var size = app.renderer.getSize();
        app.camera = new THREE.PerspectiveCamera(45, size.width / size.height, 1, 1000);
        app.camera.position.set(- 40, 30, 100);

        app.controls = new THREE.TrackballControls(app.camera, app.renderer.domElement);

		//mouse ile hareket için control.
		app.controls.rotateSpeed = 0.9;
		app.controls.panSpeed = 0.5;
		app.controls.zoomSpeed = 0.9;
		//mouse-right button

		//app.controls.noZoom = false;
		app.controls.noPan = false;
		app.controls.staticMoving = true;
		app.controls.dynamicDampingFactor = 0.1;

		var geometry = new THREE.BoxGeometry(5, 5, 5);

        window.addEventListener('resize', ThreeUtils.onWindowResize, false);

        var Settings = function(){

            this.VincliKolonlar = false,
			this.Vinc_Kirisleri_Ekle = false,
			this.AraKatEkle = false,
			this.KismiAraKatEkle = false,
			this.kismiAraKatKaldir = false,
			this.araKatUzunlugu = 1,
			this.araKatGenisligi = 1,
            this.Boy = 60,
            this.En = 20,
			this.Yükseklik = 13,
            this.stepBoy = 8.57, //with number
            this.stepEn = 20, 	 //with alpha-beta
            this.a = 0,
            this.b = 0,
			this.ruzgarKolonSayisi = 2,
			this.vincsizKolonSayisi = 16,
			this.vincKirisiSayisi = 0,
			this.olukSayisi = 14,
			this.makasSayisi = 8,
			this.kolonStandSayisi = 18,
			this.asikSayisi = 12,
			this.araKatSayisi = 0,
			this.KismiaraKatSayisi = 0,
				
            this.redraw = function(){

				settings.EkranResetleme();
				//settings.objeSayisiniBul();
                this.stepBoy = parseFloat(this.Boy / ((this.Boy / 10) + 1));
                this.stepEn  = parseFloat(this.En / ((this.En / 30) + 1));

				app.grid = new LabeledGrid(60, 20, (60/ (60/10+1)), (60/ (60/30+1)), 13, [0,1,0], 0x000055, 0.21, true, "#000000", "left");
				app.scene.add(app.grid);
				//return app;

				this.stepEn = this.stepEn + ((this.En % this.stepEn) / (this.En  / this.stepEn));
				
                app.grid.resize(this.Boy, this.En, this.stepBoy.toFixed(2), this.stepEn.toFixed(2), this.Yükseklik);
				
				settings.RuzgarKolonlariEkle();
				
				if(this.AraKatEkle === true){
					
					settings.AraKatEkleme();
				}
				
				else{
					
					settings.AraKatKaldir();
				}
				
				if(this.VincliKolonlar === true){
					
					settings.VincKirisleriKaldir();
					settings.kolEkle();
				}

				else{

					settings.VincsizKolonEkle();
				}

				//GUI vinç kirişleri aktif mi?
				if(this.Vinc_Kirisleri_Ekle === true){
					
					settings.VincKirisiEkle();
				}

				else{
					
					settings.VincKirisleriKaldir();
				}
				
				genelHolSayisi = Math.round((settings.En - (settings.En % settings.stepEn)) / settings.stepEn);
				
				//console.log(genelHolSayisi);
				
				var group = new THREE.Group();
				var light1 = new THREE.DirectionalLight(0xFFFFFF, 1);
				light1.position.set(-100, -80, -150);
				var light = new THREE.DirectionalLight(0xFFFFFF, 1);
				light.position.set(100, 80, 130);
				group.add(light);
				group.add(light1);
				app.scene.add(group);
			};
			//Obje eklemeler başlangıç*
			
			//vinçli kolon ekleme
			this.kolEkle = function(){
				
				//orta kolon kontrolü, varsa fonksiyona git.
				if(settings.En / settings.stepEn > 1){
						
					this.VincliOrtaKolonEkle();
				}
				
				else{
					
					var manager = new THREE.LoadingManager();
					var loader = new THREE.OBJLoader(manager);
					var fileloader = new THREE.FileLoader();
					this.makasEkle();
					this.olukEkle();
					this.asikEkle();
					settings.KolonAltObjEkle();
					//this.VincKirisiEkle();
					
					if(this.AraKatEkle === false){
					
						fileloader.load('blenderObjects/VinçliKenarKolon14.obj', function(data){

							for(var i = 0; i < (settings.Boy / settings.stepBoy); i++){

								var selectedItem = app.scene.getObjectByName("VincliKenarKolonEkleX" + i);
								app.scene.remove(selectedItem);
								var selectedItem1 = app.scene.getObjectByName("VincliKenarKolonEkleY" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("VincsizKenarKolonX" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("VincsizKenarKolonY" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("AraKatKenarKolonX" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("AraKatKenarKolonY" + i);
								app.scene.remove(selectedItem1);

								var object = loader.parse(data);
								object.position.set(2.7 + (settings.En * 1), 0, 5 - (settings.stepBoy * i));
								object.rotateY(-1.6);
								object.name = "VincliKenarKolonEkleX" + i;
								object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
								app.scene.add(object);

								var object = loader.parse(data);
								object.position.set(-2.9, 0, -5 - (settings.stepBoy * i));
								object.rotateY(1.58);
								object.name = "VincliKenarKolonEkleY" + i;
								object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
								app.scene.add(object);
							}
						},
							function(xhr){

							// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
							},
							//if download fails
							function(xhr){

							// console.error('An error happened : ' + xhr);
							}
						);
					}
					//arakat vinçli kenar kolonlarını ekleme kısmı
					else{
						
						fileloader.load('blenderObjects/AraKatVincliKenarKolon.obj', function(data){

							for(var i = 0; i < (settings.Boy / settings.stepBoy); i++){

								var selectedItem = app.scene.getObjectByName("VincliKenarKolonEkleX" + i);
								app.scene.remove(selectedItem);
								var selectedItem1 = app.scene.getObjectByName("VincliKenarKolonEkleY" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("VincsizKenarKolonX" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("VincsizKenarKolonY" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("AraKatKenarKolonX" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("AraKatKenarKolonY" + i);
								app.scene.remove(selectedItem1);

								var object = loader.parse(data);
								object.position.set(0 + (settings.En * 1), 0, 0.32 - (settings.stepBoy * i));
								object.rotateY(-1.6);
								object.name = "VincliKenarKolonEkleX" + i;
								object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
								app.scene.add(object);

								var object = loader.parse(data);
								object.position.set(0, 0, - 0.43 - (settings.stepBoy * i));
								object.rotateY(1.58);
								object.name = "VincliKenarKolonEkleY" + i;
								object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
								app.scene.add(object);

							}
						},
							function(xhr){

							// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
							},
							//if download fails
							function(xhr){

							// console.error('An error happened : ' + xhr);
							}
						);
					}
				}
			}
			//vinçsiz kolon ekleme fonksiyonu
			this.VincsizKolonEkle = function(){

				//orta kolon kontrolü, varsa fonksiyona git.
				if(settings.En / settings.stepEn > 1){
						
					this.VincsizOrtaKolonEkle();
				}
				
				else{
					
					var manager = new THREE.LoadingManager();
					var loader = new THREE.OBJLoader(manager);
					var mtlLoader = new THREE.MTLLoader();
					var objLoader = new THREE.OBJLoader();
					var fileloader = new THREE.FileLoader();
					
					this.makasEkle();
					this.olukEkle();
					this.asikEkle();
					settings.KolonAltObjEkle();
					settings.VincKirisleriKaldir();
					
					//rüzgar kolonlarının alt standlarını oluşturma.
												
					fileloader.load('blenderObjects/kolonAltlik.obj', function(data){
												
						for(var i = 0; i <= ((settings.En - (settings.En % settings.stepEn)) / (settings.stepEn / 2)) - 1; i++){
							
							var selectedItem = app.scene.getObjectByName("RuzgarKolonAltÖn" + i);
							app.scene.remove(selectedItem);
							var selectedItem = app.scene.getObjectByName("RuzgarKolonAltArka" + i);
							app.scene.remove(selectedItem);
							                                        
							var object = loader.parse(data);
							object.position.set((settings.stepEn / 2) + (settings.stepEn / 2) * i, 0, - 2.1);
							object.name = "RuzgarKolonAltÖn" + i;
							object.scale.set(0.21, 0.21, 0.21);
							object.traverse(function (child){
									
								if(child instanceof THREE.Mesh)
									child.material.color.setHex(0x969696);
							});
							app.scene.add(object);
							
							var object = loader.parse(data);
							object.position.set((settings.stepEn / 2) + (settings.stepEn / 2) * i, 0, - 1.95 - (settings.Boy - (settings.Boy % settings.stepBoy)));
							object.name = "RuzgarKolonAltArka" + i;
							object.scale.set(0.21, 0.21, 0.21);
							object.traverse(function (child){
									
								if(child instanceof THREE.Mesh)
									child.material.color.setHex(0x969696);
							});
							
							app.scene.add(object);
						}
                    },
                        function(xhr){
 
                          //console.log((xhr.loaded / xhr.total * 100) + '% loaded');
                        },
                          //if download fails
                        function(xhr){

                           //console.error('An error happened : ' + xhr);
                        }
                    );
					
					//***rüzgar kolonlarını oluşturma ve ekleme.
					for (var i = 0; i <= ((settings.En - (settings.En % settings.stepEn)) / (settings.stepEn / 2)) - 1; i++){
						
						var selectedItem1 = app.scene.getObjectByName("araKatÖn" + i);
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("araKatArka" + i);
						app.scene.remove(selectedItem1);
						
						var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({ color: 0xffffff }));
						object.position.set((settings.stepEn / 2) + (settings.stepEn / 2) * i, (settings.Yükseklik / 2.25) , 0);
						object.scale.set(0.2, settings.Yükseklik / 5.65, 0.2);
						object.children.color = 0xff0000;
						object.castShadow = true;
						object.name = "araKatÖn" + i;
						object.receiveShadow = true;
						app.scene.add(object);
						
						var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({ color: 0xffffff }));
						object.position.set((settings.stepEn / 2) + (settings.stepEn / 2) * i, (settings.Yükseklik / 2.25), - (settings.Boy - (settings.Boy % settings.stepBoy)));
						object.scale.set(0.2, settings.Yükseklik / 5.65, 0.2);
						object.children.color = 0xff0000;
						object.castShadow = true;
						object.name = "araKatArka" + i;
						object.receiveShadow = true;
						app.scene.add(object);
					}
					
					if(this.AraKatEkle === false){
						
						fileloader.load('blenderObjects/VinçsizKenarKolon.obj', function(data){
						
						//console.log("stepEn kolon fonk içinde: " + settings.stepBoy);						
						for(var i = 0; i < (settings.Boy / settings.stepBoy); i++){
							
							//scene'deki objeleri isme göre bulup eskilerini sil
							var selectedItem = app.scene.getObjectByName("VincliKenarKolonEkleX" + i);
							app.scene.remove(selectedItem);
							var selectedItem1 = app.scene.getObjectByName("VincliKenarKolonEkleY" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("VincsizKenarKolonX" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("VincsizKenarKolonY" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("AraKatKenarKolonX" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("AraKatKenarKolonY" + i);
							app.scene.remove(selectedItem1);
                                        
							var object = loader.parse(data);
							object.position.set(2.5 + (settings.En * 1), 0, 5 - (settings.stepBoy * i));
							object.rotateY(-1.6);
							object.name = "VincsizKenarKolonX" + i;
							object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
							app.scene.add(object);
							
							var object = loader.parse(data);
							object.position.set(-2.7, 0, -5 - (settings.stepBoy * i));
							object.rotateY(1.58);
							object.name = "VincsizKenarKolonY" + i;
							object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
							app.scene.add(object);
						}
                    },
                        function(xhr){
						   //console.log((xhr.loaded / xhr.total * 100) + '% loaded');
                        },
                           //Objenin indirilmesinde hata olur ise
                        function(xhr){
                           console.error('An error happened : ' + xhr);
                        }
                    );
					}
					
					//araKat ekleme açık ise kolonları değiştir.
					else{
						
						fileloader.load('blenderObjects/AraKatKenarKolonSon.obj', function(data){
						
							//console.log("stepEn kolon fonk içinde: " + settings.stepBoy);						
							for(var i = 0; i < (settings.Boy / settings.stepBoy); i++){

								//scene'deki objeleri isme göre bulup eskilerini sil
								var selectedItem = app.scene.getObjectByName("VincliKenarKolonEkleX" + i);
								app.scene.remove(selectedItem);
								var selectedItem1 = app.scene.getObjectByName("VincliKenarKolonEkleY" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("VincsizKenarKolonX" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("VincsizKenarKolonY" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("AraKatKenarKolonX" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("AraKatKenarKolonY" + i);
								app.scene.remove(selectedItem1);

								var object = loader.parse(data);
								object.position.set(0 + (settings.En * 1), 0, 0.32 - (settings.stepBoy * i));
								object.rotateY(-1.6);
								object.name = "AraKatKenarKolonX" + i;
								object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
								app.scene.add(object);

								var object = loader.parse(data);
								object.position.set(0, 0, - 0.43 - (settings.stepBoy * i));
								object.rotateY(1.58);
								object.name = "AraKatKenarKolonY" + i;
								object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
								app.scene.add(object);
							}
                    	},
							function(xhr){
							   //console.log((xhr.loaded / xhr.total * 100) + '% loaded');
							},
							   //Objenin indirilmesinde hata olur ise
							function(xhr){
							   console.error('An error happened : ' + xhr);
							}
                    	);
					}
				}
			}
			//Vinçsiz orta kolon ekleme
			this.VincsizOrtaKolonEkle = function(){

				var manager = new THREE.LoadingManager();
				var loader = new THREE.OBJLoader(manager);
				var fileloader = new THREE.FileLoader();
				this.makasEkle();
				this.olukEkle();
				this.asikEkle();
				this.VincKirisleriKaldir();
				settings.KolonAltObjEkle();
					
				if(this.AraKatEkle === false){
				//iki for ile x ve y ekseninde çoğalan vinçsiz orta kolonlar oluşturuluyor.
					fileloader.load('blenderObjects/VinçsizOrtaKolon.obj', function(data){

						for(var i = 0; i < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1; i++){

							var selectedItem1 = app.scene.getObjectByName("x" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("y" + i);
							app.scene.remove(selectedItem1);
							var selectedItem = app.scene.getObjectByName("VincliKenarKolonEkleX" + i);
							app.scene.remove(selectedItem);
							var selectedItem1 = app.scene.getObjectByName("VincliKenarKolonEkleY" + i);
							app.scene.remove(selectedItem1);
							/*var selectedItem1 = app.scene.getObjectByName("VincsizKenarKolonX" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("VincsizKenarKolonY" + i);
							app.scene.remove(selectedItem1);*/
							var selectedItem1 = app.scene.getObjectByName("t" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("k" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("z" + i + j);
							//app.scene.remove(selectedItem1);

							if(settings.En % settings.stepEn === 0){

								for(var j = 0; j < ((settings.En / settings.stepEn) - 1); j++){

									var selectedItem1 = app.scene.getObjectByName("z" + i + j);
									app.scene.remove(selectedItem1);

									var object = loader.parse(data);
									object.position.set(2.5 + (settings.stepEn * (j + 1)), 0, 5 - (settings.stepBoy * i));
									object.rotateY(-1.6);
									object.name = "z" + i + j;
									object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
									app.scene.add(object);
								}
							}

							else{

								for(var j = 0; j < ((settings.En / settings.stepEn) - 2); j++){

									var selectedItem1 = app.scene.getObjectByName("z" + i + j);
									app.scene.remove(selectedItem1);

									var object = loader.parse(data);
									object.position.set(2.5 + (settings.stepEn * (j + 1)), 0, 5 - (settings.stepBoy * i));
									object.rotateY(-1.6);
									object.name = "z" + i + j;
									object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
									app.scene.add(object);
								}
							}
						}
					},
						function(xhr){

							// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
						},
							  //if download fails
						function(xhr){

							   // console.error('An error happened : ' + xhr);
						}
					);
					//kenar kolonlar ayrı şekilde oluşturuldu.
					fileloader.load('blenderObjects/VinçsizKenarKolon.obj', function(data){

						for(var i = 0; i < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1; i++){

							/*var selectedItem1 = app.scene.getObjectByName("VincsizKenarKolonX" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("VincsizKenarKolonY" + i);
							app.scene.remove(selectedItem1);*/
							
							var object = loader.parse(data);
							object.position.set(2.5 + (settings.En - (settings.En % settings.stepEn)), 0, 5 - (settings.stepBoy * i));
							object.rotateY(-1.6);
							object.name = "VincsizKenarKolonX" + i;
							object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
							app.scene.add(object);

							var object = loader.parse(data);
							object.position.set(-2.7, 0, -5 - (settings.stepBoy * i));
							object.rotateY(1.58);
							object.name = "VincsizKenarKolonY" + i;
							object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
							app.scene.add(object);
						}
					},
						function(xhr){

							// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
						},
							  //if download fails
						function(xhr){

							   // console.error('An error happened : ' + xhr);
						}
					);
				}
				//bir holden fazla büyüdüğü zaman ve arakat eklendiği durumda kolonları 
				else{
					
					settings.AraKatKolonlariEkle();
				}
			}
			//Vinçli orta kolon ekleme
			this.VincliOrtaKolonEkle = function(){
				
				var manager = new THREE.LoadingManager();
				var loader = new THREE.OBJLoader(manager);
				var fileloader = new THREE.FileLoader();
				this.makasEkle();
				this.olukEkle();
				this.asikEkle();
				settings.KolonAltObjEkle();
					
				if(this.AraKatEkle === false){
				//iki for ile x ve y ekseninde çoğalan vinçsiz orta kolonlar oluşturuluyor.
					fileloader.load('blenderObjects/VinçliKenarKolonlar/VinçliOrtaKolon14.obj', function(data){

						for(var i = 0; i < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1; i++){

							var selectedItem1 = app.scene.getObjectByName("x" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("y" + i);
							app.scene.remove(selectedItem1);
							/*var selectedItem = app.scene.getObjectByName("VincliKenarKolonEkleX" + i);
							app.scene.remove(selectedItem);
							var selectedItem1 = app.scene.getObjectByName("VincliKenarKolonEkleY" + i);
							app.scene.remove(selectedItem1);*/
							var selectedItem1 = app.scene.getObjectByName("VincsizKenarKolonX" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("VincsizKenarKolonY" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("z" + i + j);
							//app.scene.remove(selectedItem1);

							if(settings.En % settings.stepEn === 0){

								for(var j = 0; j < ((settings.En / settings.stepEn) - 1); j++){

									var selectedItem1 = app.scene.getObjectByName("z" + i + j);
									app.scene.remove(selectedItem1);

									var object = loader.parse(data);
									object.position.set(2.5 + (settings.stepEn * (j + 1)), 0, 5 - (settings.stepBoy * i));
									object.rotateY(-1.6);
									object.name = "z" + i + j;
									object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
									app.scene.add(object);
								}
							}

							else{

								for(var j = 0; j < ((settings.En / settings.stepEn) - 2); j++){

									var selectedItem1 = app.scene.getObjectByName("z" + i + j);
									app.scene.remove(selectedItem1);

									var object = loader.parse(data);
									object.position.set(2.5 + (settings.stepEn * (j + 1)), 0, 5 - (settings.stepBoy * i));
									object.rotateY(-1.6);
									object.name = "z" + i + j;
									object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
									app.scene.add(object);
								}
							}
						}
					},
						function(xhr){

							//console.log((xhr.loaded / xhr.total * 100) + '% loaded');
						},
							  //if download fails
						function(xhr){

							// console.error('An error happened : ' + xhr);
						}
					);
					//kenar kolonlar ayrı şekilde oluşturuldu.
					fileloader.load('blenderObjects/VinçliKenarKolon14.obj', function(data){

						for(var i = 0; i < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1; i++){

							/*var selectedItem1 = app.scene.getObjectByName("VincliKenarKolonEkleX" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("VincliKenarKolonEkleX" + i);
							app.scene.remove(selectedItem1);*/
							
							var object = loader.parse(data);
							object.position.set(2.7 + (settings.En - (settings.En % settings.stepEn)), 0, 5 - (settings.stepBoy * i));
							object.rotateY(-1.6);
							object.name = "VincliKenarKolonEkleX" + i;
							object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
							app.scene.add(object);

							var object = loader.parse(data);
							object.position.set(-2.9, 0, -5 - (settings.stepBoy * i));
							object.rotateY(1.58);
							object.name = "VincliKenarKolonEkleY" + i;
							object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
							app.scene.add(object);

						}
					},
						function(xhr){

							// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
						},
							  //if download fails
						function(xhr){

						// console.error('An error happened : ' + xhr);
						}
					);
				}
				
				else{
					
					settings.AraKatKolonlariEkle();
				}
			}
			//makas ekleme fonk
			this.makasEkle = function(){
				
				if(settings.En / settings.stepEn > 1){
					
					var manager = new THREE.LoadingManager();
					var loader = new THREE.OBJLoader(manager);
					var fileloader = new THREE.FileLoader();
					//gui değiştikten sonra, en'e göre soldan ilk makaslar.
					fileloader.load('blenderObjects/makasD1.obj', function(data){
					
						for(var i = 0; i < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1; i++){
							
							var selectedItem1 = app.scene.getObjectByName("makasIlk" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("makasElse" + i);
							app.scene.remove(selectedItem1);

							var object = loader.parse(data);
							object.position.set(0 + (settings.stepEn / 2), settings.Yükseklik / 1.15, 5 - (settings.stepBoy * i));
							object.rotateY(-1.58);
							object.name = "makasIlk" + i;
							object.scale.set(0.21, 0.2, settings.stepEn / 105);
							app.scene.add(object);
						}
                    },
                        function (xhr) {
                        
                            //console.log((xhr.loaded / xhr.total * 100) + '% loaded');
                        },
                          //if download fails
                        function (xhr) {
                        
                           // console.error('An error happened : ' + xhr);
                        }
                    );
					
					//iki for ile x ve y ekseninde çoğalan makaslar oluşturuluyor.
					fileloader.load('blenderObjects/makasD1.obj', function(data){
												
							for(var i = 0; i < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1; i++){
									
								// arta kalan bir bölüm yoksa bu kısma girilecek.
								if(settings.En % settings.stepEn === 0){
									
									for(var j = 0; j < (settings.En / settings.stepEn) - 1; j++){

										var selectedItem1 = app.scene.getObjectByName("makas" + i + j);
										app.scene.remove(selectedItem1);

										var object = loader.parse(data);
										object.position.set(0 + (settings.stepEn / 2) + (settings.stepEn * (j + 1)), settings.Yükseklik / 1.15, 5 - (settings.stepBoy * i));
										object.rotateY(-1.58);
										object.name = "makas" + i + j;
										object.scale.set(0.2, 0.2, settings.stepEn / 104);
										app.scene.add(object);
									}
								}
								
								else{
									
									for(var j = 0; j < (settings.En / settings.stepEn) - 2; j++){

										var selectedItem1 = app.scene.getObjectByName("makas" + i + j);
										app.scene.remove(selectedItem1);

										var object = loader.parse(data);
										object.position.set(0 + (settings.stepEn / 2) + (settings.stepEn * (j + 1)), settings.Yükseklik / 1.15, 5 - (settings.stepBoy * i));
										object.rotateY(-1.58);
										object.name = "makas" + i + j;
										object.scale.set(0.2, 0.2, settings.stepEn / 104);
										app.scene.add(object);
									}
								}
							}
                    },
                        function(xhr){
 
                           // console.log((xhr.loaded / xhr.total * 100) + '% loaded');
                        },
                          //if download fails
                        function(xhr){
                        
                           // console.error('An error happened : ' + xhr);
                        }
                    );
				}
				
				else{
					
				var manager = new THREE.LoadingManager();
				var loader = new THREE.OBJLoader(manager);
				var fileloader = new THREE.FileLoader();
				
				fileloader.load('blenderObjects/makasD1.obj', function(data){
					
						for(var i = 0; i < (settings.Boy / settings.stepBoy); i++){
							
							var selectedItem1 = app.scene.getObjectByName("makasElse" + i);
							app.scene.remove(selectedItem1);

							var object = loader.parse(data);
							object.position.set(0 + (settings.stepEn / 2), settings.Yükseklik / 1.15, 4.8 - (settings.stepBoy * i));
							object.rotateY(-1.58);
							object.name = "makasElse" + i;
							object.transparent = true;
							object.opacity = 0.1;
							object.scale.set(0.2, 0.2, 0.19);
							//console.log(object)
							app.scene.add(object);
						}
                    },
                        function (xhr){
                        
                            //console.log((xhr.loaded / xhr.total * 100) + '% loaded');
                        },
                          //if download fails
                        function (xhr){
                        
                           // console.error('An error happened : ' + xhr);
                        }
                    );
				}
			}
			//kolon alt objelerinin eklenmesi
			this.KolonAltObjEkle = function(){
				
				var manager = new THREE.LoadingManager();
				var mtlLoader = new THREE.MTLLoader();
				var objLoader = new THREE.OBJLoader();
				var fileloader = new THREE.FileLoader();
				var objLoader = new THREE.OBJLoader(manager);
				
				if(settings.En / settings.stepEn > 1){

					fileloader.load('blenderObjects/kolonAltlik.obj', function(data){
												
					for(var i = 0; i < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1; i++){

						if(settings.En % settings.stepEn === 0){
								
							for(var j = 0; j < ((settings.En / settings.stepEn) - 1); j++){

								var selectedItem1 = app.scene.getObjectByName("z" + i + j);
								//app.scene.remove(selectedItem1);
								
								var object = objLoader.parse(data);
								object.position.set((settings.stepEn * (j + 1)), 0, - 2 - (settings.stepBoy * i));
								object.name = "kolonAltlik" + i + j;
								object.scale.set(0.21, 0.21, 0.21);
								object.traverse(function (child){

								if(child instanceof THREE.Mesh)
									child.material.color.setHex(0x969696);
								});
								app.scene.add(object);
							}
							
							if(settings.AraKatEkle === true){
								
								if(settings.stepEn / 3 >= 7 || (settings.En === 60) || (settings.En === 61) || (settings.En === 62) || (settings.En === 63)){
									
									for(var j = 0; j < ((settings.En / (settings.stepEn / 3)) - 1); j++){

										var object = objLoader.parse(data);
										object.position.set(((settings.stepEn / 3) * (j + 1)), 0, - 2 - (settings.stepBoy * i));
										object.name = "kolonAltlikAraKat" + i + j;
										object.scale.set(0.21, 0.21, 0.21);
										object.traverse(function (child){

										if(child instanceof THREE.Mesh)
											child.material.color.setHex(0x969696);
										});
										app.scene.add(object);
									}
								}
								
								else{
									
									for(var j = 0; j < ((settings.En / (settings.stepEn / 2)) - 1); j++){

										var object = objLoader.parse(data);
										object.position.set(((settings.stepEn / 2) * (j + 1)), 0, - 2 - (settings.stepBoy * i));
										object.name = "kolonAltlikAraKat" + i + j;
										object.scale.set(0.21, 0.21, 0.21);
										object.traverse(function (child){

										if(child instanceof THREE.Mesh)
											child.material.color.setHex(0x969696);
										});
										app.scene.add(object);
									}
								}
							}
						}
						//en ara sayılar olduğunda orta kolon altlarını oluşturmak
						else{
							
							for(var j = 0; j < ((settings.En / (settings.stepEn)) - 2); j++){

								var selectedItem1 = app.scene.getObjectByName("z" + i + j);
								//app.scene.remove(selectedItem1);

								var object = objLoader.parse(data);
								object.position.set((settings.stepEn * (j + 1)), 0, - 2 - (settings.stepBoy * i));
								object.name = "kolonAltlik" + i + j;
								object.scale.set(0.21, 0.21, 0.21);
								object.traverse(function (child){

									if(child instanceof THREE.Mesh)
										child.material.color.setHex(0x969696);
								});
								app.scene.add(object);
							}
							
							if(settings.AraKatEkle === true){
								
								if(settings.stepEn / 3 >= 7 || (settings.En === 60) || (settings.En === 61) || (settings.En === 62) || (settings.En === 63)){
								
									for(var j = 0; j < ((settings.En / (settings.stepEn / 3)) - 2); j++){

										var object = objLoader.parse(data);
										object.position.set(((settings.stepEn / 3) * (j + 1)), 0, - 2 - (settings.stepBoy * i));
										object.name = "kolonAltlikAraKat" + i + j;
										object.scale.set(0.21, 0.21, 0.21);
										object.traverse(function (child){

										if(child instanceof THREE.Mesh)
											child.material.color.setHex(0x969696);
										});
										app.scene.add(object);
									}
								}
								
								else{
									
									for(var j = 0; j < ((settings.En / (settings.stepEn / 2)) - 2); j++){

										var object = objLoader.parse(data);
										object.position.set(((settings.stepEn / 2) * (j + 1)), 0, - 2 - (settings.stepBoy * i));
										object.name = "kolonAltlikAraKat" + i + j;
										object.scale.set(0.21, 0.21, 0.21);
										object.traverse(function (child){

										if(child instanceof THREE.Mesh)
											child.material.color.setHex(0x969696);
										});
										app.scene.add(object);
									}
								}
							}
						}
					}
                },
                	function(xhr){
 
                		// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
                	},
                          //if download fails
                	function(xhr){
                        
                           // console.error('An error happened : ' + xhr);
                	}
                );
					//gui değiştiğinde kenar kolon altlarını oluşturma
					fileloader.load('blenderObjects/kolonAltlik.obj', function(data){

						var selectedItem1 = app.scene.getObjectByName("kolonAltlikSag" + i);
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("kolonAltlikSol" + i);
						app.scene.remove(selectedItem1);

						for(var i = 0; i < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1; i++){

							var object = objLoader.parse(data);
							object.position.set((settings.En - (settings.En % settings.stepEn)), 0,  - 2 -(settings.stepBoy * i));
							object.name = "kolonAltlikSag" + i;
							object.scale.set(0.21, 0.21, 0.21);
							object.traverse(function (child){

								if(child instanceof THREE.Mesh)
									child.material.color.setHex(0x969696);
							});
							app.scene.add(object);

							var object = objLoader.parse(data);
							object.position.set(0, 0,  - 2.3 -(settings.stepBoy * i));
							object.name = "kolonAltlikSol" + i;
							object.scale.set(0.21, 0.21, 0.21);
							object.traverse(function (child){

								if(child instanceof THREE.Mesh)
									child.material.color.setHex(0x969696);
							});
							app.scene.add(object);

						}
					},
						function(xhr){

						//console.log((xhr.loaded / xhr.total * 100) + '% loaded');
						},
						//if download fails
						function(xhr){

							   // console.error('An error happened : ' + xhr);
						}
					);	
				}

				else{
					
					fileloader.load('blenderObjects/kolonAltlik.obj', function(data){
						
						var selectedItem1 = app.scene.getObjectByName("kolonAltlikSag" + i);
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("kolonAltlikSol" + i);
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("kolonAltlikOrta" + i);
						app.scene.remove(selectedItem1);
												
						for(var i = 0; i < (settings.Boy / settings.stepBoy); i++){
							
							var object = objLoader.parse(data);
							object.position.set(0 + (settings.En - (settings.En % settings.stepEn)), 0,  - 1.9 - (settings.stepBoy * i));
							object.name = "kolonAltlikSag" + i;
							object.scale.set(0.2, 0.2, 0.2);
							object.traverse(function (child){

								if(child instanceof THREE.Mesh)
									child.material.color.setHex(0x969696);
							});
							app.scene.add(object);

							var object = objLoader.parse(data);
							object.position.set(0, 0,  - 2.2 - (settings.stepBoy * i));
							object.name = "kolonAltlikSol" + i;
							object.scale.set(0.2, 0.2, 0.2);
							object.traverse(function (child){

								if(child instanceof THREE.Mesh)
									child.material.color.setHex(0x969696);
							});
							app.scene.add(object);
							
							var object = objLoader.parse(data);
							object.position.set(10, 0, - 1.9 - (settings.stepBoy * i));
							object.name = "kolonAltlikOrta" + i;
							object.scale.set(0.2, 0.2, 0.2);
							object.traverse(function (child){

								if(child instanceof THREE.Mesh)
									child.material.color.setHex(0x969696);
							});
							if(settings.AraKatEkle === true){
								
								app.scene.add(object);
							}
						}
					},
						function(xhr){

							// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
						},
							  //if download fails
						function(xhr){

							   // console.error('An error happened : ' + xhr);
						}
					);	
				}
			}
			//aşık ekleme	
			this.asikEkle = function(){
				
				if(settings.En / settings.stepEn > 1){
					
					var manager = new THREE.LoadingManager();
					var loader = new THREE.OBJLoader(manager);                
					var fileloader = new THREE.FileLoader();
					
					for(var i = 0; i < (settings.En / settings.stepEn) * 9; i++){
							
							var selectedItem1 = app.scene.getObjectByName("asik" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("asik1" + i);
							app.scene.remove(selectedItem1);
						}

					fileloader.load('blenderObjects/asikust1.obj', function(data){
						
						for(var i = 0; i < (settings.stepEn / 2 / 1.95); i++){
							
								var selectedItem1 = app.scene.getObjectByName("asik" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("asik1" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("asik4" + i + j);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("asik5" + i + j);
								app.scene.remove(selectedItem1);

								var object = loader.parse(data);
								object.position.set(((settings.stepEn / 2) + 0.4) + (1.88 * i), 2.7 + settings.Yükseklik / 1.15 - (0.35 * i), - (settings.Boy - (settings.Boy % settings.stepBoy)) /2);
								object.rotateY(0);
								object.name = "asik4" + i + j;
								object.scale.set(0.3, 0.5, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 15.7));
								app.scene.add(object);

								var object = loader.parse(data);
								object.position.set(((settings.stepEn / 2) - 0.2) - (1.88 * i), 2.7 + settings.Yükseklik / 1.15 - (0.35 * i), - (settings.Boy - (settings.Boy % settings.stepBoy)) /2);
								object.rotateY(0);
								object.name = "asik5" + i + j;
								object.scale.set(0.3, 0.5, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 15.7));
								app.scene.add(object);

							}
						
						if(settings.En % settings.stepEn === 0){
							
							for(var j = 1; j < (settings.En / settings.stepEn); j++){

								for(var i = 0; i < (settings.stepEn / 2 / 1.95); i++){

									var selectedItem1 = app.scene.getObjectByName("asik" + i);
									app.scene.remove(selectedItem1);
									var selectedItem1 = app.scene.getObjectByName("asik1" + i);
									app.scene.remove(selectedItem1);
									var selectedItem1 = app.scene.getObjectByName("asik2" + i + j);
									app.scene.remove(selectedItem1);
									var selectedItem1 = app.scene.getObjectByName("asik3" + i + j);
									app.scene.remove(selectedItem1);

									var object = loader.parse(data);
									object.position.set(((settings.stepEn / 2) + 0.4) + (settings.stepEn * j) + (1.88 * i), 2.7 + settings.Yükseklik / 1.15 - (0.35 * i), - (settings.Boy - (settings.Boy % settings.stepBoy)) / 2);
									object.rotateY(0);
									object.name = "asik2" + i + j;
									object.scale.set(0.3, 0.5, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 15.7));
									app.scene.add(object);

									var object = loader.parse(data);
									object.position.set(((settings.stepEn / 2) - 0.1) + (settings.stepEn * j) - (1.88 * i), 2.7 + settings.Yükseklik / 1.15 - (0.35 * i), - (settings.Boy - (settings.Boy % settings.stepBoy)) / 2);
									object.rotateY(0);
									object.name = "asik3" + i + j;
									object.scale.set(0.3, 0.5, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 15.7));
									app.scene.add(object);

								}
							}
						}
						
						else{
							
							for(var j = 1; j < (settings.En / settings.stepEn) - 1; j++){

								for(var i = 0; i < (settings.stepEn / 2 / 1.95); i++){

									var selectedItem1 = app.scene.getObjectByName("asik" + i);
									app.scene.remove(selectedItem1);
									var selectedItem1 = app.scene.getObjectByName("asik1" + i);
									app.scene.remove(selectedItem1);
									var selectedItem1 = app.scene.getObjectByName("asik2" + i + j);
									app.scene.remove(selectedItem1);
									var selectedItem1 = app.scene.getObjectByName("asik3" + i + j);
									app.scene.remove(selectedItem1);

									var object = loader.parse(data);
									object.position.set(((settings.stepEn / 2) + 0.4) + (settings.stepEn * j) + (1.88 * i), 2.7 + settings.Yükseklik / 1.15 - (0.35 * i), - (settings.Boy - (settings.Boy % settings.stepBoy)) / 2);
									object.rotateY(0);
									object.name = "asik2" + i + j;
									object.scale.set(0.3, 0.5, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 15.7));
									app.scene.add(object);

									var object = loader.parse(data);
									object.position.set(((settings.stepEn / 2) - 0.1) + (settings.stepEn * j) - (1.88 * i), 2.7 + settings.Yükseklik / 1.15 - (0.35 * i), - (settings.Boy - (settings.Boy % settings.stepBoy)) / 2);
									object.rotateY(0);
									object.name = "asik3" + i + j;
									object.scale.set(0.3, 0.5, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 15.7));
									app.scene.add(object);

								}
							}
						}
						},
							function (xhr) {

								//console.log((xhr.loaded / xhr.total * 100) + '% loaded');
							},
							  //if download fails
							function (xhr) {

							   // console.error('An error happened : ' + xhr);
							}
					);
				}
				//ilk scene için aşık oluşturmak.
				else{
					
					var manager = new THREE.LoadingManager();
					var loader = new THREE.OBJLoader(manager);
					var fileloader = new THREE.FileLoader();

					fileloader.load('blenderObjects/asikust1.obj', function(data){

						for(var i = 0; i < (settings.stepEn / 2.1 / 1.95); i++){	//düzelt.
							
							var selectedItem1 = app.scene.getObjectByName("asik" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("asik1" + i);
							app.scene.remove(selectedItem1);

							var object = loader.parse(data);
							object.position.set(((settings.stepEn / 2) - 0.2) - (1.95 * i), 2.7 + settings.Yükseklik / 1.15 - (0.35 * i), - (settings.Boy - (settings.Boy % settings.stepBoy)) / 2);
							object.rotateY(0);
							object.name = "asik" + i;
							object.scale.set(0.3, 0.5, 3.82);
							app.scene.add(object);
											
							var object = loader.parse(data);
							object.position.set(((settings.stepEn / 2) + 0.35) + (1.95 * i), 2.7 + settings.Yükseklik / 1.15 - (0.35 * i), - (settings.Boy - (settings.Boy % settings.stepBoy)) / 2);
							object.rotateY(0);
							object.name = "asik1" + i;
							object.scale.set(0.3, 0.5, 3.82);
							app.scene.add(object);
 

						}
						},
							function (xhr) {

								//console.log((xhr.loaded / xhr.total * 100) + '% loaded');
							},
							  //if download fails
							function (xhr) {

							   // console.error('An error happened : ' + xhr);
							}
					);
				}
			}
			//olukları ekleme fonksiyonu
			this.olukEkle = function(){
				
				if(settings.En / settings.stepEn > 1){
					
					var manager = new THREE.LoadingManager();
					var loader = new THREE.OBJLoader(manager);
					var fileloader = new THREE.FileLoader();
					
					fileloader.load('blenderObjects/oluk.obj', function(data){
						
						var selectedItem1 = app.scene.getObjectByName("olukSag1");
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("olukSol1");
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("olukIlk");
						app.scene.remove(selectedItem1);
						
						var object = loader.parse(data);
						object.position.set(-0.35, 0.85 + settings.Yükseklik / 1.178, - (settings.Boy - (settings.Boy % settings.stepBoy)) / 2);
						object.rotateY(0);
						object.name= "olukIlk";
						object.scale.set(0.2, 0.15, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 98.3284));
						app.scene.add(object);
						
						},
							function(xhr){

							},
							function(xhr){
								//console.error ...	
							}
						);

					fileloader.load('blenderObjects/oluk.obj', function(data){
						
						var selectedItem1 = app.scene.getObjectByName("olukSag1");
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("olukSol1");
						app.scene.remove(selectedItem1);
						
						if(settings.En % settings.stepEn === 0){
							
							for(var i = 0; i < (settings.En / settings.stepEn); i++){

								var selectedItem1 = app.scene.getObjectByName("oluk" + i);
								app.scene.remove(selectedItem1);

								var object = loader.parse(data);
								object.position.set(-0.2 + (settings.stepEn * (i + 1)), 0.85 + settings.Yükseklik / 1.178, - (settings.Boy - (settings.Boy % settings.stepBoy)) / 2);
								object.rotateY(0);
								object.name= "oluk" + i;
								object.scale.set(0.2, 0.15, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 98.3284));
								app.scene.add(object);
							}
						}
						
						else{
							
							for(var i = 0; i < (settings.En / settings.stepEn) - 1; i++){

								var selectedItem1 = app.scene.getObjectByName("oluk" + i);
								app.scene.remove(selectedItem1);

								var object = loader.parse(data);
								object.position.set(-0.2 + (settings.stepEn * (i + 1)), 0.85 + settings.Yükseklik / 1.178, - (settings.Boy - (settings.Boy % settings.stepBoy)) / 2);
								object.rotateY(0);
								object.name= "oluk" + i;
								object.scale.set(0.2, 0.15, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 98.3284));
								app.scene.add(object);
							}
						}
						},
							function(xhr){

							},
							function(xhr){
								//console.error ...	
							}
						);
				}
				
				else{
					//başlangıç olukları
					var manager = new THREE.LoadingManager();
					var loader = new THREE.OBJLoader(manager);
					var fileloader = new THREE.FileLoader();
					
					var selectedItem1 = app.scene.getObjectByName("olukIlk");
					app.scene.remove(selectedItem1);
					var selectedItem1 = app.scene.getObjectByName("olukSag1");
					app.scene.remove(selectedItem1);
					var selectedItem1 = app.scene.getObjectByName("olukSol1");
					app.scene.remove(selectedItem1);

					fileloader.load('blenderObjects/oluk.obj', function(data){

						var object = loader.parse(data);
						object.position.set(-0.3 + settings.stepEn, 0.7 + settings.Yükseklik / 1.15, - settings.Boy / 2);
						object.rotateY(0);
						object.name= "olukSag1";
						object.scale.set(0.2, 0.15, 0.6102);
						app.scene.add(object);
					},
						function(xhr){

						},
						function(xhr){
								//console.error ...	
						}
					);
					fileloader.load('blenderObjects/olukSol.obj', function(data){

						var object = loader.parse(data);
						object.position.set(-0.2, 0.6 + settings.Yükseklik / 1.15, - settings.Boy / 2);
						object.rotateY(0.0);
						object.name= "olukSol1";
						object.scale.set(0.2, 0.15, 0.6102);
						app.scene.add(object);
					},
						function(xhr){

						},
						function(xhr){

						}
					);
				}
			}
			//Vinç Kirişleri ekleme
			this.VincKirisiEkle = function(){
				
				if(this.VincliKolonlar === true){
			
					if(settings.En / settings.stepEn > 1){

						var manager = new THREE.LoadingManager();
						var loader = new THREE.OBJLoader(manager);
						var fileloader = new THREE.FileLoader();

						fileloader.load('blenderObjects/vincKirisiSon.obj', function(data){

							var selectedItem1 = app.scene.getObjectByName("vincKirisiSol");
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("vincKirisiSag");
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("vincKirisiSon");
							app.scene.remove(selectedItem1);
							
							//ilk kiriş position'ı farklı olduğu için ayrı şekilde üretildi
							var object = loader.parse(data);
							object.position.set(1, settings.Yükseklik / 1.65, (-(settings.Boy - (settings.Boy % settings.stepBoy)) + 0) / 2);
							object.rotateY(0);
							object.name= "vincKirisiIlk";
							object.scale.set(0.45, 0.6, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 39.2168));
							app.scene.add(object);
							
							var object = loader.parse(data);
							object.position.set(((settings.En / settings.stepEn) * settings.stepEn) - (settings.En % settings.stepEn) - 1.2, settings.Yükseklik / 1.65, (-(settings.Boy - (settings.Boy % settings.stepBoy)) + 0.5) / 2);
							object.rotateY(0);
							object.name= "vincKirisiSon";
							object.scale.set(0.45, 0.6, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 39.2168));
							app.scene.add(object);
							
							//geri kalan kirişler dinamik olarak eklendi ekrana
							
							if(settings.En % settings.stepEn === 0){
								
								for(var i = 1; i < (settings.En / settings.stepEn); i++){

									var selectedItem1 = app.scene.getObjectByName("vincKiris" + i);
									app.scene.remove(selectedItem1);
									var selectedItem1 = app.scene.getObjectByName("vincKiris1" + i);
									app.scene.remove(selectedItem1);

									var object = loader.parse(data);
									object.position.set(1 + (settings.stepEn * i), settings.Yükseklik / 1.6, (-(settings.Boy - (settings.Boy % settings.stepBoy)) + 0.5) / 2);
									object.rotateY(0);
									object.name = "vincKiris" + i;
									object.scale.set(0.45, 0.6, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 39.2168));
									app.scene.add(object);

									var object = loader.parse(data);
									object.position.set(-1.2 +(settings.stepEn * i), settings.Yükseklik / 1.6, (-(settings.Boy - (settings.Boy % settings.stepBoy)) + 0.5) / 2);
									object.rotateY(0);
									object.name= "vincKiris1" + i;
									object.scale.set(0.45, 0.6, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 39.2168));
									app.scene.add(object);
								}
							}
							
							else{
								
								for(var i = 1; i < (settings.En / settings.stepEn) - 1; i++){

									var selectedItem1 = app.scene.getObjectByName("vincKiris" + i);
									app.scene.remove(selectedItem1);
									var selectedItem1 = app.scene.getObjectByName("vincKiris1" + i);
									app.scene.remove(selectedItem1);

									var object = loader.parse(data);
									object.position.set(1 + (settings.stepEn * i), settings.Yükseklik / 1.6, (-(settings.Boy - (settings.Boy % settings.stepBoy)) + 0.5) / 2);
									object.rotateY(0);
									object.name= "vincKiris" + i;
									object.scale.set(0.45, 0.6, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 39.2168));
									app.scene.add(object);
									
									var object = loader.parse(data);
									object.position.set(- 1.2 +(settings.stepEn * i), settings.Yükseklik / 1.6, (-(settings.Boy - (settings.Boy % settings.stepBoy)) + 0.5) / 2);
									object.rotateY(0);
									object.name= "vincKiris1" + i;
									object.scale.set(0.45, 0.6, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 39.2168));
									app.scene.add(object);
								}
							}
						},	
							function(xhr){
								
							},
							function(xhr){
									//console.error ...	
							}
						);
					}	
						
					else{
						
						//console.log("vinç kirişi yükseklik değeri" + settings.Yükseklik);
							
						var manager = new THREE.LoadingManager();
						var loader = new THREE.OBJLoader(manager);
						var fileloader = new THREE.FileLoader();
						var selectedItem1 = app.scene.getObjectByName("vincKirisiIlk");
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("vincKirisiSon");
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("vincKirisiSol");
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("vincKirisiSag");
						app.scene.remove(selectedItem1);
						
						fileloader.load('blenderObjects/vincKirisiSon.obj', function(data){
							
							var object = loader.parse(data);
							object.position.set(-1.2 + settings.stepEn, settings.Yükseklik / 1.6, (-(settings.Boy - (settings.Boy % settings.stepBoy)) + 0.5) / 2);
							object.rotateY(0);
							object.name= "vincKirisiSol";
							object.scale.set(0.45, 0.6, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 39.2168));
							app.scene.add(object);
						},
							function(xhr){

							},					
							function(xhr){
								//console.error ...	
							}
						);
						fileloader.load('blenderObjects/vincKirisiSon.obj', function(data){

							var object = loader.parse(data);
							object.position.set(1, settings.Yükseklik / 1.6, (-(settings.Boy - (settings.Boy % settings.stepBoy)) + 0.5) / 2);
							object.rotateY(0.0);
							object.name= "vincKirisiSag";
							object.scale.set(0.45, 0.6, ((settings.Boy - (settings.Boy % settings.stepBoy)) / 39.2168));
							app.scene.add(object);
						},
							function(xhr){

							},
							function(xhr){

							}
						);
					}	
				}
				else{
					
					settings.Vinc_Kirisleri_Ekle = false;
					
					alert("Vinçli kolonlar aktif değilken vinç kirişleri açılamaz, Vinçli Kolonlar seçeneğini seçtikten sonra tekrar deneyiniz.");
					
					settings.VincKirisleriKaldir();
				}
			}
			//Vinç Kirişlerini kaldırma işlemi
			this.VincKirisleriKaldir = function(){
				
				var selectedItem1 = app.scene.getObjectByName("vincKirisiIlk");
				app.scene.remove(selectedItem1);
				var selectedItem1 = app.scene.getObjectByName("vincKirisiSon");
				app.scene.remove(selectedItem1);
				
				if (settings.En / settings.stepEn > 1){
					
					for(var i = 1; i < settings.En / settings.stepEn + 1; i++){
							
						var selectedItem1 = app.scene.getObjectByName("vincKiris" + i);
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("vincKiris1" + i);
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("vincKirisiIlk");
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("vincKirisiSon");
						app.scene.remove(selectedItem1);
					}
				}
				
				else{
					
					settings.Vinc_Kirisleri_Ekle = false;
					var selectedItemVKS = app.scene.getObjectByName("vincKirisiSol");
					app.scene.remove(selectedItemVKS);
					var selectedItemVKS = app.scene.getObjectByName("vincKirisiSag");
					app.scene.remove(selectedItemVKS);
					var selectedItem1 = app.scene.getObjectByName("vincKirisiIlk");
					app.scene.remove(selectedItem1);
					var selectedItem1 = app.scene.getObjectByName("vincKirisiSon");
					app.scene.remove(selectedItem1);
				}
			}
			//Rüzgar Kolonları ekleme
			this.RuzgarKolonlariEkle = function(){
							
				//***rüzgar kolonlarını ekleme koşulları
				if(settings.stepEn / 3 >= 7 || (settings.En === 60) || (settings.En === 61) || (settings.En === 62) || (settings.En === 63)){
							
					//rüzgar kolonlarının alt standlarını oluşturma.
					var manager = new THREE.LoadingManager();
					var loader = new THREE.OBJLoader(manager);
					var fileloader = new THREE.FileLoader();
							
					fileloader.load('blenderObjects/kolonAltlik.obj', function(data){
												
						for(var i = 0; i <= ((settings.En - (settings.En % settings.stepEn)) / (settings.stepEn / 3)) - 1; i++){
							
							var selectedItem = app.scene.getObjectByName("RuzgarKolonAltÖn" + i);
							app.scene.remove(selectedItem);
							var selectedItem = app.scene.getObjectByName("RuzgarKolonAltArka" + i);
							app.scene.remove(selectedItem);
							                                        
							var object = loader.parse(data);
							object.position.set((settings.stepEn / 3) + (settings.stepEn / 3) * i, 0, - 2.1);
							object.name = "RuzgarKolonAltÖn" + i;
							object.scale.set(0.21, 0.21, 0.21);
							object.traverse(function (child){
									
								if(child instanceof THREE.Mesh)
									child.material.color.setHex(0x969696);
							});
							app.scene.add(object);
							
							var object = loader.parse(data);
							object.position.set((settings.stepEn / 3) + (settings.stepEn / 3) * i, 0, - 1.95 - (settings.Boy - (settings.Boy % settings.stepBoy)));
							object.name = "RuzgarKolonAltArka" + i;
							object.scale.set(0.21, 0.21, 0.21);
							object.traverse(function (child){

								if(child instanceof THREE.Mesh)
									child.material.color.setHex(0x969696);
							});
							app.scene.add(object);
							
						}
                    },
                        function(xhr){
 
                          //console.log((xhr.loaded / xhr.total * 100) + '% loaded');
                        },
                          //if download fails
                        function(xhr){
                        
                           //console.error('An error happened : ' + xhr);
                        }
                    );
					
					//***rüzgar kolonlarını oluşturma ve ekleme.
					for (var i = 0; i <= ((settings.En - (settings.En % settings.stepEn)) / (settings.stepEn / 3)) - 1; i++){
						
						var selectedItem1 = app.scene.getObjectByName("araKatÖn" + i);
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("araKatArka" + i);
						app.scene.remove(selectedItem1);
						
						var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({ color: 0xffffff }));
						object.position.set((settings.stepEn / 3) + (settings.stepEn / 3) * i, (settings.Yükseklik / 2.25) , 0);
						object.scale.set(0.2, settings.Yükseklik / 5.65, 0.2);
						object.children.color = 0xff0000;
						object.castShadow = true;
						object.name = "araKatÖn" + i;
						object.receiveShadow = true;
						app.scene.add(object);
						
						var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({ color: 0xffffff }));
						object.position.set((settings.stepEn / 3) + (settings.stepEn / 3) * i, (settings.Yükseklik / 2.25), - (settings.Boy - (settings.Boy % settings.stepBoy)));
						object.scale.set(0.2, settings.Yükseklik / 5.65, 0.2);
						object.children.color = 0xff0000;
						object.castShadow = true;
						object.name = "araKatArka" + i;
						object.receiveShadow = true;
						app.scene.add(object);
					}
				}
				
				else{
					
					//rüzgar kolonlarının alt standlarını oluşturma.
					var manager = new THREE.LoadingManager();
					var loader = new THREE.OBJLoader(manager);
					var fileloader = new THREE.FileLoader();
							
					fileloader.load('blenderObjects/kolonAltlik.obj', function(data){
												
						for(var i = 0; i <= ((settings.En - (settings.En % settings.stepEn)) / (settings.stepEn / 2)) - 1; i++){
							
							var selectedItem = app.scene.getObjectByName("RuzgarKolonAltÖn" + i);
							app.scene.remove(selectedItem);
							var selectedItem = app.scene.getObjectByName("RuzgarKolonAltArka" + i);
							app.scene.remove(selectedItem);
							                                        
							var object = loader.parse(data);
							object.position.set((settings.stepEn / 2) + (settings.stepEn / 2) * i, 0, - 2.1);
							object.name = "RuzgarKolonAltÖn" + i;
							object.scale.set(0.21, 0.21, 0.21);
							object.traverse(function (child){
									
								if(child instanceof THREE.Mesh)
									child.material.color.setHex(0x969696);
							});
							app.scene.add(object);
							
							var object = loader.parse(data);
							object.position.set((settings.stepEn / 2) + (settings.stepEn / 2) * i, 0, - 1.95 - (settings.Boy - (settings.Boy % settings.stepBoy)));
							object.name = "RuzgarKolonAltArka" + i;
							object.scale.set(0.21, 0.21, 0.21);
							object.traverse(function (child){

								if(child instanceof THREE.Mesh)
									child.material.color.setHex(0x969696);
							});
							app.scene.add(object);
							
						}
                    },
                        function(xhr){
 
                          //console.log((xhr.loaded / xhr.total * 100) + '% loaded');
                        },
                          //if download fails
                        function(xhr){
                        
                           //console.error('An error happened : ' + xhr);
                        }
                    );
					
					//***rüzgar kolonlarını oluşturma ve ekleme.
					for (var i = 0; i <= ((settings.En - (settings.En % settings.stepEn)) / (settings.stepEn / 2)) - 1; i++){
						
						var selectedItem1 = app.scene.getObjectByName("araKatÖn" + i);
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("araKatArka" + i);
						app.scene.remove(selectedItem1);
						
						var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({ color: 0xffffff }));
						object.position.set((settings.stepEn / 2) + (settings.stepEn / 2) * i, (settings.Yükseklik / 2.25) , 0);
						object.scale.set(0.2, settings.Yükseklik / 5.65, 0.2);
						object.children.color = 0xff0000;
						object.castShadow = true;
						object.name = "araKatÖn" + i;
						object.receiveShadow = true;
						app.scene.add(object);
						
						var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({ color: 0xffffff }));
						object.position.set((settings.stepEn / 2) + (settings.stepEn / 2) * i, (settings.Yükseklik / 2.25), - (settings.Boy - (settings.Boy % settings.stepBoy)));
						object.scale.set(0.2, settings.Yükseklik / 5.65, 0.2);
						object.children.color = 0xff0000;
						object.castShadow = true;
						object.name = "araKatArka" + i;
						object.receiveShadow = true;
						app.scene.add(object);
					}
				}
			}
			//ekrandaki bütün objeleri kaldırma fonksiyonu
			this.EkranResetleme = function(){
				
				for(var i = app.scene.children.length - 1; i >= 0; i--){
					
					var obj = app.scene.children[i];
					app.scene.remove(obj);
				}
			}
			//ara kat ekleme 
			this.AraKatEkleme = function(){

				if(this.VincliKolonlar === false){
					
					settings.VincsizKolonEkle();
				}
				
				else{
					
					settings.kolEkle();
				}
				
				if(settings.En % settings.stepEn === 0){
					
					for(var i =  0; i < (settings.En / settings.stepEn); i++){

						var selectedItem1 = app.scene.getObjectByName("araKat" + i);
						app.scene.remove(selectedItem1);
						var selectedItem = app.scene.getObjectByName("VincliKenarKolonEkleX" + i);
						app.scene.remove(selectedItem);
						var selectedItem1 = app.scene.getObjectByName("VincliKenarKolonEkleY" + i);
						app.scene.remove(selectedItem1);

						var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));
						object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (i + 1)), settings.Yükseklik / 2.25, - (settings.Boy - (settings.Boy % settings.stepBoy)) / 2);
						object.scale.set( - 0.1 + settings.stepEn / 5.2, 0.1, (settings.Boy - (settings.Boy % settings.stepBoy)) / 5);
						object.name = "araKat" + i;
						app.scene.add(object);
					}
					//arakat destek kolonları ekleme.
					if(settings.stepEn / 3 >= 7 || (settings.En === 60) || (settings.En === 61) || (settings.En === 62) || (settings.En === 63)){

						for(var i = 0; i < ((settings.En - (settings.En % settings.stepEn)) / (settings.stepEn / 3)); i++){

							for(var j = 0; j < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) ; j++){

								var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));
								object.position.set((settings.stepEn / 3) + (settings.stepEn / 3) * i, (settings.Yükseklik / 4.7), - ((j + 1) * settings.stepBoy));
								object.scale.set(0.2, settings.Yükseklik / 11.2, 0.2);
								object.name = "araKatDestek" + i + j;
								app.scene.add(object);
							}
						}
					}
					else{
						
						for(var i = 0; i < ((settings.En - (settings.En % settings.stepEn)) / (settings.stepEn / 2)); i++){

							for(var j = 0; j < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) ; j++){

								var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));
								object.position.set((settings.stepEn / 2) + (settings.stepEn / 2) * i, (settings.Yükseklik / 4.7), - ((j + 1) * settings.stepBoy));
								object.scale.set(0.2, settings.Yükseklik / 11.2, 0.2);
								object.name = "araKatDestek" + i + j;
								app.scene.add(object);
							}
						}
						//boş dursun.
					}
				}
				
				else{
					
					for(var i =  0; i < (settings.En / settings.stepEn) - 1; i++){

						var selectedItem1 = app.scene.getObjectByName("araKat" + i);
						app.scene.remove(selectedItem1);
						var selectedItem = app.scene.getObjectByName("VincliKenarKolonEkleX" + i);
						app.scene.remove(selectedItem);
						var selectedItem1 = app.scene.getObjectByName("VincliKenarKolonEkleY" + i);
						app.scene.remove(selectedItem1);

						var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));
						object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (i + 1)), settings.Yükseklik / 2.25, - (settings.Boy - (settings.Boy % settings.stepBoy)) / 2);
						//object.position.set(-12 + (settings.stepEn * (i + 1)), 5.6, - (settings.Boy - (settings.Boy % settings.stepBoy)) / 2);
						object.scale.set( - 0.1 + settings.stepEn / 5.2, 0.1, (settings.Boy - (settings.Boy % settings.stepBoy)) / 5);
						object.name = "araKat" + i;
						app.scene.add(object);
					}
					//arakat destek kolonları ekleme.
					if(settings.stepEn / 3 >= 7 || (settings.En === 60) || (settings.En === 61) || (settings.En === 62) || (settings.En === 63)){

						for(var i = 0; i < ((settings.En - (settings.En % settings.stepEn)) / (settings.stepEn / 3)); i++){

							for(var j = 0; j < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) ; j++){

								var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));
								object.position.set((settings.stepEn / 3) + (settings.stepEn / 3) * i, (settings.Yükseklik / 4.7), - ((j + 1) * settings.stepBoy));
								object.scale.set(0.2, settings.Yükseklik / 11.2, 0.2);
								object.name = "araKatDestek" + i + j;
								app.scene.add(object);
							}
						}
					}
					
					else{
						
						for(var i = 0; i < ((settings.En - (settings.En % settings.stepEn)) / (settings.stepEn / 2)); i++){

							for(var j = 0; j < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) ; j++){

								var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));
								object.position.set((settings.stepEn / 2) + (settings.stepEn / 2) * i, (settings.Yükseklik / 4.7), - ((j + 1) * settings.stepBoy));
								object.scale.set(0.2, settings.Yükseklik / 11.2, 0.2);
								object.name = "araKatDestek" + i + j;
								app.scene.add(object);
							}
						}
					}
				}
			}
			//ara katı tutan kolonların eklenmesi
			this.AraKatKolonlariEkle = function(){
								
					var manager = new THREE.LoadingManager();
					var loader = new THREE.OBJLoader(manager);
					var fileloader = new THREE.FileLoader();

					if(this.VincliKolonlar === false){

						fileloader.load('blenderObjects/AraKatVincsizOrtaKolonSon.obj', function(data){

							for(var i = 0; i < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1; i++){

								var selectedItem1 = app.scene.getObjectByName("x" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("y" + i);
								app.scene.remove(selectedItem1);
								var selectedItem = app.scene.getObjectByName("VincliKenarKolonEkleX" + i);
								app.scene.remove(selectedItem);
								var selectedItem1 = app.scene.getObjectByName("VincliKenarKolonEkleY" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("VincsizKenarKolonX" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("VincsizKenarKolonY" + i);
								app.scene.remove(selectedItem1);
								/*var selectedItem1 = app.scene.getObjectByName("AraKatKenarKolonX" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("AraKatKenarKolonY" + i);
								app.scene.remove(selectedItem1);*/
								var selectedItem1 = app.scene.getObjectByName("ArakatVincliKenarKolonX" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("ArakatVincliKenarKolonY" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("ArakatVincliKenarKolonX" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("ArakatVincliKenarKolonY" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("z" + i + j);
								app.scene.remove(selectedItem1);

								if(settings.En % settings.stepEn === 0){

									for(var j = 0; j < ((settings.En / settings.stepEn) - 1); j++){

										var selectedItem1 = app.scene.getObjectByName("z" + i + j);
										app.scene.remove(selectedItem1);

										var object = loader.parse(data);
										object.position.set(3.6 + (settings.stepEn * (j + 1)), 0, 0.16 - (settings.stepBoy * i));
										object.rotateY(-1.6);
										object.name = "z" + i + j;
										object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
										app.scene.add(object);
									}
								}

								else{

									for(var j = 0; j < ((settings.En / settings.stepEn) - 2); j++){

										var selectedItem1 = app.scene.getObjectByName("z" + i + j);
										app.scene.remove(selectedItem1);

										var object = loader.parse(data);
										object.position.set(3.6 + (settings.stepEn * (j + 1)), 0, 0.16 - (settings.stepBoy * i));
										object.rotateY(-1.6);
										object.name = "z" + i + j;
										object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
										app.scene.add(object);
									}
								}
							}
						},
							function(xhr){

								// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
							},
								  //if download fails
							function(xhr){

								   // console.error('An error happened : ' + xhr);
							}
						);
						//kenar kolonlar ayrı şekilde oluşturuldu.
						fileloader.load('blenderObjects/AraKatKenarKolonSon.obj', function(data){
							/*
							var selectedItem1 = app.scene.getObjectByName("AraKatKenarKolonX" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("AraKatKenarKolonY" + i);
							app.scene.remove(selectedItem1);*/

							for(var i = 0; i < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1; i++){

								var object = loader.parse(data);
								object.position.set(0 + (settings.En - (settings.En % settings.stepEn)), 0, 0.34 - (settings.stepBoy * i));
								object.rotateY(-1.6);
								object.name = "AraKatKenarKolonX" + i;
								object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
								app.scene.add(object);

								var object = loader.parse(data);
								object.position.set(0, 0, -0.45 - (settings.stepBoy * i));
								object.rotateY(1.58);
								object.name = "AraKatKenarKolonY" + i;
								object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
								app.scene.add(object);
							}
						},
							function(xhr){

								// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
							},
								  //if download fails
							function(xhr){

								   // console.error('An error happened : ' + xhr);
							}
						);
					}

					else{

						fileloader.load('blenderObjects/AraKatVincliOrtaKolonSon.obj', function(data){

							for(var i = 0; i < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1; i++){

								var selectedItem1 = app.scene.getObjectByName("x" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("y" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("ArakatVincliKenarKolonX" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("ArakatVincliKenarKolonY" + i);
								app.scene.remove(selectedItem1);
								var selectedItem1 = app.scene.getObjectByName("z" + i + j);
								app.scene.remove(selectedItem1);

								if(settings.En % settings.stepEn === 0){

									for(var j = 0; j < ((settings.En / settings.stepEn) - 1); j++){

										var selectedItem1 = app.scene.getObjectByName("z" + i + j);
										app.scene.remove(selectedItem1);

										var object = loader.parse(data);
										object.position.set(3.6 + (settings.stepEn * (j + 1)), 0, 0.16 - (settings.stepBoy * i));
										object.rotateY(-1.6);
										object.name = "z" + i + j;
										object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
										app.scene.add(object);
									}
								}

								else{

									for(var j = 0; j < ((settings.En / settings.stepEn) - 2); j++){

										var selectedItem1 = app.scene.getObjectByName("z" + i + j);
										app.scene.remove(selectedItem1);

										var object = loader.parse(data);
										object.position.set(3.6 + (settings.stepEn * (j + 1)), 0, 0.16 - (settings.stepBoy * i));
										object.rotateY(-1.6);
										object.name = "z" + i + j;
										object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
										app.scene.add(object);
									}
								}
							}
						},
							function(xhr){

								// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
							},
								  //if download fails
							function(xhr){

								   // console.error('An error happened : ' + xhr);
							}
						);
						//kenar kolonlar ayrı şekilde oluşturuldu.
						fileloader.load('blenderObjects/AraKatVincliKenarKolon.obj', function(data){

							var selectedItem1 = app.scene.getObjectByName("ArakatVincliKenarKolonX" + i);
							app.scene.remove(selectedItem1);
							var selectedItem1 = app.scene.getObjectByName("ArakatVincliKenarKolonY" + i);
							app.scene.remove(selectedItem1);

							for(var i = 0; i < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1; i++){

								var object = loader.parse(data);
								object.position.set(0 + (settings.En - (settings.En % settings.stepEn)), 0, 0.34 - (settings.stepBoy * i));
								object.rotateY(-1.6);
								object.name = "ArakatVincliKenarKolonX" + i;
								object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
								app.scene.add(object);

								var object = loader.parse(data);
								object.position.set(0, 0, -0.45 - (settings.stepBoy * i));
								object.rotateY(1.58);
								object.name = "ArakatVincliKenarKolonY" + i;
								object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
								app.scene.add(object);
							}
						},
							function(xhr){

								// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
							},
								  //if download fails
							function(xhr){

								   // console.error('An error happened : ' + xhr);
							}
						);
					}				
			}
			//ara kat ve kolonları kaldırılması
			this.AraKatKaldir = function(){
				
				for(var i = 0; i < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1; i++){
					
					var selectedItem1 = app.scene.getObjectByName("x" + i);
					app.scene.remove(selectedItem1);
					var selectedItem1 = app.scene.getObjectByName("y" + i);
					app.scene.remove(selectedItem1);
					var selectedItem1 = app.scene.getObjectByName("ArakatVincliKenarKolonX" + i);
					app.scene.remove(selectedItem1);
					var selectedItem1 = app.scene.getObjectByName("ArakatVincliKenarKolonY" + i);
					app.scene.remove(selectedItem1);
					var selectedItem1 = app.scene.getObjectByName("AraKatKenarKolonX" + i);
					app.scene.remove(selectedItem1);
					var selectedItem1 = app.scene.getObjectByName("AraKatKenarKolonY" + i);
					app.scene.remove(selectedItem1);
					
					for(var j = 0; j < ((settings.En / settings.stepEn) - 1); j++){
						
						var selectedItem1 = app.scene.getObjectByName("z" + i + j);
						app.scene.remove(selectedItem1);
					}
				}
				
				for(var t= 0; t<2; t++){
					
					for(var i = 0; i < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1; i++){

						for(var j = 0; j < ((settings.En / (settings.stepEn / 3)) + 1); j++){

							var selectedItem1 = app.scene.getObjectByName("kolonAltlikAraKat" + i + j);
							app.scene.remove(selectedItem1);
						}
					}
				}
				
				for(var i = 0; i < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1; i++){
								
					for(var j = 0; j < ((settings.En / (settings.stepEn / 2)) + 1); j++){

						var selectedItem1 = app.scene.getObjectByName("kolonAltlikAraKat" + i + j);
						app.scene.remove(selectedItem1);
					}
				}
				
				
				for(var i =  0; i < (settings.En / settings.stepEn); i++){
				
					var selectedItem1 = app.scene.getObjectByName("araKat" + i);
					app.scene.remove(selectedItem1);
				}
				
				for(var i = 0; i < ((settings.En - (settings.En % settings.stepEn)) / (settings.stepEn / 3)) + 1; i++){

					for(var j = 0; j < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) ; j++){
							
						var selectedItem1 = app.scene.getObjectByName("araKatDestek" + i + j);
						app.scene.remove(selectedItem1);
					}
				}
				
				//destek kolon altlık kaldır
				
				for(var i = 0; i < ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1; i++){
													
					for(var j = 0; j < ((settings.En / (settings.stepEn / 3)) + 2); j++){
						
						var selectedItem1 = app.scene.getObjectByName("kolonAltlikAraKat" + i + j);
						app.scene.remove(selectedItem1);
					}
				}
				//başlangıç arakat destek kolonları standlarını silme
				for(var i = 0; i < settings.Boy / settings.stepBoy; i++){
					
					var selectedItem1 = app.scene.getObjectByName("kolonAltlikOrta" + i);
					app.scene.remove(selectedItem1);
				}
			}
			//kısmi arakatları kaldırma
			this.kismiAraKatKolonlariEkle = function(){
				
				//kısmı arakat eklenmek istenildiğinde kolonları bu şekilde ekle.					
				var manager = new THREE.LoadingManager();
				var loader = new THREE.OBJLoader(manager);
				var fileloader = new THREE.FileLoader();

				if(this.VincliKolonlar === false){

						fileloader.load('blenderObjects/AraKatVincsizOrtaKolonSon.obj', function(data){
							
							for(var i = 0; i < settings.araKatUzunlugu + 1; i++){
								
								if(settings.En % settings.stepEn === 0){

									for(var j = 0; j < settings.araKatGenisligi - 1; j++){

										var object = loader.parse(data);
										object.position.set(3.6 + (settings.stepEn * (j + 1)), 0, 0.16 - (settings.stepBoy * i));
										object.rotateY(-1.6);
										object.name = "hoho" + i + j;
										object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
										app.scene.add(object);
									}
								}

								else{

									for(var j = 0; j < settings.araKatGenisligi - 1; j++){

										var object = loader.parse(data);
										object.position.set(3.6 + (settings.stepEn * (j + 1)), 0, 0.16 - (settings.stepBoy * i));
										object.rotateY(-1.6);
										object.name = "hoho" + i + j;
										object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
										app.scene.add(object);
									}
								}
							}
						},
							function(xhr){

								// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
							},
								  //if download fails
							function(xhr){

								   // console.error('An error happened : ' + xhr);
							}
						);
						//kenar kolonlar ayrı şekilde oluşturuldu.
						fileloader.load('blenderObjects/AraKatKenarKolonSon.obj', function(data){

							for(var i = 0; i < settings.araKatUzunlugu + 1; i++){

								var object = loader.parse(data);
								object.position.set(0 + (settings.En - (settings.En % settings.stepEn)), 0, 0.34 - (settings.stepBoy * i));
								object.rotateY(-1.6);
								object.name = "x" + i;
								object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
								//app.scene.add(object);

								var object = loader.parse(data);
								object.position.set(0, 0, -0.45 - (settings.stepBoy * i));
								object.rotateY(1.58);
								object.name = "hoho2" + i;
								object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
								app.scene.add(object);
							}
						},
							function(xhr){

								// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
							},
								  //if download fails
							function(xhr){

								   // console.error('An error happened : ' + xhr);
							}
						);
					}
					
				else{

						fileloader.load('blenderObjects/AraKatVincliOrtaKolonSon.obj', function(data){

							for(var i = 0; i < settings.araKatUzunlugu + 1; i++){

								if(settings.En % settings.stepEn === 0){

									for(var j = 0; j < (settings.araKatGenisligi - 1); j++){

										var object = loader.parse(data);
										object.position.set(3.6 + (settings.stepEn * (j + 1)), 0, 0.16 - (settings.stepBoy * i));
										object.rotateY(-1.6);
										object.name = "hoho" + i + j;
										object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
										app.scene.add(object);
									}
								}

								else{

									for(var j = 0; j < (settings.araKatGenisligi - 1); j++){

										var object = loader.parse(data);
										object.position.set(3.6 + (settings.stepEn * (j + 1)), 0, 0.16 - (settings.stepBoy * i));
										object.rotateY(-1.6);
										object.name = "hoho" + i + j;
										object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
										app.scene.add(object);
									}
								}
							}
						},
							function(xhr){

								// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
							},
								  //if download fails
							function(xhr){

								   // console.error('An error happened : ' + xhr);
							}
						);
						//kenar kolonlar ayrı şekilde oluşturuldu.
						fileloader.load('blenderObjects/AraKatVincliKenarKolon.obj', function(data){

							for(var i = 0; i < settings.araKatUzunlugu + 1; i++){

								var object = loader.parse(data);
								object.position.set(0 + (settings.En - (settings.En % settings.stepEn)), 0, 0.34 - (settings.stepBoy * i));
								object.rotateY(-1.6);
								object.name = "x" + i;
								object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
								//app.scene.add(object);

								var object = loader.parse(data);
								object.position.set(0, 0, -0.45 - (settings.stepBoy * i));
								object.rotateY(1.58);
								object.name = "hoho2" + i;
								object.scale.set(0.2, settings.Yükseklik / 65, 0.2);
								app.scene.add(object);
							}
						},
							function(xhr){

								// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
							},
								  //if download fails
							function(xhr){

								   // console.error('An error happened : ' + xhr);
							}
						);
					}
			}
			//bütün elemanları sayısını bulma
			this.objeSayisiniBul = function(){
			
				if(settings.En / settings.stepEn > 1){
					
					//tali kiriş bulma
					//kompleAraKat varsa -->
					if(settings.AraKatEkle == true){
						//stepEn 3 e bölündüğü durum
						if(settings.stepEn / 3 >= 7 || (settings.En === 60) || (settings.En === 61) || (settings.En === 62) || (settings.En === 63)){

							//rüzgar kolon sayısı + arakat kolon sayısı
							ruzgarKolonSayisi = 0;
							
							arakatKolon = (((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) * 2) * (((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1);
							//rüzgar kolon sayısı + arakat kolon sayısı
							
							if((((settings.En  + (settings.En % settings.stepEn)) / (settings.En / settings.stepEn)) / 3) < settings.stepBoy){
								
								taliKiris = (((settings.En -  (settings.En % settings.stepEn)) / settings.stepEn) * 3) * (((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1);
								
								arakatKiris = ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) * ((((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) * 3) + 1);
								
								//ttPlak bulma
								var araSayiTtPlak = Math.ceil(settings.stepBoy / 2.35);
								
								ttPlak = (araSayiTtPlak * ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy)) * (((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) * 3);
							}
							else{
								
								taliKiris = ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) * ((((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) * 3) + 1);
								
								arakatKiris = (((settings.En -  (settings.En % settings.stepEn)) / settings.stepEn) * 3) * (((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1);
								
								//ttplak bulma
								var araSayiTtPlak = Math.ceil((((settings.En  + (settings.En % settings.stepEn)) / (settings.En / settings.stepEn)) / 3) / 2.35);
								
								ttPlak = ((araSayiTtPlak * 3) * ((settings.En - (settings.En % settings.stepEn)) / settings.stepEn)) * ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy);
							}
						}
						//stepEn 2ye bölündüğü durum
						else{
							
							//rüzgar kolon sayısı + arakat kolon sayısı
							ruzgarKolonSayisi = 0;
							
							arakatKolon = ((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) * (((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1);
							//rüzgar kolon sayısı + arakat kolon sayısı
							
							//a-a1 arası stepBoydan küçük
							if((((settings.En  + (settings.En % settings.stepEn)) / (settings.En / settings.stepEn)) / 2) < settings.stepBoy){
								
								taliKiris = (((settings.En -  (settings.En % settings.stepEn)) / settings.stepEn) * 2) * (((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1);
								
								arakatKiris = ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) * ((((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) * 2) + 1);
								
								//ttPlak bulma
								var araSayiTtPlak = Math.ceil(settings.stepBoy / 2.35);
								
								ttPlak = (araSayiTtPlak * ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy)) * (((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) * 3);
							}
							else{
								
								taliKiris = ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) * ((((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) * 2) + 1);
								
								arakatKiris = (((settings.En -  (settings.En % settings.stepEn)) / settings.stepEn) * 2) * (((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1);
								
								//ttplak bulma
								var araSayiTtPlak = Math.ceil((((settings.En  + (settings.En % settings.stepEn)) / (settings.En / settings.stepEn)) / 2) / 2.35);
								
								ttPlak = ((araSayiTtPlak * 2) * ((settings.En - (settings.En % settings.stepEn)) / settings.stepEn)) * ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy);
							}
						}
					}
					
					if(settings.KismiAraKatEkle == true){
						
						if(settings.stepEn / 3 >= 7 || (settings.En === 60) || (settings.En === 61) || (settings.En === 62) || (settings.En === 63)){
							
							//rüzgarkolonları ve arakatkolonlarını bulma
							
							arakatKolon = ((settings.araKatGenisligi * 2) * (settings.araKatUzunlugu + 1));
							
							//rüzgarkolonunu kısmi arakat varken hesaplamada arakat kolonu olan rüzgar kolonlarını hesaba kat.
							if(((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) == settings.araKatGenisligi){
								
								if(((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) == settings.araKatUzunlugu){
									
									ruzgarKolonSayisi = 0;
								}
								else{
									
									ruzgarKolonSayisi = (((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) * 2).toFixed(0);
								}
							}
							else{
								
								if(((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) == settings.araKatUzunlugu){
									
									var araSayiRuzgarKolon = ((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) - settings.araKatGenisligi;
									
									ruzgarKolonSayisi = (araSayiRuzgarKolon * 4).toFixed(0);
								}
								else{
									
									var araSayiRuzgarKolon = ((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) - settings.araKatGenisligi;
									
									ruzgarKolonSayisi = ((araSayiRuzgarKolon * 4) + (settings.araKatGenisligi * 2)).toFixed(0);
								}
							}
							
							//rüzgarkolonları ve arakatkolonlarını bulma son*
							
							//talikiris arakatkiris ttplak sayısı bulma
							if((((settings.En  + (settings.En % settings.stepEn)) / (settings.En / settings.stepEn)) / 3) < settings.stepBoy){
								
								taliKiris = (settings.araKatGenisligi * 3) * (settings.araKatUzunlugu + 1);
								
								arakatKiris = (settings.araKatUzunlugu) * ((settings.araKatGenisligi * 3) + 1);
								
								//ttPlak bulma
								var araSayiTtPlak = Math.ceil(settings.stepBoy / 2.35);
								
								ttPlak = (araSayiTtPlak * settings.araKatUzunlugu) * (settings.araKatGenisligi * 3);
							}
							else{
								
								taliKiris = (settings.araKatUzunlugu) * ((settings.araKatGenisligi * 3) + 1);
								
								arakatKiris = (settings.araKatGenisligi * 3) * (settings.araKatUzunlugu + 1);
								
								//ttPlak bulma
								var araSayiTtPlak = Math.ceil((((settings.En  + (settings.En % settings.stepEn)) / (settings.En / settings.stepEn)) / 3) / 2.35);
								
								//console.log("heloooooooooooooooooooooo" + araSayiTtPlak);
								
								ttPlak = (araSayiTtPlak * 3) * (settings.araKatGenisligi) * (settings.araKatUzunlugu);
							}
						}
						
						else{
							
							//rüzgarkolonları ve arakatkolonları bulma hol 2ye bölündüğünde
							
							arakatKolon = ((settings.araKatGenisligi) * (settings.araKatUzunlugu + 1));
							
							//rüzgarkolonunu kısmi arakat varken hesaplamada arakat kolonu olan rüzgar kolonlarını hesaba kat.
							if(((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) == settings.araKatGenisligi){
								
								if(((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) == settings.araKatUzunlugu){
									
									ruzgarKolonSayisi = 0;
								}
								else{
									
									ruzgarKolonSayisi = ((settings.En - (settings.En % settings.stepEn)) / settings.stepEn).toFixed(0);
								}
							}
							else{
								
								if(((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) == settings.araKatUzunlugu){
									
									var araSayiRuzgarKolon = ((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) - settings.araKatGenisligi;
									
									ruzgarKolonSayisi = (araSayiRuzgarKolon * 2).toFixed(0);
								}
								else{
									
									var araSayiRuzgarKolon = ((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) - settings.araKatGenisligi;
									
									ruzgarKolonSayisi = ((araSayiRuzgarKolon * 2) + (settings.araKatGenisligi)).toFixed(0);
								}
							}
							
							//rüzgarkolonları ve arakatkolonları bulma son*
							
							if((((settings.En  + (settings.En % settings.stepEn)) / (settings.En / settings.stepEn)) / 2) < settings.stepBoy){
								
								taliKiris = (settings.araKatGenisligi * 2) * (settings.araKatUzunlugu + 1);
								
								arakatKiris = (settings.araKatUzunlugu) * ((settings.araKatGenisligi * 2) + 1);
								
								//ttPlak bulma
								var araSayiTtPlak = Math.ceil(settings.stepBoy / 2.35);
								
								ttPlak = (araSayiTtPlak * settings.araKatUzunlugu) * (settings.araKatGenisligi * 2);
							}
							else{
								
								taliKiris = (settings.araKatUzunlugu) * ((settings.araKatGenisligi * 2) + 1);
								
								arakatKiris = (settings.araKatGenisligi * 2) * (settings.araKatUzunlugu + 1);
								
								//ttPlak bulma
								var araSayiTtPlak = Math.ceil((((settings.En  + (settings.En % settings.stepEn)) / (settings.En / settings.stepEn)) / 2) / 2.35);
								
								ttPlak = (araSayiTtPlak * 2) * (settings.araKatGenisligi) * (settings.araKatUzunlugu);
							}
						}
					}
					
					if(settings.AraKatEkle == false && settings.KismiAraKatEkle == false){
						
						//ara kat yoksa ve 3e bölünüyorsa stepEn
						if(settings.stepEn / 3 >= 7 || (settings.En === 60) || (settings.En === 61) || (settings.En === 62) || (settings.En === 63)){
							
							//rüzgar kolon sayısı + arakat kolon sayısı
							ruzgarKolonSayisi = (((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) * 4).toFixed;
							
							arakatKolon = 0;
							//rüzgar kolon sayısı + arakat kolon sayısı
						}
						
						else{
							
							ruzgarKolonSayisi = (((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) * 2).toFixed(0);
							
							arakatKolon = 0;
						}
					}
					
					//tali kiriş bulma
					
					//vinç konsol yerleri
					if(settings.VincliKolonlar === true){
						
						if(settings.En > 0 && settings.En <30){
							
							vincKirisYeriEn = 'A-B';
							//vincKirisYeriBoy = '0-7';
						}
						else if(settings.En >= 30 && settings.En <60){
							
							vincKirisYeriEn = 'A-C';
							//vincKirisYeriBoy = '0-7';
						}
						else if(settings.En >=60 && settings.En <90){
							
							vincKirisYeriEn = 'A-D';
						}
						else if(settings.En >=90 && settings.En <=100){
							
							vincKirisYeriEn = 'A-E';
						}
						
						var vincKirisYeriBoyIkinciDegisken = ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy);
						vincKirisYeriBoy = '0-' + vincKirisYeriBoyIkinciDegisken;
						//vincKirisYeriEn = 'A-B';
						//vincKirisYeriBoy = '0-7';
					}
					//vinç konsol yerleri
					
					//**ara kat yerleri bulma
					if(settings.AraKatEkle ==  true){
					   
						if(settings.En > 0 && settings.En <30){
							
							araKatYeriEn = 'A-B';
						}
						else if(settings.En >= 30 && settings.En <60){
							
							araKatYeriEn = 'A-C';
						}
						else if(settings.En >=60 && settings.En <90){
							
							araKatYeriEn = 'A-D';
						}
						else if(settings.En >=90 && settings.En <=100){
							
							araKatYeriEn = 'A-E';
						}
						
						var araKatYeriBoyIkinciDegisken = ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) ;
						araKatYeriBoy = '0-' + araKatYeriBoyIkinciDegisken;
						//var araKatYeriEn = 'A-B';
						//var araKatYeriBoy ='0-7';
					}
					
					if(settings.KismiAraKatEkle == true){
						
						if(settings.araKatGenisligi == 1){
							
							araKatYeriEn = 'A-B';	
						}
						else if(settings.araKatGenisligi == 2){
							
							araKatYeriEn = 'A-C';
						}
						else if(settings.araKatGenisligi == 3){
							
							araKatYeriEn = 'A-D';
						}
						else if(settings.araKatGenisligi == 4){
							
							araKatYeriEn = 'A-E';
						}

						var araKatYeriBoyIkinciDegisken = settings.araKatUzunlugu;
						araKatYeriBoy = '0-' + araKatYeriBoyIkinciDegisken;
						
					}
					//**ara kat yerleri bulma
					
					//kolon sayısı*
					kolonSayisi = Math.round((((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1) * (((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) + 1));
					
					//console.log("Kolon Sayısı: " + kolonSayisi);
					//
					
					//rüzgar kolonu sayısı + stand sayısı*
					if(settings.stepEn / 3 >= 7 || (settings.En === 60) || (settings.En === 61) || (settings.En === 62) || (settings.En === 63)){//her holde iki rüzgar kolonu var
					
						if((settings.En < 30 && settings.En > 24) || (settings.En < 90 && settings.En > 82) || (settings.En < 60 && settings.En > 49)){
							
							//ruzgarKolonSayisi = Math.round(((settings.En / settings.stepEn) * 4) - 1);
							//console.log("Rüzgar Kolon Sayısı: " + ruzgarKolonSayisi);
							
							if(settings.AraKatEkle === false){
								
								//tumStandSayisi = Math.round(kolonSayisi + ruzgarKolonSayisi)
								
								//console.log("Tüm stand sayısı: " + tumStandSayisi);
							}
							else{
								
								tumStandSayisi = Math.round(((((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) * 3) + 1) * (((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1));

								//console.log("Tüm stand sayısı: " + tumStandSayisi);
							}
						}
						
						else{
							
							//ruzgarKolonSayisi = Math.round(((settings.En / settings.stepEn) * 4));
							//console.log("Rüzgar Kolon Sayısı: " + ruzgarKolonSayisi);
							
							if(settings.AraKatEkle === false){
								
								//console.log("Tüm stand sayısı: " + Math.round(kolonSayisi + ruzgarKolonSayisi));
							}
							
							else{
								
								tumStandSayisi = Math.round(((((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) * 3) + 1) * (((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1));

								//console.log("Tüm stand sayısı: " + tumStandSayisi);
							}
						}
					}
									
					else{
									
						/*ruzgarKolonSayisi = Math.round((((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) * 2));
						console.log("Rüzgar Kolon Sayısı: " + ruzgarKolonSayisi);*/
						
						if(settings.AraKatEkle === false){
								
							//console.log("Tüm stand sayısı: " + Math.round(kolonSayisi + ruzgarKolonSayisi));
						}
							
						else{
								
							tumStandSayisi = Math.round(((((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) * 2) + 1) * (((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1));

							//console.log("Tüm stand sayısı: " + tumStandSayisi);
						}
					}
					//rüzgar kolon sayısı + stand sayısı end*
					
					//oluk sayısı
					olukSayisi = (Math.round((settings.En /  settings.stepEn) + 1) * ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy));
					//console.log("Oluk Sayısı: " + olukSayisi);
					//oluk sayısı end*
					
					//makas sayısı
					makasSayisi = Math.round((((settings.En - (settings.En % settings.stepEn)) / settings.stepEn)) * (((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) + 1));
					//console.log("Makas Sayısı: " + makasSayisi);
					//makas sayısı end*
					
					//vinç kirişleri sayısı
					if(settings.Vinc_Kirisleri_Ekle === true){
						
						vincKirisiSayisi = (Math.round(((((settings.En - (settings.En % settings.stepEn)) / settings.stepEn) - 1) * 2) + 2) * ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy));
						//console.log("Vinç Kirişi Sayısı: " + vincKirisiSayisi);
					}
					
					else{
						
						//console.log("Vinç Kirişi Sayısı: " + 0);
					}
					//vinç kirişleri sayısı end*
					
					//ara kat boyutları
					if(settings.AraKatEkle === false){
						
						//console.log("Komple Ara Kat: " + settings.araKatSayisi);
					}
					
					else{
						
						KompleAraKatHolSayisi = Math.round((settings.En - (settings.En % settings.stepEn)) / settings.stepEn);
						
						KompleAraKatHolBoyutu = (Math.round(((settings.En  + (settings.En % settings.stepEn)) / (settings.En / settings.stepEn)) * 100) / 100) + "x" + settings.Boy;
						
						//console.log("Komple Ara Kat: " + "Var, " + KompleAraKatHolSayisi + " Adet Hol Sayısı, " + "Her Hol: " + KompleAraKatHolBoyutu + " Boyutlarında.");
					}
					//ara kat boyutları end*
					
					//Kısmi ara kat boyutları
					if((settings.KismiAraKatEkle === false) || (settings.kismiAraKatKaldir === true)){
						
						//console.log("Kısmi Ara Kat: " + settings.KismiaraKatSayisi);
					}
					/*this.araKatUzunlugu = 1,
					this.araKatGenisligi = 1,*/
					if(settings.KismiAraKatEkle === true){
						
						kismiAraKatHolSayisi = settings.araKatGenisligi;
						
						kismiAraKatAksSayisi = settings.araKatUzunlugu;
						
						kismiAraKatHolBoyutu = (settings.araKatGenisligi * (Math.round(((settings.En  + (settings.En % settings.stepEn)) / (settings.En / settings.stepEn)) * 100) / 100));
						
						kismiAraKatAksBoyutu = (Math.round((settings.araKatUzunlugu * settings.stepBoy) *100) / 100);
						
						//console.log("Kısmı Ara Kat: " + " Var, HolxAks: " + settings.araKatGenisligi + "x" + settings.araKatUzunlugu + " Boyutları: " + kismiAraKatHolBoyutu + "x" + kismiAraKatAksBoyutu);
					}
					//kısmi ara kat boyutları end*
					
					//aşık sayısı
					
					if(settings.En > 0 && settings.En < 30){
						
						asikSayisi = ((Math.round((settings.stepEn / 2 / 1.95) * ((settings.En - (settings.En % settings.stepEn)) / settings.stepEn)) * 2) + 2) * Math.round((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy);
						
						//console.log("aşık Sayısı: " + asikSayisi);
					}
					
					else if(settings.En >= 30 && settings.En < 60){
						
						asikSayisi = ((Math.round((settings.stepEn / 2 / 1.95) * ((settings.En - (settings.En % settings.stepEn)) / settings.stepEn)) * 2) + 4) * Math.round((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy);
						
						//console.log("aşık Sayısı: " + asikSayisi);
					}
					
					else if(settings.En >= 60 && settings.En < 90){
							
						asikSayisi = ((Math.round((settings.stepEn / 2 / 1.95) * ((settings.En - (settings.En % settings.stepEn)) / settings.stepEn)) * 2) + 6) * Math.round((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy);
						
						//console.log("aşık Sayısı: " + asikSayisi);
					}
					
					else{
						
						asikSayisi = ((Math.round((settings.stepEn / 2 / 1.95) * ((settings.En - (settings.En % settings.stepEn)) / settings.stepEn)) * 2) + 8) * Math.round((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy);

						//console.log("aşık Sayısı: " + asikSayisi);
					}
					
					//aşık sayısı end*
					
				}
				
				//ilk açılış çizmi
				else{
										
					//rüzgar kolonu ve arakat kolonu bulma
					if(settings.KismiAraKatEkle == true){
						
						if(((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy) == settings.araKatUzunlugu){
							
							ruzgarKolonSayisi = 0;
							arakatKolon = 8;
						}
						else{
							
							ruzgarKolonSayisi = 1;
							arakatKolon = settings.araKatUzunlugu + 1;
						}
					}
					else{
						
						ruzgarKolonSayisi = 2;
						arakatKolon = 0;
					}

					//ara kat kirisi bulma
					//tali kiriş bulma
					if(settings.AraKatEkle == true){
						
						taliKiris = 3 * 7;
						arakatKiris = 8 * 2;
						ttPlak = 10 * 7;
					}
					else{
						
						
					}
					
					if(settings.KismiAraKatEkle == true){
							
						taliKiris = 3 * settings.araKatUzunlugu;
						arakatKiris = 2 * (settings.araKatUzunlugu + 1);
						ttPlak = 10 * settings.araKatUzunlugu;
					}
					else{
						
					}
					
					//tali kiriş bulma
					//ara kat kirisi bulma
					
					//vinç kiriş yerleri bulma
					
					if(settings.VincliKolonlar === true){
						
						vincKirisYeriEn = 'A-B';
						vincKirisYeriBoy = '0-7';
					}
					else{
						
						//vinç konsolları açık değil
					}
					//vinç kiriş yerleri bulma

					//**ara kat yerleri bulma
					if(settings.AraKatEkle ==  true){
					   
						araKatYeriEn = 'A-B';
						araKatYeriBoy = '0-7';
						
					}
					
					if(settings.KismiAraKatEkle == true){
						/*
						if(settings.araKatGenisligi == 1){
							
							var araKatYeriEn = 'A-B';
						}
						else if(settings.araKatGenisligi == 2){
							
							var araKatYeriEn = 'A-C';
						}
						else if(settings.araKatGenisligi == 3){
							
							var araKatYeriEn = 'A-D';
						}
						else if(settings.araKatGenisligi == 4){
							
							var araKatYeriEn = 'A-E';
						}*/
						
						araKatYeriEn = 'A-B';
						
						var araKatYeriBoyIkinciDegisken = settings.araKatUzunlugu;
						araKatYeriBoy = '0-' + araKatYeriBoyIkinciDegisken;
						
					}
					//**ara kat yerleri bulma
					
					if(settings.AraKatEkle === false){
						
						//console.log("Kolon Stand Sayısı: " + settings.kolonStandSayisi);
					}
					
					else{
						
						console.log("Kolon Stand Sayısı: " + 24);
					}
					
					if((settings.KismiAraKatEkle === false) || (settings.kismiAraKatKaldir === true)){
						
						//console.log("Kısmi Ara Kat: " + settings.KismiaraKatSayisi);
					}
					/*this.araKatUzunlugu = 1,
					this.araKatGenisligi = 1,*/
					if(settings.KismiAraKatEkle === true){
						
						kismiAraKatHolSayisi = 1;
						
						kismiAraKatAksSayisi = settings.araKatUzunlugu;
						
						kismiAraKatHolBoyutu = (settings.araKatGenisligi * settings.stepEn);
						
						kismiAraKatAksBoyutu =  (settings.araKatUzunlugu * settings.stepBoy);

						//console.log("Kısmı Ara Kat: " + " Var, HolxAks: " + settings.araKatGenisligi + "x" + settings.araKatUzunlugu + " Boyutları: " + kismiAraKatHolBoyutu + "x" + kismiAraKatAksBoyutu);
					}
					
					if(settings.AraKatEkle === false){
						
						//console.log("Komple Ara Kat: " + settings.araKatSayisi);
					}
					
					else{
						
						KompleAraKatHolSayisi = 1;
							
						KompleAraKatHolBoyutu = settings.En + "x" + settings.Boy;
						
						//console.log("Komple Ara Kat: " + "Var, " + KompleAraKatHolBoyutu + " Boyutlarında.");
					}
					
					
					if(settings.Vinc_Kirisleri_Ekle === false){
						
						//console.log("Vinc Kirisi Sayısı: " + settings.vincKirisiSayisi);
					}
					
					else{
						
						vincKirisiSayisi = 2 * ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy);
						
						//console.log("Vinc Kirisi Sayısı: " + vincKirisiSayisi);
					}
				}
			}
			//elemanların(çatı makası hariç) metreküp hesaplamaları
			this.metreKupHesaplari = function(){
				
				//oluk metreküp
				olukBoy = settings.stepBoy;
				olukMetreKup = ((olukBoy * olukEn * olukYukseklik) * 0.57) * olukSayisi;

				console.log("oluk metreküp toplam: " + olukMetreKup);
				//oluk metreküp
				
				//aşık metreküp
				asikBoy = settings.stepBoy;

				if(settings.stepBoy >= 8 && settings.stepBoy < 8.4){

					var asikAlan = ((asikYukseklikT.yirmisekizlik[0] / 100) - (asikYukseklikT.yirmisekizlik[2] / 100)) * (asikYukseklikT.yirmisekizlik[1] / 100); 
					
					asikBoy = settings.stepBoy;
					asikMetreKupT = (asikBoy * asikAlan) * asikSayisi;

					console.log("Temelli fab aşık kirişi metreküp 8-8.4: " + asikMetreKupT);
				}
				
				else if(settings.stepBoy >= 8.4 && settings.stepBoy < 8.7){

					var asikAlan = ((asikYukseklikT.yirmiyedibucukluk[0] / 100) - (asikYukseklikT.yirmiyedibucukluk[2] / 100)) * (asikYukseklikT.yirmiyedibucukluk[1] / 100);
					
					asikBoy = settings.stepBoy;
					asikMetreKupT = (asikBoy * asikAlan) * asikSayisi;
					
					console.log("Temelli fab aşık kirişi metreküp 8.4-8.7: " + asikMetreKupT);
				}
				else if(settings.stepBoy >= 8.7 && settings.stepBoy < 9.09){

					var asikAlan = ((asikYukseklikT.otuzsekizlik[0] / 100) - (asikYukseklikT.otuzsekizlik[2] / 100)) * (asikYukseklikT.otuzsekizlik[1] / 100);
					
					asikBoy = settings.stepBoy;
					asikMetreKupT = (asikBoy * asikAlan) * asikSayisi;
					
					console.log("Temelli fab aşık kirişi metreküp 8.7-9.09: " + asikMetreKupT);
				}
				else{
					
					var asikAlan = ((asikYukseklikT.yirmibeslik[0] / 100) - (asikYukseklikT.yirmibeslik[2] / 100)) * (asikYukseklikT.yirmibeslik[1] / 100);
					 
					asikBoy = settings.stepBoy;
					
					asikMetreKupT = (asikBoy * asikAlan) * asikSayisi;
					 
					console.log("Temelli fab aşık kirişi metreküp 0-8: " + asikMetreKupT);
				}
				
				//hasanoğlan fabrika için:
				if(settings.stepBoy < 8){
					
					var asikAlan = ((asikYukseklikH.yirmibeslik[0] / 100) - (asikYukseklikH.yirmibeslik[2] / 100)) * (asikYukseklikH.yirmibeslik[1] / 100);
					
					asikBoyH = settings.stepBoy;
					
					asikMetreKupH = (asikBoyH * asikAlan) * asikSayisi;
					
					console.log("Hasanoğlan fab aşık kirişi metreküp <8: " + asikMetreKupH);
				}
				else if(settings.stepBoy >= 8 && settings.stepBoy < 8.4){

					var asikAlan = ((asikYukseklikH.yirmidokuzluk[0] / 100) - (asikYukseklik.yirmidokuzluk[2] / 100)) * (asikYukseklikH.yirmidokuzluk[1] / 100);
					
					asikBoyH = settings.stepBoy;
					asikMetreKupH = (asikBoyH * asikAlan) * asikSayisi;
					
					console.log("Hasanoğlan fab aşık kirişi metreküp 8-8.4: " + asikMetreKupH);
				}
				else if(settings.stepBoy >= 8.4 && settings.stepBoy < 8.7){

					var asikAlan = ((asikYukseklikH.otuzikilik[0] / 100) - (asikYukseklikH.otuzikilik[2] / 100)) * asikYukseklikH.yirmidokuzluk[0] / 100;
					
					asikBoyH = settings.stepBoy;
					asikMetreKupH = (asikBoyH * asikAlan) * asikSayisi;
					
					console.log("Hasanoğlan fab asik kirişi metreküp 8.4-8.7: " + asikMetreKupH);
				}
				else{

					var asikAlan = ((asikYukseklikH.otuzdortluk[0] / 100) - (asikYukseklikH.otuzdortluk[2] / 100)) * (asikYukseklikH.otuzdortluk[1] / 100);
					
					asikBoyH = settings.stepBoy;
					asikMetreKupH = (asikBoyH * asikAlan) * asikSayisi;
					
					console.log("Hasanoğlan fab aşık kirişi metreküp >8.7: " + asikMetreKupH);
				}
				//aşık metreküp
				
				//kolonlar metreküp
				
				
				
				//kolonlar metreküp
			}
			
			this.makasMetreKupHesabi = function(){
				
				if(settings.stepEn >= 7.5 && settings.stepEn < 10.5){
	
					makasAlan = (makasTemelli7.en[0] - makasTemelli7.en[1]) * makasTemelli7.yukseklik;

					makasAlanUcgen = ((makasTemelli7.en[0] - makasTemelli7.en[1]) * makasTemelli7.yukseklikUcgen) / 2;

					makasMetreKup = ((makasAlan * settings.stepEn) + (makasAlanUcgen * settings.stepEn)) * makasSayisi;
					
					console.log("temelli 7.5 - 10.5 makas metreküp: " + makasMetreKup);
				}

				else if(settings.stepEn >= 10.5 && settings.stepEn < 12){

					makasAlan = (makasTemelli9.en[0] - makasTemelli9.en[1]) * makasTemelli9.yukseklik;

					makasAlanUcgen = ((makasTemelli9.en[0] - makasTemelli9.en[1]) * makasTemelli9.yukseklikUcgen) / 2;

					makasMetreKup = ((makasAlan * settings.stepEn) + (makasAlanUcgen * settings.stepEn)) * makasSayisi;
					
					console.log("temelli 10.5 - 12 makas metreküp: " + makasMetreKup);
				}

				else if(settings.stepEn >= 12 && settings.stepEn < 14.5){

					makasAlan = (makasHasanoglan12.en[0] - makasHasanoglan12.en[1]) * makasHasanoglan12.yukseklik;

					makasAlanUcgen = ((makasHasanoglan12.en[0] - makasHasanoglan12.en[1]) * makasHasanoglan12.yukseklikUcgen) / 2;

					makasMetreKup = ((makasAlan * settings.stepEn) + (makasAlanUcgen * settings.stepEn)) * makasSayisi;
					
					//
					
					makasAlanT = (makasTemelli12.en[0] - makasTemelli12.en[1]) * makasTemelli12.yukseklik;

					makasAlanUcgenT = ((makasTemelli12.en[0] - makasTemelli12.en[1]) * makasTemelli12.yukseklik) / 2;

					makasMetreKupT = ((makasAlanT * settings.stepEn) + (makasAlanUcgenT * settings.stepEn)) * makasSayisi;
					
					console.log("hasanoğlan 12 - 14.5 makas metreküp: " + makasMetreKup + ", temelli 12 - 14.5 makas metreküp: " + makasMetreKupT);
				}

				else if(settings.stepEn >= 14.5 && settings.stepEn < 16.5){

					makasAlan = (makasHasanoglan15.en[0] - makasHasanoglan15.en[1]) * makasHasanoglan15.yukseklik;

					makasAlanUcgen = ((makasHasanoglan15.en[0] - makasHasanoglan15.en[1]) * makasHasanoglan15.yukseklikUcgen) / 2;

					makasMetreKup = ((makasAlan * settings.stepEn) + (makasAlanUcgen * settings.stepEn)) * makasSayisi;
					
					console.log("hasanoğlan 14.5 - 16.5 makas metreküp: " + makasMetreKup);
				}

				else if(settings.stepEn >= 16.5 && settings.stepEn < 18.5){

					makasAlan = (makasHasanoglan16.en[0] - makasHasanoglan16.en[1]) * makasHasanoglan16.yukseklik;

					makasAlanUcgen = ((makasHasanoglan16.en[0] - makasHasanoglan16.en[1]) * makasHasanoglan16.yukseklikUcgen) / 2;

					makasMetreKup = ((makasAlan * settings.stepEn) + (makasAlanUcgen * settings.stepEn)) * makasSayisi;

					//
					makasAlanT = (makasTemelli16.en[0] - makasTemelli16.en[1]) * makasTemelli16.yukseklik;

					makasAlanUcgenT = ((makasTemelli16.en[0] - makasTemelli16.en[1]) * makasTemelli16.yukseklikUcgen) / 2 ;

					makasMetreKupT = ((makasAlanT * settings.stepEn) + (makasAlanUcgenT * settings.stepEn)) * makasSayisi;
					
					console.log("hasanoğlan 16.5 - 18.5 makas metreküp: " + makasMetreKup + ", temelli 16.5 - 18.5 makas metreküp: " + makasMetreKupT);
				}

				else if(settings.stepEn >= 18.5 && settings.stepEn < 20.5){

					makasAlan = (makasHasanoglan18.en[0] - makasHasanoglan18.en[1]) * makasHasanoglan18.yukseklik;

					makasAlanUcgen = ((makasHasanoglan18.en[0] - makasHasanoglan18.en[1]) * makasHasanoglan18.yukseklikUcgen) / 2;

					makasMetreKup = ((makasAlan * settings.stepEn) + (makasAlanUcgen * settings.stepEn)) * makasSayisi;
					
					//
					
					makasAlanT = (makasTemelli18.en[0] - makasTemelli18.en[1]) * makasTemelli18.yukseklik;

					makasAlanUcgenT = ((makasTemelli18.en[0] - makasTemelli18.en[1]) * makasTemelli18.yukseklikUcgen) / 2;

					makasMetreKupT = ((makasAlanT * settings.stepEn) + (makasAlanUcgenT * settings.stepEn)) * makasSayisi;
					
					console.log("hasanoğlan 18.5 - 20.5 makas metreküp: " + makasMetreKup + ", temelli 18.5 - 20.5 makas metreküp: " + makasMetreKupT);
				}

				else if(settings.stepEn >= 20.5 && settings.stepEn < 22.5){

					makasAlan = (makasHasanoglan20.en[0] - makasHasanoglan20.en[1]) * makasHasanoglan20.yukseklik;

					makasAlanUcgen = ((makasHasanoglan20.en[0] - makasHasanoglan20.en[1]) * makasHasanoglan20.yukseklikUcgen) / 2;

					makasMetreKup = ((makasAlan * settings.stepEn) + (makasAlanUcgen * settings.stepEn)) * makasSayisi;
					
					//
					
					makasAlanT = (makasTemelli20.en[0] - makasTemelli20.en[1]) * makasTemelli20.yukseklik;

					makasAlanUcgenT = ((makasTemelli20.en[0] - makasTemelli20.en[1]) * makasTemelli20.yukseklikUcgen) / 2;

					makasMetreKupT = ((makasAlanT * settings.stepEn) + (makasAlanUcgenT * settings.stepEn)) * makasSayisi;
					
					console.log("hasanoğlan 20.5 - 22.5 makas metreküp: " + makasMetreKup + ", temelli 20.5 - 22.5 makas metreküp: " + makasMetreKupT);
				}

				else if(settings.stepEn >= 22.5 && settings.stepEn < 23.5){

					makasAlan = (makasHasanoglan21.en[0] - makasHasanoglan21.en[1]) * makasHasanoglan21.yukseklik;

					makasAlanUcgen = ((makasHasanoglan21.en[0] - makasHasanoglan21.en[1]) * makasHasanoglan21.yukseklikUcgen) / 2;

					makasMetreKup = ((makasAlan * settings.stepEn) + (makasAlanUcgen * settings.stepEn)) * makasSayisi;
					
					//
					
					makasAlanT = (makasTemelli21.en[0] - makasTemelli21.en[1]) * makasTemelli21.yukseklik;

					makasAlanUcgenT = ((makasTemelli21.en[0] - makasTemelli21.en[1]) * makasTemelli21.yukseklikUcgen) / 2;

					makasMetreKupT = ((makasAlanT * settings.stepEn) + (makasAlanUcgenT * settings.stepEn)) * makasSayisi;
					
					console.log("hasanoğlan 22.5 - 23.5 makas metreküp: " + makasMetreKup + ", temelli 22.5 - 23.5 makas metreküp: " + makasMetreKupT);
				}

				else if(settings.stepEn >= 23.5 && settings.stepEn < 26.5){

					makasAlan = (makasHasanoglan23.en[0] - makasHasanoglan23.en[1]) * makasHasanoglan23.yukseklik;

					makasAlanUcgen = ((makasHasanoglan23.en[0] - makasHasanoglan23.en[1]) * makasHasanoglan23.yukseklikUcgen) / 2;

					makasMetreKup = ((makasAlan * settings.stepEn) + (makasAlanUcgen * settings.stepEn)) * makasSayisi;
					
					//
					
					makasAlanT = (makasTemelli23.en[0] - makasTemelli23.en[1]) * makasTemelli23.yukseklik;

					makasAlanUcgenT = ((makasTemelli23.en[0] - makasTemelli23.en[1]) * makasTemelli23.yukseklikUcgen) / 2;

					makasMetreKup = ((makasAlanT * settings.stepEn) + (makasAlanUcgenT * settings.stepEn)) * makasSayisi;
					
					console.log("hasanoğlan 23.5 - 26.5 makas metreküp: " + makasMetreKup + ", temelli 23.5 - 26.5 makas metreküp: " + makasMetreKupT);
					
					
				}

				else if(settings.stepEn >= 26.5 && settings.stepEn < 30){

					makasAlan = (makasHasanoglan26.en[0] - makasHasanoglan26.en[1]) * makasHasanoglan26.yukseklik;

					makasAlanUcgen = ((makasHasanoglan26.en[0] - makasHasanoglan26.en[1]) * makasHasanoglan26.yukseklikUcgen) / 2;

					makasMetreKup = ((makasAlan * settings.stepEn) + (makasAlanUcgen * settings.stepEn)) * makasSayisi;
					
					//
					
					makasAlanT = (makasTemelli26.en[0] - makasTemelli26.en[1]) * makasTemelli26.yukseklik;

					makasAlanUcgenT = ((makasTemelli26.en[0] - makasTemelli26.en[1]) * makasTemelli26.yukseklikUcgen) / 2;

					makasMetreKup = ((makasAlanT * settings.stepEn) + (makasAlanUcgenT * settings.stepEn)) * makasSayisi;
					
					console.log("hasanoğlan 26.5 - 30 makas metreküp: " + makasMetreKup + ", temelli 26.5 - 30 makas metreküp: " + makasMetreKupT);
				}
			}
			
			this.kolonMetreKupHesabi = function(){
				
				
			}
			//obje ekleme ve kaldırma fonksiyonları son*
        }
		
        //GUI settings
        var settings = new Settings();
        app.gui = new dat.GUI({

			closed: true,
			opacity: 0.5,
			width: 323,
		});
		
		//**ara katların yerini değiştirme fonksiyonu, true ise eskisini sil yeni koordinatları ekle.
		var obj={
			
			change : function(){

				  	settings.redraw();
				  },
				   
			kismiAraKatEkle: function(){
				
					if((settings.araKatGenisligi > (settings.En / settings.stepEn)) || (settings.araKatUzunlugu > (settings.Boy / settings.stepBoy))){
					   
						   alert("Kısmi Arakat değerlerinizde bir yanlışlık olmalı, lütfen yeni değerler girerek tekrar deneyin. Binanın şuanki boyutlarına göre verebileceğiniz maksimum değerler: Arakat Genişliği: " + ((settings.En - (settings.En % settings.stepEn)) / settings.stepEn).toFixed(0) + ", Arakat Uzunluğu: " + ((settings.Boy - (settings.Boy % settings.stepBoy)) / settings.stepBoy).toFixed(0));
						
						   settings.KismiAraKatEkle = false;
					}	
				
				
					else{
						//kısmi ara katla alakalı her objeyi silme kısmı
					  	settings.kismiAraKatKolonlariEkle();
					  
					  	for(var i = -2; i < settings.araKatGenisligi * 6; i++){
								
							var selectedItem1 = app.scene.getObjectByName("hoho2" + i);
							app.scene.remove(selectedItem1);
								
							for(var j = -3; j < settings.araKatUzunlugu * 6; j++){
									
								var selectedItem1 = app.scene.getObjectByName("hoho" + i + j);
								app.scene.remove(selectedItem1);
							}
						}

						var selectedItem1 = app.scene.getObjectByName("KismiaraKat" + 1);
						app.scene.remove(selectedItem1); 
						var selectedItem1 = app.scene.getObjectByName("KismiaraKat1" + 2);
						app.scene.remove(selectedItem1); 
						var selectedItem1 = app.scene.getObjectByName("KismiaraKat2" + 3);
						app.scene.remove(selectedItem1); 
						var selectedItem1 = app.scene.getObjectByName("KismiaraKat3" + 4);
						app.scene.remove(selectedItem1);

					  	for(var i = - 2; i <= settings.araKatGenisligi * 6; i++){
									
							for(var j = - 3; j <= settings.araKatUzunlugu * 6; j++){
								
								var selectedItem1 = app.scene.getObjectByName("kolonAltlikKismiAraKat" + i + j);
								app.scene.remove(selectedItem1);
							}
						}
					  	
					  	for(var i = -2; i <= settings.araKatGenisligi * 6; i++){

							for(var j = -3; j <= settings.araKatUzunlugu *6; j++){
								
								var selectedItem1 = app.scene.getObjectByName("KismiaraKatDestek" + i + j);
								app.scene.remove(selectedItem1);
							}
						}
					  //kısmi ara katla alakalı her objeyi silme kısmı bitiş
					  
					  //arakat destek kolonları ekleme -if hol 3e bölünüyorsa-
					  if(settings.stepEn / 3 >= 7 || (settings.En === 60) || (settings.En === 61) || (settings.En === 62) || (settings.En === 63)){
						  
						for(var i = 0; i < settings.araKatGenisligi * 3; i++){

							for(var j = 0; j <= settings.araKatUzunlugu - 1; j++){

								var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));
								object.position.set((settings.stepEn / 3) + (settings.stepEn / 3) * i, (settings.Yükseklik / 4.7), - ((j + 1) * settings.stepBoy));
								object.scale.set(0.2, settings.Yükseklik / 11.2, 0.2);
								object.name = "KismiaraKatDestek" + i + j;
								app.scene.add(object);
							}
						}
					
					  //arakat destek kolonları ekleme bitiş
					  
					  //Obj alt bölümleri ekleme
							var manager = new THREE.LoadingManager();
							var mtlLoader = new THREE.MTLLoader();
							var objLoader = new THREE.OBJLoader();
							var fileloader = new THREE.FileLoader();
							var objLoader = new THREE.OBJLoader(manager);
							
							fileloader.load('blenderObjects/kolonAltlik.obj', function(data){

								for(var i = 0; i < settings.araKatGenisligi * 3; i++){
									
									for(var j = 1; j < settings.araKatUzunlugu + 1; j++){
									
									var object = objLoader.parse(data);
									object.position.set(((settings.stepEn / 3) * (i + 1)), 0, - 2 - (settings.stepBoy * j));
									object.name = "kolonAltlikKismiAraKat" + i + j;
									object.scale.set(0.21, 0.21, 0.21);
									object.traverse(function (child){

									if(child instanceof THREE.Mesh)
										child.material.color.setHex(0x969696);
									});
									app.scene.add(object);
									}
								}
							},
								function(xhr){
 
									// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
								},
									//if download fails
								function(xhr){

									   // console.error('An error happened : ' + xhr);
								}
							);
					  }
					  //arakat destek kolonları ekleme -if hol 3e bölünüyorsa- 
					  else{
						  
						  for(var i = 0; i < settings.araKatGenisligi * (3/2); i++){

							for(var j = 0; j <= settings.araKatUzunlugu - 1; j++){

								var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));
								object.position.set((settings.stepEn / 2) + (settings.stepEn / 2) * i, (settings.Yükseklik / 4.7), - ((j + 1) * settings.stepBoy));
								object.scale.set(0.2, settings.Yükseklik / 11.2, 0.2);
								object.name = "KismiaraKatDestek" + i + j;
								app.scene.add(object);
							}
						}
					
					  //arakat destek kolonları ekleme bitiş
					  
					  //Obj alt bölümleri ekleme
							var manager = new THREE.LoadingManager();
							var mtlLoader = new THREE.MTLLoader();
							var objLoader = new THREE.OBJLoader();
							var fileloader = new THREE.FileLoader();
							var objLoader = new THREE.OBJLoader(manager);
							
							fileloader.load('blenderObjects/kolonAltlik.obj', function(data){

								for(var i = 0; i < settings.araKatGenisligi * (3/2); i++){
									
									for(var j = 1; j < settings.araKatUzunlugu + 1; j++){
									
									var object = objLoader.parse(data);
									object.position.set(((settings.stepEn / 2) * (i + 1)), 0, - 2 - (settings.stepBoy * j));
									object.name = "kolonAltlikKismiAraKat" + i + j;
									object.scale.set(0.21, 0.21, 0.21);
									object.traverse(function (child){

									if(child instanceof THREE.Mesh)
										child.material.color.setHex(0x969696);
									});
									app.scene.add(object);
									}
								}
							},
								function(xhr){
 
									// console.log((xhr.loaded / xhr.total * 100) + '% loaded');
								},
									//if download fails
								function(xhr){

									   // console.error('An error happened : ' + xhr);
								}
							);
						  //boş bırak şimdilik.
					  }
											
							//Obj alt bölümleri ekleme bitiş

						if(settings.araKatGenisligi === 1){
							
							//ara kat genişliği == 1  olduğu zaman oluşturulacak ara katlar.
							var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));

							if(settings.araKatUzunlugu === 2){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy));
							}

							else if(settings.araKatUzunlugu === 1){
								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 2));
							}

							else if(settings.araKatUzunlugu === 3){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.68));
							}

							else if(settings.araKatUzunlugu === 4){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.5));
							}

							else if(settings.araKatUzunlugu === 5){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.4));
							}

							else if(settings.araKatUzunlugu === 6){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.33));
							}

							else if(settings.araKatUzunlugu === 7){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.28));
							}
							
							else if(settings.araKatUzunlugu === 8){
								
								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.25));
							}
							
							else if(settings.araKatUzunlugu === 9){
								
								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.22));
							}
							
							else if(settings.araKatUzunlugu === 10){
								
								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.2));
							}

							object.scale.set(- 0.1 + ((settings.stepEn * 1) / 5.2), 0.1, (settings.stepBoy * settings.araKatUzunlugu) / 5);
							object.name = "KismiaraKat" + 1;
							app.scene.add(object);
						
						}
					  
						else if(settings.araKatGenisligi === 0){
							
						}
						
						else if(settings.araKatGenisligi === 2){
							
							
							var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));

							if(settings.araKatUzunlugu === 2){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy));
							}

							else if(settings.araKatUzunlugu === 1){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 2));
							}

							else if(settings.araKatUzunlugu === 3){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.68));
							}

							else if(settings.araKatUzunlugu === 4){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.5));
							}

							else if(settings.araKatUzunlugu === 5){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.4));
							}

							else if(settings.araKatUzunlugu === 6){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.33));
							}

							else if(settings.araKatUzunlugu ===7){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.28));
							}
							
							else if(settings.araKatUzunlugu === 8){
								
								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.25));
							}
							
							else if(settings.araKatUzunlugu === 9){
								
								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.22));
							}
							
							else if(settings.araKatUzunlugu === 10){
								
								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.2));
							}

							object.scale.set(- 0.1 + ((settings.stepEn * 1) / 5.2), 0.1, (settings.stepBoy * settings.araKatUzunlugu) / 5);
							object.name = "KismiaraKat" + 1;
							app.scene.add(object);

							
							
							//ara kat genişliği 2 olduğu zaman bir sonraki arakatlar.
							var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));
							
							if(settings.araKatUzunlugu === 2){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy));
							}
						
							else if(settings.araKatUzunlugu === 1){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 2));
							}

							else if(settings.araKatUzunlugu === 3){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.68));
							}

							else if(settings.araKatUzunlugu === 4){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.5));
							}

							else if(settings.araKatUzunlugu === 5){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.4));
							}

							else if(settings.araKatUzunlugu === 6){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.33));
							}

							else if(settings.araKatUzunlugu === 7){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.28));
							}
							
							else if(settings.araKatUzunlugu === 8){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.25));
							}
							
							else if(settings.araKatUzunlugu === 9){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.22));
							}
							
							else if(settings.araKatUzunlugu === 10){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.2));
							}
							
							object.scale.set(- 0.1 + ((settings.stepEn * 1) / 5.2), 0.1, (settings.stepBoy * settings.araKatUzunlugu) / 5);
							object.name = "KismiaraKat1" + 2;
							app.scene.add(object);

						}
						
						else if(settings.araKatGenisligi === 3){
							
							var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));

							if(settings.araKatUzunlugu === 2){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy));
							}

							else if(settings.araKatUzunlugu === 1){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 2));
							}

							else if(settings.araKatUzunlugu === 3){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.68));
							}

							else if(settings.araKatUzunlugu === 4){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.5));
							}

							else if(settings.araKatUzunlugu === 5){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.4));
							}

							else if(settings.araKatUzunlugu === 6){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.33));
							}

							else if(settings.araKatUzunlugu === 7){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.28));
							}
							
							else if(settings.araKatUzunlugu === 8){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.25));
							}
							
							else if(settings.araKatUzunlugu === 9){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.22));
							}
							
							else if(settings.araKatUzunlugu === 10){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.2));
							}

							object.scale.set(- 0.1 + ((settings.stepEn * 1) / 5.2), 0.1, (settings.stepBoy * settings.araKatUzunlugu) / 5);
							object.name = "KismiaraKat" + 1;
							app.scene.add(object);							
							
							//ara kat genişliği 2 olduğu zaman bir sonraki arakatlar.
							var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));
							
							if(settings.araKatUzunlugu === 2){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy));
							}
						
							else if(settings.araKatUzunlugu === 1){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 2));
							}

							else if(settings.araKatUzunlugu === 3){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.68));
							}

							else if(settings.araKatUzunlugu === 4){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.5));
							}

							else if(settings.araKatUzunlugu === 5){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.4));
							}

							else if(settings.araKatUzunlugu === 6){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.33));
							}

							else if(settings.araKatUzunlugu === 7){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.28));
							}
							
							else if(settings.araKatUzunlugu === 8){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.25));
							}
							
							else if(settings.araKatUzunlugu === 9){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.22));
							}
							
							else if(settings.araKatUzunlugu === 10){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.2));
							}
							
							object.scale.set(- 0.1 + ((settings.stepEn * 1) / 5.2), 0.1, (settings.stepBoy * settings.araKatUzunlugu) / 5);
							object.name = "KismiaraKat1" + 2;								
							app.scene.add(object);	
							
							//var selectedItem1 = app.scene.getObjectByName("KismiaraKat1" + (sayac - 1));
							//app.scene.remove(selectedItem1);
							
							//3. katman ara katlar
							
							var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));
							
							if(settings.araKatUzunlugu === 2){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy));
							}
						
							else if(settings.araKatUzunlugu === 1){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 2));
							}

							else if(settings.araKatUzunlugu === 3){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.68));
							}

							else if(settings.araKatUzunlugu === 4){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.5));
							}

							else if(settings.araKatUzunlugu === 5){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.4));
							}

							else if(settings.araKatUzunlugu === 6){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.33));
							}

							else if(settings.araKatUzunlugu ===7){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.28));
							}
							
							else if(settings.araKatUzunlugu === 8){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.25));
							}
							
							else if(settings.araKatUzunlugu === 9){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.22));
							}
							
							else if(settings.araKatUzunlugu === 10){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.2));
							}
							
							object.scale.set(- 0.1 + ((settings.stepEn * 1) / 5.2), 0.1, (settings.stepBoy * settings.araKatUzunlugu) / 5);
							object.name = "KismiaraKat2" + 3;
							app.scene.add(object);
							
						}
						
						else if(settings.araKatGenisligi === 4){
							
							var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));

							if(settings.araKatUzunlugu === 2){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy));
							}

							else if(settings.araKatUzunlugu === 1){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 2));
							}

							else if(settings.araKatUzunlugu === 3){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.68));
							}

							else if(settings.araKatUzunlugu === 4){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.5));
							}

							else if(settings.araKatUzunlugu === 5){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.4));
							}

							else if(settings.araKatUzunlugu === 6){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.33));
							}

							else if(settings.araKatUzunlugu ===7){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.28));
							}
							
							else if(settings.araKatUzunlugu === 8){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.25));
							}
							
							else if(settings.araKatUzunlugu === 9){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.22));
							}
							
							else if(settings.araKatUzunlugu === 10){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (1)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.2));
							}

							object.scale.set(- 0.1 + ((settings.stepEn * 1) / 5.2), 0.1, (settings.stepBoy * settings.araKatUzunlugu) / 5);
							object.name = "KismiaraKat" + 1;								
							app.scene.add(object);
	
							//ara kat genişliği 2 olduğu zaman bir sonraki arakatlar.
							var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));
							
							if(settings.araKatUzunlugu === 2){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy));
							}
						
							else if(settings.araKatUzunlugu === 1){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 2));
							}

							else if(settings.araKatUzunlugu === 3){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.68));
							}

							else if(settings.araKatUzunlugu === 4){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.5));
							}

							else if(settings.araKatUzunlugu === 5){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.4));
							}

							else if(settings.araKatUzunlugu === 6){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.33));
							}

							else if(settings.araKatUzunlugu ===7){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.28));
							}
							
							else if(settings.araKatUzunlugu === 8){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.25));
							}
							
							else if(settings.araKatUzunlugu === 9){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.22));
							}
							
							else if(settings.araKatUzunlugu === 10){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (2)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.2));
							}
							
							object.scale.set(- 0.1 + ((settings.stepEn * 1) / 5.2), 0.1, (settings.stepBoy * settings.araKatUzunlugu) / 5);
							object.name = "KismiaraKat1" + 2;								
							app.scene.add(object);
							
							//var selectedItem1 = app.scene.getObjectByName("KismiaraKat1" + (sayac - 1));
							//app.scene.remove(selectedItem1);
							
							//3. katman ara katlar
							
							var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));
							
							if(settings.araKatUzunlugu === 2){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy));
							}
						
							else if(settings.araKatUzunlugu === 1){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 2));
							}

							else if(settings.araKatUzunlugu === 3){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.68));
							}

							else if(settings.araKatUzunlugu === 4){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.5));
							}

							else if(settings.araKatUzunlugu === 5){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.4));
							}

							else if(settings.araKatUzunlugu === 6){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.33));
							}

							else if(settings.araKatUzunlugu ===7){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.28));
							}
							
							else if(settings.araKatUzunlugu === 8){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.25));
							}
							
							else if(settings.araKatUzunlugu === 9){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.22));
							}
							
							else if(settings.araKatUzunlugu === 10){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (3)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.2));
							}
							
							object.scale.set(- 0.1 + ((settings.stepEn * 1) / 5.2), 0.1, (settings.stepBoy * settings.araKatUzunlugu) / 5);
							object.name = "KismiaraKat2" + 3;
							app.scene.add(object);
							
							//4. katman
							
							var object = new THREE.Mesh(geometry, new THREE.MeshLambertMaterial({}));
							
							if(settings.araKatUzunlugu === 2){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (4)), settings.Yükseklik / 2.25, - (settings.stepBoy));
							}
						
							else if(settings.araKatUzunlugu === 1){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (4)), settings.Yükseklik / 2.25, - (settings.stepBoy / 2));
							}

							else if(settings.araKatUzunlugu === 3){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (4)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.68));
							}

							else if(settings.araKatUzunlugu === 4){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (4)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.5));
							}

							else if(settings.araKatUzunlugu === 5){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (4)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.4));
							}

							else if(settings.araKatUzunlugu === 6){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (4)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.33));
							}

							else if(settings.araKatUzunlugu ===7){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (4)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.28));
							}
							
							else if(settings.araKatUzunlugu === 8){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (4)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.25));
							}
							
							else if(settings.araKatUzunlugu === 9){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (4)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.22));
							}
							
							else if(settings.araKatUzunlugu === 10){

								object.position.set(0 - (settings.stepEn / 2) + (settings.stepEn * (4)), settings.Yükseklik / 2.25, - (settings.stepBoy / 0.2));
							}
							
							object.scale.set(- 0.1 + ((settings.stepEn * 1) / 5.2), 0.1, (settings.stepBoy * settings.araKatUzunlugu) / 5);
							object.name = "KismiaraKat3" + 4;
							app.scene.add(object);
						}

					  else{
						
						var selectedItem1 = app.scene.getObjectByName("KismiaraKat" + 1);
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("KismiaraKat2" + 3);
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("KismiaraKat1" + 2);
						app.scene.remove(selectedItem1);
						var selectedItem1 = app.scene.getObjectByName("KismiaraKat3" + 4);
						app.scene.remove(selectedItem1);
						  
					  }}
				},
				   
			kismiAraKatKaldir: function(){
					  
					settings.objeSayisiniBul();
					settings.redraw();
				  },
			
			BinaCiz: function(){
				
				settings.metreKupHesaplari();
				settings.makasMetreKupHesabi();
				settings.KismiAraKatEkle = false;
				settings.redraw();
				settings.objeSayisiniBul();
				VincKontrol.open();
				araKatFolder.open();
				teklifAl.open();
			},
			
			teklifAl: function(){
				
				document.getElementById('gonderBoy').value = settings.Boy;
				
				document.getElementById('gonderEn').value = settings.En;
		
				if(settings.KismiAraKatEkle === false){
					
					kismiAraKatHolSayisi = 0;
					kismiAraKatAksSayisi = 0;
					kismiAraKatHolBoyutu = 0;
					kismiAraKatAksBoyutu = 0;
				}

				//window.location.assign('https://www.kardemir.com/Liste.aspx?yil=2017&s=FIYAT');
								
				window.location.assign('http://localhost/tutorialsPoint/holymoly/create-form.php?boy='+ document.getElementById('gonderBoy').value + '&en=' + document.getElementById('gonderEn').value + '&yukseklik=' + settings.Yükseklik + '&vincliKolonlar=' + settings.VincliKolonlar + '&vincKirisleri=' + settings.Vinc_Kirisleri_Ekle + '&vincKirisSayisi=' + vincKirisiSayisi + '&kolonSayisi=' + kolonSayisi + '&ruzgarKolonSayisi=' + ruzgarKolonSayisi + '&standSayisi=' + tumStandSayisi + '&olukSayisi=' + olukSayisi + '&makasSayisi=' + makasSayisi + '&kompleAraKat=' + settings.AraKatEkle + '&KompleAraKatHolSayisi=' + KompleAraKatHolSayisi + '&KompleAraKatHolBoyutu=' + KompleAraKatHolBoyutu + '&kismiAraKat=' + settings.KismiAraKatEkle + '&kismiAraKatHolSayisi=' + kismiAraKatHolSayisi + '&kismiAraKatAksSayisi=' + kismiAraKatAksSayisi + '&kismiAraKatHolBoyutu=' + kismiAraKatHolBoyutu + '&kismiAraKatAksBoyutu=' + kismiAraKatAksBoyutu + '&genelHolSayisi=' + genelHolSayisi + '&asikSayisi=' + asikSayisi + '&vincKirisYeriEn=' + vincKirisYeriEn + '&vincKirisYeriBoy=' + vincKirisYeriBoy + '&araKatYeriEn=' + araKatYeriEn + '&araKatYeriBoy=' + araKatYeriBoy + '&ttPlak=' + ttPlak + '&taliKiris=' + taliKiris + '&arakatKiris=' + arakatKiris + '&arakatKolon=' + arakatKolon);
			}
		};
		
        if(grid){
			
			//boyutlandırma folderı*
			var boyutlandirma = app.gui.addFolder('Bina Boyutlandırma');

			boyutlandirma.add(settings, 'Boy').min(5).max(100).step(0.01).name('Bina Uzunluğu (Boy)').onChange(function(value){
			   
                settings.Boy = value;
            });

			boyutlandirma.add(settings, 'En').min(5).max(100).step(0.01).name('Bina Genişliği (En)').onChange(function(value){
				
                settings.En = value;
            });

			boyutlandirma.add(settings, 'Yükseklik').min(3).max(28).step(0.01).name('Bina Yüksekliği').onChange(function(value){
				
				settings.Yükseklik = value;
			});

			boyutlandirma.add(obj, 'BinaCiz').name('Binayı Boyutlandır ' + ' (Uzunluk - Genişlik - Yükseklik)');

			boyutlandirma.open();
 			//boyutlandırma folderı end*

			//Vinç Kontrol*
			var VincKontrol = app.gui.addFolder('Vinçli Kolon ve Vinç Kirişleri');
				
			VincKontrol.add(settings, 'VincliKolonlar').name('Vinçli Kolonlar').onChange(function(k){
                    
                if(k === true){
                    
                	settings.kolEkle();
					if(settings.Vinc_Kirisleri_Ekle == true){
						
						settings.VincKirisiEkle();
					}
					else{
						
						settings.VincKirisleriKaldir();
					}
                }
                else{
					
					settings.VincsizKolonEkle();
					settings.VincKirisleriKaldir();
                }
            });

			VincKontrol.add(settings, 'Vinc_Kirisleri_Ekle').name('Vinç Kirişleri Ekle').onChange(function(y){
					
				if(y === true){
					
					settings.VincKirisiEkle();
					settings.objeSayisiniBul();
				}
					
				else{
					
					settings.VincKirisleriKaldir();
					settings.objeSayisiniBul();
				}
			});

			//VincKontrol.close();
			//Vinç Kontrol end*

			//ara kat folderı*
			var araKatFolder = app.gui.addFolder('Ara Kat Ekleme/Kaldırma');

			araKatFolder.add(settings, 'AraKatEkle').name('Komple Ara Kat Ekle').onChange(function(z){
					
				if(z === true){
					
					settings.AraKatEkleme();
					obj.kismiAraKatKaldir();
					settings.objeSayisiniBul();
					settings.kismiAraKatKaldir = true;
					settings.KismiAraKatEkle = false;
				}
					
				else{
					
					ttPlak = 0;
					taliKiris = 0;
					arakatKiris = 0;
					//settings.redraw();
					settings.AraKatKaldir();
					settings.objeSayisiniBul();
					
					if(settings.VincliKolonlar === true){
				   
						if(settings.En / settings.stepEn > 1){

							settings.VincliOrtaKolonEkle();
						}
						else{

							settings.kolEkle();
						}
					}
					else{
					
						if(settings.En / settings.stepEn > 1){

							settings.VincsizOrtaKolonEkle();
						}
						
						else{

							settings.VincsizKolonEkle();
						}
					}
				}
			});

			araKatFolder.add(settings, 'araKatUzunlugu').min(1).max(10).step(1).name('Kısmi Ara Kat Uzunluğu (Kaç Aks Olduğu)').onFinishChange(function(value){
				
				settings.araKatUzunlugu = value;
				//obj.kismiAraKatEkle();
			});

			araKatFolder.add(settings, 'araKatGenisligi').min(1).max(4).step(1).name('Kısmi Ara Kat Genişliği (Kaç Hol olduğu)').onFinishChange(function(value){
				
				settings.araKatGenisligi = value;
				//obj.kismiAraKatEkle();
			});

			araKatFolder.add(settings, 'KismiAraKatEkle').name('Kısmi Ara Kat Ekle').onChange(function(m){
				
				settings.KismiAraKatEkle = true;
				settings.kismiAraKatKaldir = false;
				obj.kismiAraKatEkle();
				settings.objeSayisiniBul();
			});

			araKatFolder.add(settings, 'kismiAraKatKaldir').name('Kısmi Ara Katları Kaldır').onChange(function(w){
				
				ttPlak = 0;
				taliKiris = 0;
				arakatKiris = 0;
				settings.kismiAraKatKaldir = true;
				settings.KismiAraKatEkle = false;
				obj.kismiAraKatKaldir();
				settings.objeSayisiniBul();
			});

			//araKatFolder.open();
			//ara kat folderı end*

			app.gui.add(obj, 'change').name('Çizimi Tekrar Oluştur. (Hatalı çizim olduğunda tıklayınız.)');
			
			var teklifAl = app.gui.addFolder('Teklif Almak için Aşağıdaki Butonu Tıklayınız.');
			
			teklifAl.add(obj, 'teklifAl').name('Teklif Al');
			
			//teklifAl.open();
			
			//GUI kontrol text manipülasyonu < renk, boyut, button >
			  	app.gui.__ul.childNodes[3].childNodes[0].childNodes[0].classList += ' reset_button';
				araKatFolder.__ul.childNodes[4].childNodes[0].childNodes[0].classList += ' kontrol_buttons';
				araKatFolder.__ul.childNodes[5].childNodes[0].childNodes[0].classList += ' kontrol_buttons';
				boyutlandirma.__ul.childNodes[4].childNodes[0].childNodes[0].classList += ' kontrol_buttons';
				teklifAl.__ul.childNodes[1].childNodes[0].childNodes[0].classList += ' teklif_button';
        }

		//ekran ve grid oluşturulduktan sonra ilk kenar kolonlarını da oluştur.
		settings.objeSayisiniBul();
		settings.VincsizKolonEkle();
		//ilk grid oluşumu, özellikler.js'ye ilk değerleri yolla.
        app.grid = new LabeledGrid(60, 20, (60/ (60/10+1)), (60/ (60/30+1)), 13, [0,1,0], 0x000055, 0.21,  true, "#000000", "left");
        app.scene.add(app.grid);
        return app;
    }
	
    static setupRenderer(container){

        const size={

            width: container.clientWidth,
            height: container.clientHeight
        };

        const renderer = new THREE.WebGLRenderer({
            
            antialias: true, alpha: true, preserveDrawingBuffer: true
        });

        renderer.setSize(size.width, size.height);
        container.appendChild(renderer.domElement);
        return renderer;
    }

    static onWindowResize(e){
		
        let app = ThreeUtils.app;
        var size = {
			
            width:  app.container.clientWidth,
            height: app.container.clientHeight
        };
		
        app.renderer.setSize(size.width / 1, size.height / 1);
        app.camera.aspect = size.width / size.height;
        app.camera.updateProjectionMatrix();
    }

    static animate(){

        let app = ThreeUtils.app;
        app.controls.update();
        requestAnimationFrame(ThreeUtils.animate);

        if (app.frame) app.frame();
        app.renderer.render(app.scene, app.camera);
    }
}