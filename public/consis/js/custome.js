;(function($){
    "use strict"; 
     
    // Countdown JS
    $('#example').countdown({
        date: '10/24/2016 23:59:59',
        offset: -8,
        day: 'Dia',
        days: 'Dias',
        hour:'Hora',
        hours:'Horas',
        minute:'Minuto',
        minutes:'minutos',
        second:'Segundo',
        seconds:'Segundos'
    });
    
    // MixItUp JS
    $(function(){
        $('.gallery_item .slides').mixItUp();
    }); 
    
   
    
    $(window).load(function() {
        // The slider being synced must be initialized first
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            dot:false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 68,
//            itemMargin: 5,
            maxItems: 6,
            asNavFor: '#slider',
            controlsContainer: $("#carousel"), 
            customDirectionNav: $(".custom-navigation a"),
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            directionNav: false,
            sync: "#carousel"
        }); 
    });
    
    // Carousel-2
    $(window).load(function() {
        // The slider being synced must be initialized first
        $('#carousel-2').flexslider({
            animation: "slide",
            controlNav: false,
            dot:false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 140,
            itemMargin: 15,
            maxItems: 7,
            asNavFor: '#slider',
            controlsContainer: $("#carousel"), 
            customDirectionNav: $(".custom-navigation a"),
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            directionNav: false,
            sync: "#carousel"
        }); 
    });
     
  
    // Can also be used with $(document).ready()
    $('.gallery_item').flexslider({
        animation: "slide",
        itemWidth: 174.98,
        itemMargin: 20,
        controlNav: true,
        animationLoop: false,
        slideshow: false,
        controlsContainer: $(".gallery_item"), 
        customDirectionNav: $(".custom-navigation a"),
    });
    
    // Lightbox
     lightbox.option({
        'showImageNumberLabel': false,  
    });

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
    
    
 
})(jQuery);   
