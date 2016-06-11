// Maps
    var map;
        $(document).ready(function(){
            map = new GMaps({
                el: '#map',
                lat: 38.8244174,
                lng:-76.982878,
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
            lat: 38.8232806,
            lng: -76.9663126,
            title: 'marlow heights', 
        });
    });