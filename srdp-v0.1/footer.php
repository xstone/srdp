<div class="footer">
  <div class="footer-border"></div>
  <div class="am-g am-container">
    <div class="am-u-lg-12 am-text-center">
        <div class="clothes-4"></div>

        <div class="am-u-lg-12 am-u-md-12 am-u-sm-12">
          <p class="am-monospace">私人搭配<br/><strong>—</strong> 塑造完美的你 <strong>—</strong><br/>
          Copyright © 2014-2015 啪啪啪.著作權所有，並保留一切權利。<br/><a href="#">使用条款</a> <a href="#">隐私权政策</a></p>
          <span class="am-icon-btn am-icon-qq am-warning"></span>
          <span class="am-icon-btn am-icon-weixin am-danger"></span>
          <span class="am-icon-btn am-icon-weibo"></span>
        </div>
    </div>
  </div>
</div>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/polyfill/rem.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/polyfill/respond.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/amazeui.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/amazeui.lazyload.js"></script>
<script>
$('img.lazy').lazyload({
  effect : 'fadeIn'
});
$('div.lazy').lazyload({
  effect : 'fadeIn'
});
</script>
<?php if(is_home()){?>
<script>
$(document).ready(function(){
  $(window).scroll(function(){
    if ($(window).scrollTop() > 500){
      document.getElementById("topone").setAttribute("style","background:#fff;border-bottom:1px solid;box-shadow:0px 0px 4px rgba(0, 0, 0, 0.2)");
      $('.am-topbar').addClass("am-animation-fade");
      $('.am-topbar').removeClass("no-index");
    }else{
      $('.am-topbar').addClass("no-index");
      $('.am-topbar').removeClass("am-animation-fade");
      document.getElementById("topone").setAttribute("style","");
    }
  });
});
</script>
<?php }?>
<!--<![endif]-->
</body>
</html>