<?php get_header(); ?>

<div class="lazy get" data-original="wp-content/themes/cps/images/s1.jpg">
  <div class="am-g">
    <div class="am-u-lg-12 am-monospace">
      <h1 class="get-title">让搭配更简单</h1>
      <p>
        你只需要提供一些个人信息，剩下的便由我们帮你完成。<br/>当然，这是保密的
      </p>

      <p>
        <button type="button" class="am-btn am-btn-danger am-radius am-btn-xl">获取新的get技能</button>
      </p>
    </div>
  </div>
</div>

<header id="topone" class="am-topbar no-index">
      <div class="am-container">
            <h1 class="am-topbar-brand">
                  <a href="#"><span class="clothes-4"></span></a>
            </h1>

            <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only" data-am-collapse="{target: '#collapse-head'}">
                  <span class="am-sr-only">导航切换</span>
                  <span class="am-icon-bars"></span>
            </button>
            <div class="am-collapse am-topbar-collapse" id="collapse-head">
                  <ul class="am-nav am-nav-pills am-topbar-nav am-monospace">
                        <?php if (is_home()){?>
                              <li class="am-active"><a href="/">首页</a></li>
                        <?php }else{?>
                              <li><a href="/">首页</a></li>
                        <?php }?>
                        <?php if (is_page(array('吃屎公告','产品公告','吃屎活动')) or is_single()){?>
                              <li class="am-active"><a href="/?page_id=1495">关于我们</a></li>
                        <?php }else{?>
                              <li><a href="/?page_id=1495">关于我们</a></li>
                        <?php }?>
                  </ul>
                  <?php 
                  session_start(); 
                  if ($_SESSION['s_username']){//登录后
                  ?>
                   <div class="am-topbar-right">
                        <button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-sign-out"></span> 退出登陆</button>
                  </div>
                  <div class="am-topbar-right">
                        <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm" onclick="window.location.href='?page_id=1558'"><span class="am-icon-home"></span> 进入用户中心</button>
                  </div> 
                  <?php }else{//登录前?>
                  <div class="am-topbar-right">
                        <span class="am-icon-pencil"></span>
                  </div>
                  <div class="am-topbar-right">
                        <span class="am-icon-user" data-am-modal="{target: '#doc-modal-1'}"></span>
                  </div>
                  <?php }?>
            </div>
      </div>
</header>


<div class="detail">
  <div class="am-g am-container">
    <div class="am-u-lg-12 am-monospace">
      <h2 class="detail-h2 am-text-xxxl">男人的衣柜</h2>
      <div class="am-u-sm-1 am-u-sm-centered index-border"></div>
      <div class="am-g am-text-center">
        <div class="am-u-lg-4 am-u-md-4 am-u-sm-12 detail-mb">
          <div class="clothes-1" data-am-scrollspy="{animation:'scale-up', repeat: false}"></div>
          <h3 class="detail-h3 am-text-xl">
            更简单
          </h3>

          <p class="detail-p am-monospace">
            Amaze UI 采用业内先进的 mobile first 理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。
          </p>
        </div>
        <div class="am-u-lg-4 am-u-md-4 am-u-sm-12 detail-mb">
          <div class="clothes-2" data-am-scrollspy="{animation:'scale-up', repeat: false}"></div>
          <h3 class="detail-h3 am-text-xl am-monospace">
            更时尚
          </h3>

          <p class="detail-p am-monospace">
            Amaze UI 采用业内先进的 mobile first 理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。
          </p>
        </div>
        <div class="am-u-lg-4 am-u-md-4 am-u-sm-12 detail-mb">
          <div class="clothes-3" data-am-scrollspy="{animation:'scale-up', repeat: false}"></div>
          <h3 class="detail-h3 am-text-xl am-monospace">
            更便宜
          </h3>

          <p class="detail-p am-monospace">
            Amaze UI 采用业内先进的 mobile first 理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!--
<div class="story-1">
  <div class="am-g am-container">
    <div class="am-u-lg-12 am-text-center">
        <p class="am-monospace am-text-xxxl" data-am-scrollspy="{animation:'slide-left', repeat: false, delay: 400}">— 各种风格，各种场合，尽美尽善 -</p>  
    </div>
  </div>
</div>
-->

<div class="story-2">
  <h2 class="detail-h2 am-text-xxxl">
      各种风格，各种场合，尽美尽善
  </h2>
