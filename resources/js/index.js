jQuery(function($) {
    $('.header').bgSwitcher({
      images: ['http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_622200797.jpg','http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_1188379606.jpg','http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_762804607.jpg'], // 切り替え画像
        Interval: 5000, //切り替えの間隔 1000=1秒
        start: true, //$.fn.bgswitcher(config)をコールした時に切り替えを開始する
        loop: true, //切り替えをループする
        shuffle: false, //背景画像の順番をシャッフルする
        effect: "fade", //エフェクトの種類 "fade" "blind" "clip" "slide" "drop" "hide"
        duration: 3000, //エフェクトの時間 1000=1秒
        easing: "swing", //エフェクトのイージング "swing" "linear"
    }),
    $('.community-introduction').bgSwitcher({
      images: ['http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_1678138090.jpg','http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_1262915317.jpg','http://d1lndi27iqd683.cloudfront.net/personimage/shutterstock_634861250.jpg'], // 切り替え画像
      Interval: 5000, //切り替えの間隔 1000=1秒
      start: true, //$.fn.bgswitcher(config)をコールした時に切り替えを開始する
      loop: true, //切り替えをループする
      shuffle: false, //背景画像の順番をシャッフルする
      effect: "fade", //エフェクトの種類 "fade" "blind" "clip" "slide" "drop" "hide"
      duration: 3000, //エフェクトの時間 1000=1秒
      easing: "swing", //エフェクトのイージング "swing" "linear"
   });
  });
