$(document).ready(function(){
  $('.iframe').click(function(){
    jQuery(this).append('<div class="embed-responsive embed-responsive-16by9"> <iframe width="100%" height="100%" src="'+jQuery(this).attr('src')+'?autoplay=1" /></div>')
  })
  $(".menu li a,.dktop li a").click(function(){
       $("#navbar-header").removeClass("in");
  });

  // Add smooth scrolling to all links in navbar + footer link
  $(document).on("scroll", onScroll);
  $(".navbar a,.regist a, footer a[href='#landingPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top-50
      }, 900);
      return false;
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $(target).offset().top-50}, 70, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    } // End if
  });

  function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('.menu  a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top-70 <= scrollPos && refElement.position().top-50 + refElement.height() > scrollPos) {
           $('.menu  a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
  }

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
  setTimeout(function(){
    $(".header").css("opacity","1")
  },300);
});

$("#carousel-example-generic").carousel();
$("#carousel-example-generic2").carousel();
$("#carousel-example-generic").carousel({
  swipe: 30 // percent-per-second, default is 50. Pass false to disable swipe
});