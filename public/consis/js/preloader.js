$(document).ready(function(){
    
    //Esconde preloader
    $(window).load(function(){
        $('.status').fadeOut(1500);
        $('.preloader').fadeOut(1500);//1500 é a duração do efeito (1.5 seg)
    });
    
});