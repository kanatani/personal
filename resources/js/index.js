jQuery(function($) {
    $('.header').bgSwitcher({
      images: ['images/shutterstock_622200797.jpg','images/768013045-huge.jpg','images/shutterstock_762804607.jpg'], // 切り替え画像
        Interval: 5000, //切り替えの間隔 1000=1秒
        start: true, //$.fn.bgswitcher(config)をコールした時に切り替えを開始する
        loop: true, //切り替えをループする
        shuffle: false, //背景画像の順番をシャッフルする
        effect: "fade", //エフェクトの種類 "fade" "blind" "clip" "slide" "drop" "hide"
        duration: 3000, //エフェクトの時間 1000=1秒
        easing: "swing", //エフェクトのイージング "swing" "linear"
    }),
    $('.community-introduction').bgSwitcher({
      images: ['/images/img1.jpg','/images/shutterstock_699712699.jpg','/images/shutterstock_1716129895.jpg'], // 切り替え画像
      Interval: 5000, //切り替えの間隔 1000=1秒
      start: true, //$.fn.bgswitcher(config)をコールした時に切り替えを開始する
      loop: true, //切り替えをループする
      shuffle: false, //背景画像の順番をシャッフルする
      effect: "slide", //エフェクトの種類 "fade" "blind" "clip" "slide" "drop" "hide"
      duration: 3000, //エフェクトの時間 1000=1秒
      easing: "swing", //エフェクトのイージング "swing" "linear"
   });
  });
