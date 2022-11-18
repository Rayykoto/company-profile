
const navbar = document.getElementsByTagName('nav')[0];
// const mediaQuery = window.matchMedia('(min-width: 768px)')
window.addEventListener('scroll', function() {
    if (window.scrollY > 0) {
        navbar.classList.replace('bg-transparent', 'nav-color')
    }else if (this.window.scrollY <= 0) {
        navbar.classList.replace('nav-color', 'bg-transparent')
    }
});


$("[data-trigger]").on("click", function(){
    var trigger_id =  $(this).attr('data-trigger');
    $(trigger_id).toggleClass("show");
    $('body').toggleClass("offcanvas-active");
});

// close button 
$(".btn-close").click(function(e){
    $(".navbar-collapse").removeClass("show");
    $("body").removeClass("offcanvas-active");
}); 

// const li = document.querySelectorAll(".nav-link");
// const sec = document.querySelectorAll("section");

// function activeMenu() {
//     let len=sec.length;
//     while(--len && window.scrollY + 90 < sec[len].offsetTop){}
//     li.forEach(ltx => ltx.classList.remove("active"));
//     li[len].classList.add("active");
// }
// activeMenu();
// window.addEventListener("scroll", activeMenu);

$(".navbar-nav .nav-link").on("click", function(){
    $(".navbar").find(".active").removeClass("active");
    $(this).addClass("active");
 });