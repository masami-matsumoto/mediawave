
/*===========================================================*/
/*機能編 8-1-1ページの先頭にスムーススクロールする*/
/*===========================================================*/
//スクロールした際の動きを関数でまとめる
function PageTopAnime() {
  var scroll = $(window).scrollTop();
  if (scroll >= 200) { //上から200pxスクロールしたら
    $('#page-top').removeClass('DownMove'); //#page-topについているDownMoveというクラス名を除く
    $('#page-top').addClass('UpMove'); //#page-topについているUpMoveというクラス名を付与
  } else {
    if ($('#page-top').hasClass('UpMove')) { //すでに#page-topにUpMoveというクラス名がついていたら
      $('#page-top').removeClass('UpMove'); //UpMoveというクラス名を除き
      $('#page-top').addClass('DownMove'); //DownMoveというクラス名を#page-topに付与
    }
  }
}
// #page-topをクリックした際の設定
$('#page-top').click(function () {
  $('body,html').animate({
    scrollTop: 0 //ページトップまでスクロール
  }, 500); //ページトップスクロールの速さ。数字が大きいほど遅くなる
  return false; //リンク自体の無効化
});

/*===========================================================*/
/*機能編 5-1-13 クリックしたらナビが左から右に出現*/
/*===========================================================*/

$(".openbtn").click(function () { //ボタンがクリックされたら
  $(this).toggleClass('active'); //ボタン自身に activeクラスを付与し
  $("#g-nav").toggleClass('panelactive'); //ナビゲーションにpanelactiveクラスを付与
  $("#g-nav li").toggleClass('smooth'); //li に smoothクラスを付与
});

$("#g-nav a").click(function () { //ナビゲーションのリンクがクリックされたら
  $(".openbtn").removeClass('active'); //ボタンの activeクラスを除去し
  $("#g-nav").removeClass('panelactive'); //ナビゲーションのpanelactiveクラスも除去
  $("#g-nav li").removeClass('smooth'); //li のsmoothクラスを除去
});

/*===========================================================*/
/*機能編 6-1-2 フェードイン・アウトさせて全画面で見せる*/
/*===========================================================*/

$('.slider').slick({
  fade: true, //切り替えをフェードで行う。初期値はfalse。
  autoplay: true, //自動的に動き出すか。初期値はfalse。
  autoplaySpeed: 3000, //次のスライドに切り替わる待ち時間
  speed: 2000, //スライドの動きのスピード。初期値は300。
  infinite: true, //スライドをループさせるかどうか。初期値はtrue。
  slidesToShow: 1, //スライドを画面に3枚見せる
  slidesToScroll: 1, //1回のスクロールで3枚の写真を移動して見せる
  arrows: false, //左右の矢印なし
  pauseOnFocus: false, //フォーカスで一時停止を無効
  pauseOnHover: false, //マウスホバーで一時停止を無効
  pauseOnDotsHover: false, //ドットナビゲーションをマウスホバーで一時停止を無効
});

/*===========================================================*/
/* 順番に出現*/
/*===========================================================*/

function delayScrollAnime() {
  var time = 0.3; //遅延時間を増やす秒数の値
  var value = time;
  $('.delayScroll').each(function () {
    var parent = this; //親要素を取得
    var elemPos = $(this).offset().top; //要素の位置まで来たら
    var scroll = $(window).scrollTop(); //スクロール値を取得
    var windowHeight = $(window).height(); //画面の高さを取得
    var childs = $(this).children(); //子要素を取得

    if (scroll >= elemPos - windowHeight && !$(parent).hasClass("play")) { //指定領域内にスクロールが入ったらまた親要素にクラスplayがなければ
      $(childs).each(function () {

        if (!$(this).hasClass("fadeUp")) { //アニメーションのクラス名が指定されているかどうかをチェック

          $(parent).addClass("play"); //親要素にクラス名playを追加
          $(this).css("animation-delay", value + "s"); //アニメーション遅延のCSS animation-delayを追加し
          $(this).addClass("fadeUp"); //アニメーションのクラス名を追加
          value = value + time; //delay時間を増加させる

          //全ての処理を終わったらplayを外す
          var index = $(childs).index(this);
          if ((childs.length - 1) == index) {
            $(parent).removeClass("play");
          }
        }
      })
    } else {
      $(childs).removeClass("fadeUp"); //アニメーションのクラス名を削除
      value = time; //delay初期値の数値に戻す
    }
  })
}

