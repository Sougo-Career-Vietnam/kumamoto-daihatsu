<?php /*
PC/SP共通のメニュー項目を記述
スタイルにてメニューとモーダルの見た目を変更する
自動リンク設定；includeで読み込むファイルでは{def~*}の記述が使用できないためvar~のように配列を呼び出してif判定している
*/ ?>
@if(isset($frontendSettings['nav']))
<nav class="navItems modalMenu modalOff">
    <div class="navItemList">
        <div class="navItemListInner">
            @foreach($frontendSettings['nav'] as $navItem)
            <x-navigation.navItem :navItem="$navItem" />
            @endforeach
        </div><!-- .navItemListInner -->
    </div><!-- .navItemList -->
    <div class="navItemListSp">
        @foreach($frontendSettings['nav'] as $navItem)
            @if(isset($navItem['url']) && (/*(str_contains($navItem['class'], 'navItemSearch') !== false) ||*/ (str_contains($navItem['class'], 'navItemFavorite') !== false)))
            <x-navigation.navItem :navItem="$navItem" />
            @endif
        @endforeach
        <div class="navItem">
            <button type="button" id="hamburger" class="hamburger hamburger--collapse sp__menu sp-header__item navHeight" style="display: none;">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
</nav><!-- .navItems -->
<script>
    (function(d) {
      var config = {
        kitId: 'bao5fqw',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
    </script>
<script>
    $(function (){
        // お気に入りの件数表示アイコン制御
        let count = {{$favoriteJobCnt}};
        let badgeElm = $('.header_navitems .badge')[0];
        if (badgeElm) {
            $(badgeElm).text(String(count));
        } else {
            $('.header_navitems .heartBox').append('<span class="badge">'+String(count)+'</span>');
        }
    });
</script>
<script>
    //スライドインメニューの設定
    $(window).on("load orientationchange resize", function() {
        slideUp();
    });

    function slideUp() {
        let headerHeight;
        let windowWidth = window.innerWidth;
        if(windowWidth > (parseInt({{ env('VITE_BREAK_POINT') + 1 }}))) {
            headerHeight = 80;
        }
        else {
            headerHeight = 70;
        }

        $("body:not(.modalOn) #headerMenu .headerNav").cbSlideUpHeader({
            headroom: true,//下scrollで非表示、上scrollで表示
            slidePoint: 80,//メニューの高さを指定（これ以上スクロールすると隠れる）
            headerBarHeight: headerHeight
        });
    }
</script>
@endif
