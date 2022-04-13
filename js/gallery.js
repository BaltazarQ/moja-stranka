$(document).ready(function($) {


	// 
	// 
	// ===== GALLERY ===== 
	// 
	// 

	// 
	// ===== PREKLIKAVANIE MEDZI KATEGORIAMI V GALERII ===== //
	// 
	var gallery = $('.gallery'),
        galleryLinks = gallery.find('a'),
        time = 2000;

        galleryLinks.on('click', function(event) {
            $('html,body').animate({ scrollTop: $(this.hash).offset().top }, time);
            event.preventDefault();
        })


	// 
	// PRIESVITNOST OBRZKOV		========== NEFUNGUJE ==========
	// 
	var gallery = $('.gallery-set'),
	    startingOpacity = gallery.find('img').css('opacity');

	gallery.on('mouseenter mouseleave', 'img', function(event) {
		var opacity = event.type === 'mouseenter' ? 0.5 : startingOpacity;
		$(this).stop().fadeTo(opacity);
	});


	// 
	// LIGHTBOX
	// 

	var gallery = $('.gallery-set'),
	overlay = $('<div/>', { id: 'overlay' });
	
	// VYTVORIME OVERLAY
		overlay.appendTo('body').hide();

	// PO KLIKNUTI NA OBRAZOK
	gallery.on('click', 'a', function(event) {

		// VYTIAHNEME Z OBRAZKA JEHO href A ZOBRAZIME HO NA OVERLAY
		var href = $(this).attr('href'),
			image = $('<img>', { src: href, alt: '' });

			overlay.html( image )
			       .show();

		// SA ZOBRAZI LIGHTBOX
		// overlay.show();
		event.preventDefault();
	});

	// SKRYJEME OVERLAY
	overlay.on('click', function() {
		overlay.hide();
	});
	
	// TLACIDLOM ESC ZAVRIEME OBRAZOK
	$(document).on('keyup', function(event) {
		if ( event.which === 27 ) overlay.hide();
	});



	// 
	// 
	// === AJAX ===
	// 
	// 

	var gallery = $('.gallery-set'),
	    selected = $('.gallery-list').find('.selected');

	// 
	$('.gallery-list a').on('click', function(event) {

		// nechcem ist na podstranku
		event.preventDefault();
		
		// vytiahneme adresu linku
		var a = $(this),
		li = a.parent(),
		href = a.attr('href');
		
		// ak klikame viackrat na rovnaky href, nenacitava sa stale znova
		if ( selected.is( li )) return;
		
		// vyznacime noveho selected rodica
		selected = li;
		
		// oznacime link, na ktory sme klikli ako selected
		li.addClass('selected')
		.siblings().removeClass('selected');

		// nechame miznut aktualnu galeriu
		gallery.find('.gallery-set').fadeOut();

		// zo stranky https://j11y.io/jquery/ najdeny kod, vo vyhladavaci zadane"load" 
		$.ajax({
            url: href,
            type: 'GET',
            dataType: 'html',
        }).done(function (data) {

			var newGallery = $(data).find('.gallery-set');
			gallery.html( newGallery );

			newGallery.addClass('fadeIn' + selected.data('from').capipalize());
        });
		
		// // ajax request, do elementu gallery nacitame obsah stranky z tohoto linku
		// gallery.load(href + ' .gallery-set');
		

	});
			

		})(jQuery);

