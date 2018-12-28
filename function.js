$('.nav-toggle').click(function() {
    $('.side-nav').toggleClass('toggled');
    $('.body').toggleClass('body-fixed');
});

$('.nav-close').click(function(){
    $('.side-nav').removeClass('toggled')
    $('.body').removeClass('body-fixed');
})

$('.nav-li').click(function(){
    $('.side-nav').removeClass('toggled')
    $('.body').removeClass('body-fixed');
})