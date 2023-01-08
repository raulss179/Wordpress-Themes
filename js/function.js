
/*INICIO SLIDE BAR*/
$(function(){
       $('section.clientes-slider .slider-container').slick({
               dots:true,
               arrows:false,
               Infinite:true,
               centerMode:true,
               centerPadding:0,
               speed:1000,
               slideToShow:4,
               autoplay:true,
               autoplaySpeed:3000,
               pauseOnHover:false
               });
        });

/*FIM SLIDE BAR*/


/*INICIO MENU RESPONSIVO*/
$(function(){
        $('.menu-mobile i').click(function(){
                $('.menu-mobile').find('ul').slideToggle();
        })
})