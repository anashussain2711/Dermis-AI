$(".hero-features-slider").slick({
    vertical: true,
    autoplay: true,
    autoplaySpeed: 1500,
    speed: 500,
    arrows: false,
    draggable: false,
    swipe: false,
    touchMove: false,
    pauseOnHover:false,
    cssEase: 'cubic-bezier(.66,-0.23,.45,1.16)',
})
$(".logos").slick({
    autoplay: true,
    useTransform: false,
    autoplaySpeed: 200,
    speed: 4000,
    slidesToShow: 7,
    arrows: false,
    draggable: false,
    swipe: false,
    touchMove: false,
    pauseOnHover:false,
})
// $("section").mousemove(function(e){
//     $(this).find(".moveable").css("transform", `translateX(${(e.clientX/$(window).innerWidth())*20}%) translateY(${(e.clientY/$(window).innerHeight())*20}%)`)
// })