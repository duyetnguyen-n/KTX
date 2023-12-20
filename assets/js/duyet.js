$(document).ready(function () {
    // Ẩn/hiện các mục con khi nhấp vào mục cha
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
    $(".item-8").click(function(){
        $(".item-8-sub").slideToggle();
    });
    // Ẩn sidebar khi nhấp vào mũi tên rẽ trái
    $(".arrow-left").click(function () {
        $(".sidebar").hide();
    });

    // Hiện sidebar khi nhấp vào mũi tên rẽ phải
    $(".arrow-right").click(function () {
        $(".sidebar").show();
    });

    // Toggle dropdown content khi nhấp vào avatar
    $(".avatar").click(function () {
        $(".content-avatar-header").slideToggle();
    });

    // Xử lý scroll để thay đổi CSS của menu
    var menu = $('.navbar');

    $(window).scroll(function () {
        var scrollPosition = $(window).scrollTop();

        // Kiểm tra vị trí cuộn để thay đổi CSS của menu
        if (scrollPosition === 0) {
            menu.css({
                'opacity': '0.6'
            });
        } else {
            menu.css({
                'opacity': 'unset'
            });
        }
    });
});
// JavaScript để thay đổi kiểu của input mật khẩu và hiển thị biểu tượng mắt
function togglePasswordVisibility() {
    var passwordField = document.getElementById('password');
    var eyeIcon = document.getElementById('eyeIcon');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
    } else {
        passwordField.type = 'password';
    }

    eyeIcon.style.display = (passwordField.type === 'password') ? 'none' : 'block';
}

// JavaScript để kiểm tra và hiển thị biểu tượng mắt khi có nội dung trong trường mật khẩu
function checkPassword() {
    var passwordField = document.getElementById('password');
    var eyeIcon = document.getElementById('eyeIcon');

    eyeIcon.style.display = (passwordField.value.length > 0) ? 'block' : 'none';
}


