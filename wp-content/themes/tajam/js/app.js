$(document).ready(function () {
    $('article').prependTo($('.main-text'));
    $('article h1').appendTo($('.for-h'));

    //menu toggle
    function burgerChange(){
        if ( $('.main_nav').css('display') == 'block'){
            $('.burger_top').css({'transform':'none'});
            $('.burger_bottom').css({'transform':'none'});
            $('.burger_meat').css({'opacity':'1'});
        } else{
            $('.burger_top').css({'transform':'translateY(12px) rotate(45deg)'});
            $('.burger_bottom').css({'transform':'translateY(-8px) rotate(-45deg)'});
            $('.burger_meat').css({'opacity':'0'});
        }
    }
    $('.nav-toggle').click(function () { 
        burgerChange();
        $(".main_nav").slideToggle('slow');
    });

// sliders
    $('.slider').slick({
        autoplay: true,
        arrows: false,
        dots: true,
        fade: true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                dots: false
              }
            }
          ]
    });

    $('.text__slider').slick({
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.avatar__slider'
      });
      $('.avatar__slider').slick({
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.text__slider',
        arrows: true,
        centerMode: true,
        focusOnSelect: true
        // nextArrow: '<span class="slick-next">></span>',
        // prevArrow: '<span class="slick-prev"><</span>',
      });
    // size relation
    $(function(){
        $('.site-header').height($('.site-header').width()/2.4);
      
        $(window).resize(function(){
          $('.site-header').height($('.site-header').width()/2.4);
        });
      });
});