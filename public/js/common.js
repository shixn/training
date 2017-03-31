/* ページ内移動 */
function to_scroll_top(from, to,time) {
  $(from).click(function() {
      $('html, body').animate({
        scrollTop:($(to).position().top),
      }, time);
      return false;
  });
}

$(function() {
   to_scroll_top("a[href=#link0]","#link0",500);
   to_scroll_top("a[href=#link1]","#link1",500);
   to_scroll_top("a[href=#link2]","#link2",500);
});

/* トップ画像　遅延表示効果 */
$(function(){
   $('html, body').css("opacity",0).delay(300).fadeTo(1200, 1);
   $('.article-top-title').css("opacity",0).delay(600).fadeTo(1200, 1);
});

/* sp用メニュー表示 */
$(function(){
  $(".header-menu-button").click(function(){
    $(".header-links").slideToggle(400);
  });
});
