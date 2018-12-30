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

function fillNummerChanel(){
    document.getElementById("cal-button-chanel").href = "tel:0612779366";
}

function fillNummerDaisy(){
    document.getElementById("cal-button-chanel").href = "tel:0612779366";
}