<div class="am-g am-container no-padding">
  <div class="am-u-lg-8 am-u-md-12 am-u-sm-12 no-padding">
      <img class="lazy am-img-responsive" data-original="wp-content/themes/cps/images/s3.jpg" alt="one" />
  </div>
  <div class="am-u-lg-4 am-u-md-12 am-u-sm-12 am-padding-lg am-monospace">
      <h2>永远的正装</h2>
      <p class="detail-p">
        Amaze UI 采用业内先进的 mobile first 理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。
        Amaze UI 采用业内先进的 mobile first 理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。 
        Amaze UI 采用业内先进的 mobile first 理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。  
      </p>
  </div>
</div>

<div class="am-g am-container no-padding">
  <div class="am-u-lg-4 am-u-md-12 am-u-sm-12 am-padding-lg am-monospace">
      <h2>永远的休闲</h2>
      <p class="detail-p">
        maze UI 采用业内先进的 mobile first 理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。
        Amaze UI 采用业内先进的 mobile first 理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。 
      </p>
  </div>
  <div class="am-u-lg-8 am-u-md-12 am-u-sm-12 no-padding">
      <img class="lazy am-img-responsive" data-original="wp-content/themes/cps/images/r1.jpg" alt="two" />
  </div>
</div>

<div class="am-g am-container no-padding" style="margin-bottom:0;">
  <div class="am-u-lg-8 am-u-md-12 am-u-sm-12 no-padding">
      <img class="lazy am-img-responsive" data-original="wp-content/themes/cps/images/4.jpg" alt="three" />
  </div>
  <div class="am-u-lg-4 am-u-md-12 am-u-sm-12 am-padding-lg am-monospace">
      <h2>永远的工作</h2>
      <p class="detail-p">
        maze UI 采用业内先进的 mobile first 理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。
        Amaze UI 采用业内先进的 mobile first 理念，从小屏逐步扩展到大屏，最终实现所有屏幕适配，适应移动互联潮流。 
      </p>
  </div>
</div>

</div>

<div class="hope">
  <div class="am-g am-container">
    <div class="am-u-lg-4 am-u-md-5 am-u-sm-12 hope-img am-cf am-text-center">
      <div class="am-fr am-margin-left-xl">
        <div class="clothes-5 am-text-primary" data-am-scrollspy="{animation:'slide-left', repeat: false}"></div>
        <div class="clothes-6" data-am-scrollspy="{animation:'scale-up', repeat: false}"></div>
        <div class="clothes-7" data-am-scrollspy="{animation:'slide-bottom', repeat: false}"></div>
      </div>
      <div class="am-fr am-margin-left-xl">
        <div class="clothes-5 am-text-danger" data-am-scrollspy="{animation:'slide-left', repeat: false, delay: 300}"></div>
        <div class="clothes-8" data-am-scrollspy="{animation:'scale-up', repeat: false, delay: 300}"></div>
        <div class="clothes-7" data-am-scrollspy="{animation:'slide-bottom', repeat: false, delay: 300}"></div>
      </div>
      <div class="am-fr am-margin-left-sm">
        <div class="clothes-5 am-text-warning" data-am-scrollspy="{animation:'slide-left', repeat: false, delay: 600}"></div>
        <div class="clothes-9" data-am-scrollspy="{animation:'scale-up', repeat: false, delay: 600}"></div>
        <div class="clothes-7" data-am-scrollspy="{animation:'slide-bottom', repeat: false, delay: 600}"></div>
      </div>
    </div>
    <hr class="am-article-divider am-show-sm-only hope-hr">
    <div class="am-u-lg-8 am-u-md-7 am-u-sm-12 am-text-center am-monospace">
      <h2 class="hope-title">我们将为你准备2-3套不同风格的衣服</h2>

      <p style="color:#7F8C8D;">
        如果你不满意，这一切都将是免费的。把你的需求告诉我们，让我们做到你满意为止。
      </p>
      <button type="button" class="am-btn am-btn-danger am-radius am-btn-xl" data-am-scrollspy="{animation:'fade', repeat: false, delay: 400}">注册服务</button>
    </div>
  </div>
</div>

<div class="about">
  <div class="am-g am-container">
    <div class="am-u-lg-12 am-text-center am-monospace">
      <h1>联系我们</h1>
      <p>No cost. No obligation.</p>
      <button type="button" class="am-btn am-btn-danger am-radius am-btn-xl">346502950@qq.com</button>
    </div>
  </div>
</div>

<?php get_footer(); ?>