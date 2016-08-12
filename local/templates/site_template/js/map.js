var map;


function show_office(idx) {
    $('.office').removeClass('contacts-active');
    $('#office-'+idx).addClass('contacts-active');
    $('.office-0').css('display','none');
    $('.office-1').css('display','none');
    $('.office-'+idx).css('display','block');
    go_center(idx);
}

var list_center = [
    ['Морской клуб',map_contacts_lat, map_contacts_lng,map_contacts_zoom]
];


function reset_map() {
    console.log('MAP RESET');
    google.maps.event.trigger(map,'resize');
    map.setCenter(new google.maps.LatLng(map_contacts_lat, map_contacts_lng));
    map.setZoom(14);
}

function go_point(idx) {
    var lat=list_point[idx][1];
    var lng=list_point[idx][2];
    map.setCenter(new google.maps.LatLng(lat,lng));
    map.setZoom(17);
    console.log('GO POINT '+idx);
    /*$('html, body').animate({
     scrollTop: $("#map-canvas").offset().top
     }, 0);*/
}

function go_center(idx) {
    var lat=list_center[idx][1];
    var lng=list_center[idx][2];
    map.setCenter(new google.maps.LatLng(lat,lng));
    map.setZoom(list_center[idx][3]);

    console.log('GO CENTER '+idx);

    for(var i=0;i<map_markers.length;i++) {
        map_markers[i].setIcon('img/mapmark.png');
    }

    map_markers[idx].setIcon('img/mapmark-active.png');

    /*$('html, body').animate({
     scrollTop: $("#map-canvas").offset().top
     }, 0);*/
}


function showRoute(from_lat,from_lng,to_lat,to_lng) {
    directionsDisplay = new google.maps.DirectionsRenderer();
    directionsService = new google.maps.DirectionsService();

    var request = {
        origin: new google.maps.LatLng(from_lat,from_lng), //точка старта
        destination: new google.maps.LatLng(to_lat,to_lng), //точка финиша
        travelMode: google.maps.DirectionsTravelMode.DRIVING //режим прокладки маршрута
    };

    directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
        }
    });

    directionsDisplay.setMap(map);
}

function initialize() {

    var mapOptions = {
        center: new google.maps.LatLng(map_contacts_lat, map_contacts_lng),
        zoom: map_contacts_zoom
    };

    map = new google.maps.Map(document.getElementById("hotel-map"),
        mapOptions);

    var styles = [
        {
            stylers: [
                { hue: "#e2dfd0" },
                { saturation: -50 }
            ]
        },{
            featureType: "road",
            elementType: "geometry",
            stylers: [
                { lightness: 100 },
                { visibility: "simplified" }
            ]
        },{
            featureType: 'water',
            elementType: 'all',
            stylers: [
                { hue: '#e2dfcf' },
                { saturation: -47 },
                { lightness: -5 },
                { visibility: 'on' }
            ]
        },{
            featureType: 'water',
            elementType: 'labels',
            stylers: [
                { hue: '#d3ceb6' },
                { saturation: -45 },
                { lightness: 4 },
                { visibility: 'off' }
            ]
        },
        {
            featureType: 'poi',
            elementType: 'labels',
            stylers: [
                { hue: '#d3ceb6' },
                { saturation: -42 },
                { lightness: -1 },
                { visibility: 'off' }
            ]
        },{
            featureType: 'transit',
            elementType: 'labels',
            stylers: [
                { hue: '#d3ceb6' },
                { saturation: 25 },
                { lightness: 8 },
                { visibility: 'off' }
            ]
        },
        {
            featureType: 'road',
            elementType: 'labels',
            stylers: [
                { hue: '#d3ceb6' },
                { saturation: -75 },
                { lightness: 36 },
                { visibility: 'on' }
            ]
        },
        {
            featureType: "road",
            elementType: "labels",
            stylers: [
                { visibility: "simplified" }
            ]
        }
    ];

    map.setOptions({styles: styles});

    //setMarkers(map, list_center,'img/map-pin-dark.png');
    //setMarkers(map, list_center);

    showRoute(map_contacts_from_lat,map_contacts_from_lng,map_contacts_lat,map_contacts_lng);

}




/**

 * Data for the markers consisting of a name, a LatLng and a zIndex for
 * the order in which these markers should display on top of each
 * other.

 */


var default_pin = {
    url: 'img/mapmark.png',
    // This marker is 20 pixels wide by 32 pixels tall.
    size: new google.maps.Size(32, 45),
    // The origin for this image is 0,0.
    origin: new google.maps.Point(0,0),
    // The anchor for this image is the base of the flagpole at 0,32.
    anchor: new google.maps.Point(16,45)
};

var active_pin = {
    url: 'img/mapmark-active.png',
    // This marker is 20 pixels wide by 32 pixels tall.
    size: new google.maps.Size(32, 45),
    // The origin for this image is 0,0.
    origin: new google.maps.Point(0,0),
    // The anchor for this image is the base of the flagpole at 0,32.
    anchor: new google.maps.Point(16,45)
};

var map_markers=[];

function setMarkers(map, locations) {
    // Add markers to the map

    // Marker sizes are expressed as a Size of X,Y
    // where the origin of the image (0,0) is located
    // in the top left of the image.

    // Origins, anchor positions and coordinates of the marker
    // increase in the X direction to the right and in
    // the Y direction down.
    // Shapes define the clickable region of the icon.
    // The type defines an HTML &lt;area&gt; element 'poly' which
    // traces out a polygon as a series of X,Y points. The final
    // coordinate closes the poly by connecting to the first
    // coordinate.
    var shape = {
        coord: [0, 0, 32, 0, 32, 45, 0 , 45],
        type: 'poly'
    };
    for (var i = 0; i < locations.length; i++) {
        var filial = locations[i];
        var myLatLng = new google.maps.LatLng(filial[1], filial[2]);
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: default_pin,
            shape: shape,
            title: filial[0],
            zIndex: filial[3]
        });
        map_markers.push(marker);
    }
}

google.maps.event.addDomListener(window, 'load', initialize);

