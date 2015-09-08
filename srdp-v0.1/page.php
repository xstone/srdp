<?php
/*
Template Name: 下单
*/
?> 
<?php get_header();?>
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


<div class="detail am-margin-top">
  <div class="am-g am-container">
    <div class="am-u-lg-12">
      <h2 class="detail-h2">选择你的风格</h2>
        <ul class="am-avg-sm-5 am-thumbnails">
          <li>
            <input type="checkbox" id="checkbox-style-1" value="简约" >
            <label for="checkbox-style-1" class="label-style">
              <img data-am-popover="{content: '普通型', trigger: 'hover focus'}" class="am-thumbnail" src="wp-content/themes/cps/images/select-style1.jpg" />
            </label>
          </li>
          <li>
            <input type="checkbox" id="checkbox-style-2" value="橘子" >
            <label for="checkbox-style-2" class="label-style">
            <img data-am-popover="{content: '阳光型', trigger: 'hover focus'}" class="am-thumbnail" src="wp-content/themes/cps/images/select-style.jpeg" />
            </label>
          </li>
          <li>
            <input type="checkbox" id="checkbox-style-3" value="梨子" >
            <label for="checkbox-style-3" class="label-style">
            <img data-am-popover="{content: '时尚型', trigger: 'hover focus'}" class="am-thumbnail" src="wp-content/themes/cps/images/select-style2.jpg" />
            </label>
          </li>
          <li>
            <input type="checkbox" id="checkbox-style-4" value="梨子" >
            <label for="checkbox-style-4" class="label-style">
            <img data-am-popover="{content: '优雅型', trigger: 'hover focus'}" class="am-thumbnail" src="wp-content/themes/cps/images/select-style3.jpg" />
            </label>
          </li>
          <li>
            <input type="checkbox" id="checkbox-style-5" value="梨子" >
            <label for="checkbox-style-5" class="label-style">
            <img data-am-popover="{content: '优雅型', trigger: 'hover focus'}" class="am-thumbnail" src="wp-content/themes/cps/images/select-style4.jpg" />
            </label>
          </li>
        </ul>
    </div>
  </div>
</div>

<?php get_footer();?>