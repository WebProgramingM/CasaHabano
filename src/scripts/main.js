$(document).ready(function () { 
   //Funcion para scrollear de arriba a abajo
    var headerHeight = $('nav').outerHeight();
    $('.nav-link').click(function (e) {
        var linkHref = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(linkHref).offset().top - (headerHeight + 10)
        }, 1000);
        e.preventDefault();
    });
});