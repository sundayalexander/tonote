$(window).scroll(function() {
    var value = $(this).scrollTop();
    if (value > 100){
        $(".initial-logo").addClass('d-none');
        $(".logo-scroll").removeClass('d-none');
    }else{
        $(".initial-logo").removeClass('d-none');
        $(".logo-scroll").addClass('d-none');
    }
});