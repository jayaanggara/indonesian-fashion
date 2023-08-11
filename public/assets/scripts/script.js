// init aos
AOS.init({ once : true });

// scrolling header
$(window).scroll(function(){
    if( $(window).scrollTop() > 0 ){
        $('header').addClass('fixed');
    } else {
        $('header').removeClass('fixed');
    }
});

// click button mobile
$('header .navbar-toggler').on('click', function(){
    $('header .navbar-swipe').toggleClass('action');
    $('header .navbar-swipe').css("transition", ".5s")
    $('header .mobi-1').toggleClass('action');
    $('header .mobi-2').toggleClass('action');
    $('header .mobi-3').toggleClass('action');
});

// remove class
window.addEventListener("resize", function(){
    if (window.innerWidth < 992){
        $('header .navbar-swipe').css("transition", "0s")
    }
});

// click button book-now
$('.btn-book-now').on('click', function(){
    $('.book-now').addClass('action');
    $('.in-book-now').addClass('action');
});

// click button closing book-now
$('.btn-closing').on('click', function(){
    $('.book-now').removeClass('action');
    $('.in-book-now').removeClass('action');
});
