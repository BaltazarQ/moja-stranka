$(document).ready(function($) {

	// 
	// 
	// ===== COVER ===== 
	// 
	// 

	// 
	// ===== ZMENA OBRAZKOV V COVERI A OPAKOVANIE DOOKOLA ===== //
	// 
	var cover = $('#cover'),
		covers = $('.photo-event');

	// VSETKY OBRAZKY V COVERI OKREM POSLEDNEHO SA SKRYJU
	covers.children(':not(:last)').hide();

	// POSLEDNY OBRAZOK Z HTML JE ZOBRAZENY NA VRCHU, TEN POSLEDNY MA FADEOUT A ZAROVEN SA PREPENDNE NA ZACIATOK ZOZNAMU, PRETO SA MOZU OBRAZKY MENIT STALE DOOKOLA
	var sliderInterval = setInterval( function () {
		covers.children(':last').fadeOut(1500, function() {
			$(this).prependTo( covers);
		}).prev().fadeIn(1500);
	}, 2500);
	// FADEIN PREDPOSLEDNEHO MI SPOSOBI, ZE UZ PRI MIZNUTI OBRAZKU SA ZACNE ZOBRAZOVAT TEN CO JE POD NIM. TAKTO MI NEVZNIKA PRI PRVOM MIZNUTI OBRAZKU "HLUCHE" MIESTO, KEDY PRVY MIZNE ALE DRUHY SA ESTE NEZOBRAZUJE.
	// PRI DRUHOM TO UZ PROBLEM NIE JE, PRETOZE KYM JEDEN MIZNE, DRUHY ZA IM JE UZ DOBRAZENY

	// PRI KLIKNUTI NA OBRAZOK V COVERI SA ZASTAVI PREBLIKAVANIE OBRAZKOV
	covers.on('click', function () {
		clearInterval( sliderInterval);
	});

	// 
	// ZAPAUZOVANIE A ZNOVU SPUSTENNE MENENIA OBRAKOV
	// 

	// VYTVORENIE OBJECTU SLIDER
	// var Slider = {

	// 	intervalId: null,
	// 	running: false,
	// 	config: {
	// 		fadeSpeed: 1500,
	// 		delayTime: 3000
	// 	},

	// 	// NASTAVENIE SETTERU
	// 	set: function ( id ) {
	// 		this.intervalId = id;
	// 	},

	// 	// NASTAVENIE GETTERU
	// 	get: function() {
	// 		return 'IDcko intervalu je: ' + this.intervalId;
	// 	},

	// 	// SPUSTENIE MENENIA OBRAZKOV
	// 	start: function( settings ) {
	// 		var slider = this;

	// 		// console.log( slider.config );
	// 		// console.log( settings );

	// 		$.extend( slider.config, settings);

	// 		// console.log( slider.config );

	// 		this.intervalId = setInterval( function () {
	// 			covers.children(':last')
	// 			.fadeOut(slider.config.fadeSpeed, function() { $(this).prependTo( covers); })
	// 			.prev().fadeIn(slider.config.fadeSpeed);
	// 		}, slider.config.delayTime);

	// 		this.running = true;
	// 		console.log( 'zacali sme');
	// 	},

	// 	// ZAPAUZOVANIE MENENIA OBRAZKOV
	// 	pause: function() {
	// 		clearInterval( this.intervalId );
	// 		this.intervalId = null;

	// 		this.running = false;
	// 		console.log( 'zapauzovali sme');
	// 	},

	// 	// ZNOVUSPUSTENIE MENENIA OBRAZKOV
	// 	resume: function() {
	// 		if ( !this.intervalId ) this.start();
	// 	},

	// 	// ZNOVUSPUSTENIE CEZ TOOGLE
	// 	toggle: function() {
	// 		if ( this.running ) this.pause();
	// 		else this.resume();
	// 	}
	// };

	// // SPUSTIM SLIDER OBJECT
	// Slider.start({
	// 	fadeSpeed: 500,
	// 	delayTime: 2000
	// });

	// // NA KLIKNUTIE NA OBRAZOK ZAPAUZUJEM, DALSIM KLIKNUTIM  ZNOVA SPUSTIM
	// covers.on('click', function() {
	// 	Slider.toggle();
	// });


	// 
	// 
	// ===== ANIMACIA FARIEB ===== 
	// 
	// 

	// 
	// ===== ZMENA POZADIA MENU ELEMENTOV NA NAHODNU FARBU ===== //
	// 
	$.fx.speeds.verySlow = 2000;
	// ak si dam do konzoly console.dir($), vypise mi vsetky specificke veci pouzitelne v jquerry
	// specialne FN a FX
	// FN je zoznam vsetkych funkcii, ktore sa daju v jquerry pouzit
	// FX je Effects - zoznam vsetkych moznych efektov pozitelnych v jquerry + prednastavene hodnoty
	// napr. 'speeds' maju nastavene 'default', 'fast', 'slow', tieto mozem pouzit ako atribut namiesto hodnoty
	// tymto zapisom vyssie si mozem pridat vlastne nastavenia, ktore mozem potom pouzit
	
	var colors = ['red', 'blue', 'green', 'yellow', 'orange'];

	$('.navbar').find('li').on('mouseenter', function() {
		if ( $(this).is(':animated') ) return;					// TOTO MI ODSTAVI NAVRSTVENIE ANIMACII - KED S MYSOU PREBEHNEM VELAKRAT PONAD 'a' ELEMENT, TAK SA MI NEBUDU OPAKOVAT TOLKO KRAT, KOLKO KRAT SOM TAM PRESIEL MYSOU, ALE HNED AKO VYJDEM VON Z 'a' ELEMENTU, TAK SA UKONCI ANIMACIA - ZBADAR ROZDIEL PO ZAKOMENTOVANI
		
		var newColor = colors[Math.floor(Math.random() * colors.length)];

		$(this).animate({ backgroundColor: newColor }, 'verySlow');	// animuje mi pozadie na novu farbu, trvanie je nastavene hodnotou, ktoru som si pridal vyssie cez '$.fx.speeds.verySlow = 5000;' 
	});

	
	// 
	// 
	// ===== PRIDANIE SIPKY PRE POSUN HORE NA UVOD STRANKY =====
	// 
	// 

	var backToTop = $( '<a>', {
						href: '#home',
						class: 'back-to-top',
						html: '<i class="fa fa-caret-up fa-5x"></i>'
	});

	backToTop
		.hide()
		.appendTo('body')
		.on('click', function () {
			$('html, body').animate({ scrollTop: 0});
		});

	var win = $(window);
	win.on('scroll', function () {
		if ( win.scrollTop() >= 200 ) backToTop.fadeIn();
		else backToTop.hide();
	});


	//
	// ROZKLIKNUTIE MENU
	// 
	var menuSmall = $('.menu-small')
	var menu = $('.menu')
	var gallery = $('.gallery')
	var galleryMenu = $('.gallery-menu')

	menu.css({'display': 'none'})

	menuSmall.on('click', function(){
		menu.slideToggle(500)
	})

	gallery.on('click', function(event){
		galleryMenu.slideToggle(500)
	})
	
		})(jQuery);

// $('#cover').slide(2000);