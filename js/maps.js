$("#location").prepend('<div id="map"></div>');

        var map;
        var bounds;
        var geocoder;
        var center;

        function initialize() {
          var latLng = new google.maps.LatLng(5.7496513, -0.1899174);

          var mapOptions = {
            center: latLng,
            zoom: 12,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,

            styles: [
              {
                elementType: 'geometry',
                stylers: [{color: '#f5f5f5'}]
              },
              {
                elementType: 'labels.icon',
                stylers: [{visibility: 'off'}]
              },
              {
                elementType: 'labels.text.fill',
                stylers: [{color: '#616161'}]
              },
              {
                elementType: 'labels.text.stroke',
                stylers: [{color: '#f5f5f5'}]
              },
              {
                featureType: 'administrative.locality',
                elementType: 'labels.text.fill',
                stylers: [{color: '#357ae8'}]
              },
              {
                featureType: 'administrative.province',
                elementType: 'labels.text',
                stylers: [{visibility: 'off'}]
              },
              {
                elementType: 'geometry.stroke',
                stylers: [{color: '#cccccc'},{weight: 0.5}]
              },
              {
                featureType: 'administrative.land_parcel',
                elementType: 'labels.text.fill',
                stylers: [{color: '#bdbdbd'}]
              },
              {
                featureType: 'poi',
                elementType: 'geometry',
                stylers: [{color: '#eeeeee'}]
              },
              {
                featureType: 'poi',
                elementType: 'labels.text.fill',
                stylers: [{color: '#757575'}]
              },
              {
                featureType: 'poi.park',
                elementType: 'geometry',
                stylers: [{color: '#e5e5e5'}]
              },
              {
                featureType: 'poi.park',
                elementType: 'labels.text.fill',
                stylers: [{color: '#9e9e9e'}]
              },
              {
                featureType: 'road',
                elementType: 'geometry',
                stylers: [{color: '#e5e5e5'}]
              },
              {
                featureType: 'road.arterial',
                elementType: 'labels.text.fill',
                stylers: [{color: '#757575'}]
              },
              {
                featureType: 'road.highway',
                elementType: 'geometry',
                stylers: [{color: '#dadada'}]
              },
              {
                featureType: 'road.highway',
                elementType: 'labels.text.fill',
                stylers: [{color: '#7f7f7f'}]
              },
              {
                featureType: 'road.local',
                elementType: 'labels.text.fill',
                stylers: [{color: '#9e9e9e'}]
              },
              {
                featureType: 'transit.line',
                elementType: 'geometry',
                stylers: [{color: '#e5e5e5'}]
              },
              {
                featureType: 'transit.station',
                elementType: 'geometry',
                stylers: [{color: '#eeeeee'}]
              },
              {
                featureType: 'water',
                elementType: 'geometry',
                stylers: [{color: '#c9c9c9'}]
              },
              {
                featureType: 'water',
                elementType: 'labels.text.fill',
                stylers: [{color: '#9e9e9e'}]
              }
            ]

          };

          map = new google.maps.Map(document.getElementById("map"), mapOptions);
          geocoder = new google.maps.Geocoder();
          bounds = new google.maps.LatLngBounds();

          // Info Window
          var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<div id="bodyContent">'+
            '<p><b>Creadar</b> <br />TM 244/2, Oyarifa &mdash; Accra.' +
            '</p>'+
            '</div>'+
            '</div>';
          var infowindow = new google.maps.InfoWindow({
            content: contentString
          });


          // Marker
          var markerIcon = 'http://www.creadar.com/img/icons_sm/marker_icon.svg';
          var marker = new google.maps.Marker({
            map: map,
            position: latLng,
            title: "Oyarifa, Accra",
            animation: google.maps.Animation.DROP,
            icon: markerIcon
          });
          // Marker on-click
          marker.addListener('click', function() {
            infowindow.open(map, marker);
            marker.setAnimation(google.maps.Animation.BOUNCE);
          });
          

          bounds.extend(location);
          map.fitBounds(bounds);
        }
      
        initialize();

        // Responsive Map
        google.maps.event.addDomListener(map, "idle", function(){
          center = map.getCenter();
        });
        $(window).resize(function(){
          map.setCenter(center);
        });
