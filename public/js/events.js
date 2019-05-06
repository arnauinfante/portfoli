
  $(document).ready(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();

    $('.modal').modal();

    $('.dropdown-trigger').dropdown();

  });
  $(window).scroll(function(){

    var scroll = $(window).scrollTop();
    if( scroll > $('.parallax-container').height() - 24){
        $("nav").addClass('nav-scrolled');
    }else{
        $("nav").removeClass('nav-scrolled');
    }
});
