// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.navbar').outerHeight();

//https://www.sitepoint.com/javascript-media-queries/
const mq = window.matchMedia( "(max-width: 500px)" );

$('[data-toggle="collapse"]').on('click', function() {
      // $navMenuCont = $($(this).data('target'));
      // $navMenuCont.animate({'height':'toggle'}, 350, "swing");
      $(this).toggleClass("high-index");
      $(this).toggleClass('open');
  });

if (mq.matches) {
    $(window).scroll(function(event){
        didScroll = true;
        console.log("scrolled");
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('.navbar').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('.navbar').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }
}

//For Navbar Active links
$('.navbar-nav .nav-link').click(function(){
    $('.navbar-nav .nav-item .nav-link').removeClass('active');
    $(this).addClass('active');
    console.log("clicked");
})

//For page transitions
$(".animsition").animsition({
  inClass: 'fade-in-up',
  outClass: 'fade-out-down',
  inDuration: 1500,
  outDuration: 800,
  linkElement: '.animsition-link',
  // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
  loading: true,
  loadingParentElement: 'body', //animsition wrapper element
  loadingClass: 'animsition-loading',
  loadingInner: '', // e.g '<img src="loading.svg" />'
  timeout: false,
  timeoutCountdown: 5000,
  onLoadEvent: true,
  browser: [ 'animation-duration', '-webkit-animation-duration'],
  // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
  // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
  overlay : false,
  overlayClass : 'animsition-overlay-slide',
  overlayParentElement : 'body',
  transition: function(url){ window.location.href = url; }
});
