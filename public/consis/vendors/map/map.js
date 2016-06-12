// Maps
    var map;
        $(document).ready(function(){
            map = new GMaps({
                el: '#map',
                lat: -7.208513,
                lng: -48.243873,
                zoomControl : false, 
                zoomControlOpt: {
                style : 'SMALL',
                position: 'TOP_LEFT'
            },
            panControl : false,
            streetViewControl : false, 
            mapTypeControl: false,
            scrollwheel: false,
            overviewMapControl: false
        });
        map.addMarker({
            lat: -7.2092157,
            lng: -48.2370496,
            title: 'I Consis', 
        });
    });