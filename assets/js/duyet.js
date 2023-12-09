$(document).ready(function(){
    $(".item-2").click(function(){
        $(".item-2-sub").slideToggle();
    });
    $(".item-3").click(function(){
        $(".item-3-sub").slideToggle();
    });
    $(".item-4").click(function(){
        $(".item-4-sub").slideToggle();
    });
    $(".item-5").click(function(){
        $(".item-5-sub").slideToggle();
    });
    $(".item-6").click(function(){
        $(".item-6-sub").slideToggle();
    });
    $(".item-7").click(function(){
        $(".item-7-sub").slideToggle();
    });
    $(".arrow-left").click(function(){
        $(".sidebar").hide();
    });
    $(".arrow-right").click(function(){
        $(".sidebar").show();
    });
    $("img.avatar").click(function(){
        $(".content-avatar-header").show();
    });
    $(".avatar").click(function(){
        $(".content-avatar-header").hide();
    });
    //menu
        var menu = $('.navbar');

        $(window).scroll(function() {
            var scrollPosition = $(window).scrollTop();

            // Kiểm tra vị trí cuộn để thay đổi CSS của menu
            if (scrollPosition === 0) {
                menu.css({
                    'opacity':'0.7'
                });
            }
        });

});