/*
 * JavaScript
*/
/*
 * ブレイクポイント
---------------------------------------------------------*/
const breakPointPc = 960;

/*
 * ブラウザ幅リサイズによるブレイクポイント越境時のリロード処理
---------------------------------------------------------*/
let resizeFlagSp;
let resizeFlagPc;

  window.addEventListener('load',()=>{
    if( breakPointPc < window.innerWidth){
      resizeFlagSp = false;
    }else{
      resizeFlagSp = true;
    }
    if( breakPointPc > window.innerWidth){
      resizeFlagPc = false;
    }else{
      resizeFlagPc = true;
    }
    resizeWindow();
  },false);

  const resizeWindow = () =>{
    window.addEventListener('resize',()=>{
      if( breakPointPc < window.innerWidth && resizeFlagSp){
        window.location.reload();
        //console.log('Sp幅からPc幅の越境でリロードしました。');
        resizeFlagSp = false;
      } 
      else if ( breakPointPc >= window.innerWidth && !(resizeFlagSp)) {
        resizeFlagSp = true;
      }
      if( breakPointPc > window.innerWidth && resizeFlagPc){
        window.location.reload();
        //console.log('Pc幅からSp幅の越境でリロードしました。');
        resizeFlagPc = false;
      } 
      else if ( breakPointPc <= window.innerWidth && !(resizeFlagPc)) {
        resizeFlagPc = true;
      }
    },false);
  }

/*
 * パスワード入力欄の文字の表示非表示切り替え
---------------------------------------------------------*/
function pushHideButton() {
    var txtPass = document.getElementById("textPassword");
    var btnEye = document.getElementById("buttonEye");
    if (txtPass.type === "text") {
        txtPass.type = "password";
        btnEye.className = "fa fa-eye";
    } else {
        txtPass.type = "text";
        btnEye.className = "fa fa-eye-slash";
    }
}

/*
 * jQuery
*/
$(function(){
    /*
    * ヘッダーのユーザーアイコンクリックでの
    * ユーザー設定情報メニューの表示非表示
    --------------------------------------------------------*/
    $('.l-header__profile').on('click', function(){
        $('.l-header__profile__menu').toggleClass('js-show');
    });

    /*
    * ヘッダーのハンバーガーメニュークリックでの
    * グローバルナビゲーション、スライドの展開
    --------------------------------------------------------*/
    $('.c-hamburger').on('click', function(){
        $('.c-hamburger__body').toggleClass('js-hamburger__active');
        $('.l-secondary').toggleClass('js-slide-active');
    });
    // $('.l-secondary .c-cross-mark__body').on('click', function(){
    //     $('.l-secondary').removeClass('js-slide-active');
    // });

    /*
    * グローバルナビゲーションのアコーディオンメニュー展開（スマートフォン）
    --------------------------------------------------------*/
    if($(window).outerWidth() < breakPointPc){
        $('.c-accordion').on('click', function(){
            if($('+.p-gnav__sub', this).css('display') == 'none'){//メニューが閉じていた場合
                //$(this).addClass("open");//classを追加
                $(this).find('.c-accordion__cross-line__body').toggleClass('js-accordion__open');
                $('+.p-gnav__sub', this).slideDown();
            }else{//メニューが開いていた場合
                $(this).find('.c-accordion__cross-line__body').toggleClass('js-accordion__open');
                //$(this).removeClass("open");//classを削除
                $('+.p-gnav__sub', this).slideUp();
            }
        });
    }

    /*
    * グローバルナビゲーションのサブメニュー展開（デスクトップ）
    --------------------------------------------------------*/
    if($(window).outerWidth() >= breakPointPc){
        $('.p-gnav__category').on('click', function(){
            if($('+.p-gnav__sub', this).css('display') == 'none'){//メニューが閉じていた場合
                $('.p-gnav__sub').hide();//開いているサブメニューは全て非表示
                $('.p-gnav__category').removeClass('js-submenu__active');//対象のクラスも全て削除
                $(this).addClass('js-submenu__active');//classを追加
                $('+.p-gnav__sub', this).show();
            }else{//メニューが開いていた場合
                $(this).removeClass('js-submenu__active');//classを削除
                $('+.p-gnav__sub', this).hide();
            }
        });
    }

    /*
    * チェックボックスによるパスワード欄の表示非表示
    --------------------------------------------------------*/

    $('input[type=checkbox].js-pw-display').change(function(){
        if($(this).prop('checked')){
            //alert('チェック済み');
            $('#password').attr('type', 'text')
        }else{
            //alert('未チェック');
            $('#password').attr('type', 'password')
        }
    });

    /*
    * モーダルウインド表示・非表示
    --------------------------------------------------------*/
    $('.js-modal__open').on('click', function(){
        $('.c-modal').fadeIn();
    });
    $('.js-modal__close').on('click', function(){
        $('.c-modal').fadeOut();
    });
	
});