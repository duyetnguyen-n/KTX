$(document).ready(function(){
    // Đợi cho carousel load hoàn tất
    $('.owl-carousel').on('initialized.owl.carousel', function(){
        setImagesHeight();
    });

    // Khi thay đổi slide
    $('.owl-carousel').on('changed.owl.carousel', function(){
        setImagesHeight();
    });

    function setImagesHeight() {
        var maxHeight = 0;
        $('.owl-item.active .item img').each(function(){
            var currentHeight = $(this).height();
            if(currentHeight > maxHeight){
                maxHeight = currentHeight;
            }
        });
        $('.owl-carousel .owl-item img').css('height', maxHeight + 'px !important');
    }
});
