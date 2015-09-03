$(function() {
    // var wheight = $(window).height(); //get height of the window

    // $('.fullheight').css('height', wheight);

    // $(window).resize(function() {
    //     var wheight = $(window).height(); //get height of the window
    //     $('.fullheight').css('height', wheight);
    // })


$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.scrollup').fadeIn();
    } else {
        $('.scrollup').fadeOut();
    }

});

//scroll agenda
$("a[href^='#']").click(function(e){
    $("body, html").stop().animate({scrollTop:$(this.hash).offset().top - 0}, 1000);
    e.preventDefault();

});

$(".fancybox").fancybox({
        maxWidth    : 800,
        maxHeight   : 600,
        fitToView   : false,
        width       : '75%',
        height      : '75%',
        autoSize    : false,
        closeClick  : false,
        openEffect  : 'elastic',
        closeEffect : 'none',
        autoSize    : false,
        openEffect  : 'none',
        closeEffect : 'none',
        type        : "iframe",
        iframe      : {
                   preload : false // this will prevent to place map off center
                }

  });

$(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");
    });


});