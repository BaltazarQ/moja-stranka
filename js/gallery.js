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
	// PRIESVITNOST OBRAZKOV
	// 

	var galleryOpacity = function() {
		
		var galleryImg = $('.gallery-set').find('img');
		
		galleryImg.on('mouseenter mouseleave', function(event) {
			event.type === 'mouseenter' ? $(this).animate({opacity: '0.7'}, 300) : $(this).animate({opacity: '1'}, 300)
		})
	}

	galleryOpacity()



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

			// SA ZOBRAZI LIGHTBOX
			overlay.html( image )
			       .show();

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

	var gallery = $('.gallery'),
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
		gallery.find('.gallery-set').fadeOut(1000);

		// zo stranky https://j11y.io/jquery/ najdeny kod, vo vyhladavaci zadane"load" 
		$.ajax({
            url: href,
            type: 'GET',
            dataType: 'html',
        }).done(function (data) {

			var newGallery = $(data).find('.gallery-set');
			gallery.hide().html( newGallery );
			gallery.fadeIn(1000);

			galleryOpacity();
        });
	});
			

		})(jQuery);