/*===========================================================*/
/* アコーディオンをクリックした時の動作*/
/*===========================================================*/
$('.title').on('click', function () { //タイトル要素をクリックしたら
  var findElm = $(this).next(".box"); //直後のアコーディオンを行うエリアを取得し
  $(findElm).slideToggle(); //アコーディオンの上下動作

  if ($(this).hasClass('close')) { //タイトル要素にクラス名closeがあれば
    $(this).removeClass('close'); //クラス名を除去し
  } else { //それ以外は
    $(this).addClass('close'); //クラス名closeを付与
  }
});
/*===========================================================*/
/* 印象編 4 最低限おぼえておきたい動き*/
/*===========================================================*/

// 動きのきっかけの起点となるアニメーションの名前を定義
function fadeAnime() {
  // 4-7 にゅーん（滑らかに変形して出現）	
  $('.smoothTrigger').each(function () { //smoothTriggerというクラス名が
    var elemPos = $(this).offset().top - 50; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('smooth'); // 画面内に入ったらsmoothというクラス名を追記
    } else {
      $(this).removeClass('smooth'); // 画面外に出たらsmoothというクラス名を外す
    }
  });

  $('.bgLRextendTrigger').each(function () { //bgLRextendTriggerというクラス名が
    var elemPos = $(this).offset().top - 50; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('bgLRextend'); // 画面内に入ったらbgLRextendというクラス名を追記
    } else {
      $(this).removeClass('bgLRextend'); // 画面外に出たらbgLRextendというクラス名を外す
    }
  });
  $('.bgappearTrigger').each(function () { //bgappearTriggerというクラス名が
    var elemPos = $(this).offset().top - 50; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('bgappear'); // 画面内に入ったらbgappearというクラス名を追記
    } else {
      $(this).removeClass('bgappear'); // 画面外に出たらbgappearというクラス名を外す
    }
  });
  // 4-1 ふわっ（下から）
  $('.fadeUpTrigger').each(function () { //fadeUpTriggerというクラス名が
    var elemPos = $(this).offset().top - 50; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('fadeUp'); // 画面内に入ったらfadeUpというクラス名を追記
    } else {
      $(this).removeClass('fadeUp'); // 画面外に出たらfadeUpというクラス名を外す
    }
  });

  // ふわっ

  $('.fadeInTrigger').each(function () { //fadeInTriggerというクラス名が
    var elemPos = $(this).offset().top - 50; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('fadeIn'); // 画面内に入ったらfadeInというクラス名を追記
    } else {
      $(this).removeClass('fadeIn'); // 画面外に出たらfadeInというクラス名を外す
    }
  });
}
  /*===========================================================*/
  /* テキストの動き */
  /*===========================================================*/
  function SmoothTextAnime() {
    $('.smoothTextTrigger').each(function () {
      var elemPos = $(this).offset().top - 50;
      var scroll = $(window).scrollTop();
      var windowHeigth = $(window).height();
      if (scroll >= elemPos - windowHeigth) {
        $(this).addClass('smoothTextAppear');
      } else {
        $(this).removeClass('smoothTextAppear');
      }
    });
  }
  /*===========================================================*/
  /* 関数をまとめる*/
  /*===========================================================*/

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
    delayScrollAnime();
    fadeAnime(); //印象編 4 最低限おぼえておきたい動きの関数を呼ぶ
    SmoothTextAnime();
    BlurTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
  });

  // ページが読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function () {
    PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
    delayScrollAnime();
    fadeAnime(); //印象編 4 最低限おぼえておきたい動きの関数を呼ぶ
    SmoothTextAnime();
    BlurTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
  }); // ここまでページが読み込まれたらすぐに動かしたい場合の記述
