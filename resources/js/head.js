$(function(){
  $(window).scroll(function (){
      $('.fadein').each(function(){
          var position = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > position - windowHeight + 200){
            $(this).addClass('active');
          }
      });
      $('.detail').each(function(){
          var position = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > position - windowHeight + 100){
            $(this).addClass('active');
          }
      });
  });
});

ScrollReveal().reveal('.detail1', { 
  duration: 1600, 
  opacity: 0.8,
  origin: 'left', 
  distance: '50px',
  reset: false   
});
ScrollReveal().reveal('.detail2', { 
  duration: 1600, 
  origin: 'left', 
  distance: '50px',
  reset: false 
});
ScrollReveal().reveal('.detail3', { 
  duration: 1600, 
  origin: 'left', 
  distance: '50px',
  reset: false   
});
ScrollReveal().reveal('.detail4', { 
  duration: 1600, 
  origin: 'left', 
  distance: '50px',
  reset: false   
});
ScrollReveal().reveal('.detail5', { 
  duration: 1600, 
  origin: 'left', 
  distance: '50px',
  reset: false   
});



