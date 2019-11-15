$(document).ready(function(){
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		navText: ['<img src="images/back.png" alt="flecha">','<img src="images/next.png" alt="flecha">'],
		responsive:{
			0:{
				items:1,
				nav:false,
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		}
	})
});

$(window).load(function(){
	initMap();
	maquinaEscribir();

	$('.nav a#page-nosotros').click(function(){
		$('.sectionNosotros').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});
	});

	$('.flechaAbajo').click(function(){
		$('.sectionNosotros').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});
	});

	$('.nav a#page-seleccion').click(function(){
		$('.sectionSeleccion').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});
	});

	$('.nav a#page-nomina').click(function(){
		$('.sectionNomina').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});
	});

	$('.nav a#page-equipo').click(function(){
		$('.sectionEquipo').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});
	});

	$('.nav a#page-contactenos').click(function(){
		$('.sectionContacto').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});
	});

	if ($(window).width() <= 991) {
		$('.sectionNomina .fotoNomina').insertBefore('.sectionNomina .textoSection');
	} else {
		$('.sectionNomina .textoSection').insertBefore('.sectionNomina .fotoNomina');
	}

	$(window).resize(function(){
		if ($(window).width() <= 991) {
			$('.sectionNomina .fotoNomina').insertBefore('.sectionNomina .textoSection');
		} else {
			$('.sectionNomina .textoSection').insertBefore('.sectionNomina .fotoNomina');
		}
	});

	/*$('.hojaVida').click(function(){
		$('.alerta').fadeIn();
		$('body').css({overflow: 'hidden'});
	});

	$('.cerrarAlerta').click(function(){
		$('.alerta').fadeOut();
		$('body').css({overflow: 'initial'});
	});*/
})

function maquinaEscribir(){
	$("#typed").typed({
		strings: ["BOTOX", "MESOTERAPIA", "RELLENOS FACIALES", "PEELING", "ACNÉ", "MICRODERMOABRASIÓN", "OBESIDAD LOCALIZADA", "CELULITIS", "FLACIDEZ"],
		typeSpeed: 50,
		backDelay: 1500,
		loop: true,
		// defaults to false for infinite loop
		loopCount: false,
		callback: function(){ foo(); }
	});

	function foo(){ console.log("Callback"); }
}



function initMap() {
  var customMapType = new google.maps.StyledMapType([
	{
		"featureType": "landscape",
		"elementType": "labels",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "transit",
		"elementType": "labels",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "poi",
		"elementType": "labels",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "water",
		"elementType": "labels",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "road",
		"elementType": "labels.icon",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"stylers": [
			{
				"hue": "#00aaff"
			},
			{
				"saturation": -100
			},
			{
				"gamma": 2.15
			},
			{
				"lightness": 12
			}
		]
	},
	{
		"featureType": "road",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"visibility": "on"
			},
			{
				"lightness": 24
			}
		]
	},
	{
		"featureType": "road",
		"elementType": "geometry",
		"stylers": [
			{
				"lightness": 57
			}
		]
	}
], {
	  name: 'Custom Style'
  });
  var customMapTypeId = 'custom_style';


  var map = new google.maps.Map(document.getElementById('map'), {
	zoom: 15,
	center: {lat: 20.6778102, lng: -103.3752161},
	mapTypeControlOptions: {
	  mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
	}
  });

  map.mapTypes.set(customMapTypeId, customMapType);
  map.setMapTypeId(customMapTypeId);

  var image = 'images/pinMapa.png';
  var marker = new google.maps.Marker({
	position: {lat: 20.6778102, lng: -103.3752161	},
	map: map,
	icon: image
  });

  map.addListener('center_changed', function() {
	window.setTimeout(function() {
	  map.panTo(marker.getPosition());
	}, 3000);
  });

  marker.addListener('click', function() {
	map.setZoom(16);
	map.setCenter(marker.getPosition());
  });
}