$(function(){

  $('.bg-slider').bgSwitcher({
    images: ["{{ asset('/images/shutterstock_622200797.jpg') }}","{{ asset('/images/shutterstock_762804607.jpg') }}","{{ asset('/images/shutterstock_1043723578.jpg') }}"], // 切替背景画像を指定
interval: 3000, // 背景画像を切り替える間隔を指定 3000=3秒
    loop: true, // 切り替えを繰り返すか指定 true=繰り返す　false=繰り返さない
    shuffle: true, // 背景画像の順番をシャッフルするか指定 true=する　false=しない
    effect: "blind", // エフェクトの種類をfade,blind,clip,slide,drop,hideから指定
    duration: 500, // エフェクトの時間を指定します。
    easing: "swing" // エフェクトのイージングをlinear,swingから指定
});
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