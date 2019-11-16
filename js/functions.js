$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:25,
        responsiveClass:true,
        autoplay:true,
        autoplayHoverPause:true,
        nav: false,
        navText: ['',''],
        dots: true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            }
        }
    });
    initMap();
});

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