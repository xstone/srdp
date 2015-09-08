<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title><?php wp_title( '-', true, 'right' ); ?><?php bloginfo('name'); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/i/favicon.png">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/amzi.min.css"/>
  <style>
  body {
    background:none repeat scroll 0% 0% #FFF;
  }

    @keyframes fade-in {  
        0% {opacity: 0;}/*初始状态 透明度为0*/  
        40% {opacity: 0;}/*过渡状态 透明度为0*/  
        100% {opacity: 1;}/*结束状态 透明度为1*/  
    }  
    @-webkit-keyframes fade-in {/*针对webkit内核*/  
        0% {opacity: 0;}  
        40% {opacity: 0;}  
        100% {opacity: 1;}  
    }  
    .no-index{
      animation: fade-in;/*动画名称*/  
      animation-duration: 0.5s;/*动画持续时间*/  
      -webkit-animation:fade-in 0.5s;/*针对webkit内核*/
    }
    <?php if(is_home()){?>
    .no-index a, .no-index .am-topbar-nav li.am-active a, .no-index .am-topbar-nav  li.am-active a:hover,
    .no-index .am-topbar-right span {
      color: #fff;
    }
    .am-topbar {
      margin-bottom: 0;
      background: none repeat scroll 0% 0% rgba(0, 0, 0, 0);
      height: 50px;
      position: fixed;
      width: 100%;
      top: 0;
      border:none;
      color:#fff;
      z-index:2000;
    }
    <?php }else{?>
    .no-index a, .no-index .am-topbar-nav li.am-active a, .no-index .am-topbar-nav  li.am-active a:hover{
      color: #000;
    }
    .am-topbar {
      margin-bottom: 0;
      background: none repeat scroll 0% 0% #fff;
      height: 50px;
      position: fixed;
      width: 100%;
      top: 0;
      border-bottom:1px solid;
      box-shadow:0px 0px 4px rgba(0, 0, 0, 0.2);
      color:#fff;
      z-index:2000;
    }
    <?php }?>
    
    .am-topbar-nav > li > a:hover{
      background:none;
    }
    .am-topbar-nav > li > a:after{
    }
    .am-topbar-nav > li.am-active >a, .am-topbar-nav > li.am-active >a:hover {
      color: #000;
    }

    .get {
      /*background-image: url("wp-content/themes/cps/images/s1.jpg");*/
      background-repeat: no-repeat;
      background-position: center center;
      background-color: transparent;
      background-size: cover;
      position: relative;
      background-attachment: fixed !important;
      width: 100%;
      height: 100vh;
      color: #fff;
      text-align: center;
      padding: 280px 0;
    }

    .get-title {
      font-size: 400%;
      display: inline-block;
    }

    .get-btn {
      background: #fff;
    }

    .detail {
      background: #fff;
    }

    .detail-h2 {
      text-align: center;
      margin: 80px 0px 30px 0px;
    }

    .detail-h3 {
      color: #000;
    }

    .detail-p {
      color: #7f8c8d;
    }

    .hope {
      background: url("wp-content/themes/cps/images/bg-shade.png") no-repeat fixed center center / cover transparent;
      padding: 100px 0;
    }

    .hope-img {
      text-align: center;
    }

    .hope-hr {
      border-color: #149C88;
    }

    .hope-title {
      font-size: 200%;
      color: #000;
    }

    .about {
      background: url("wp-content/themes/cps/images/8.jpg") no-repeat fixed center bottom / cover transparent;
      padding: 100px 0;
      color: #000;
    }

    .about-color {
      color: #34495e;
    }

    .footer-title {
      padding: 30px 0 50px 0;
      text-align: center;
    }

    .footer {
      background: #000;
      color: #fff;
    }

    .footer p, .footer a {
      color: #7f8c8d;
}
    .am-modal-bd-login {
      text-align: left;
    }

    .am-u-lg-6-login {
      width: 70%;
    }
  </style>
  
</head>
<body>

<!-- login-start-->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
      <div class="am-modal-dialog">
            <div class="am-modal-hd">
                  会员登陆
                  <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
            </div>
            <div class="am-modal-bd am-modal-bd-login">
                  <div class="am-g">
                        <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered am-u-lg-6-login">
                              <form method="post" class="am-form" action="/?page_id=1453">
                                    <br />
                                    <div class="am-input-group">
                                          <span class="am-input-group-label"><i class="am-icon-user"></i></span>
                                          <input type="email" name="username" id="email" value="" class="am-form-field" placeholder="用户名 / 邮箱">
                                    </div>
                                    <br />
                                    <div class="am-input-group">
                                          <span class="am-input-group-label"><i class="am-icon-lock"></i></span>
                                          <input type="password" name="password" id="password" value="" class="am-form-field" placeholder="请输入密码">
                                    </div>
                                    <br />
                                    <label for="remember-me">
                                          <input id="remember-me" type="checkbox">
                                                记住密码
                                          </label>
                                    <br />
                                    <br />
                                    <div class="am-cf">
                                          <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
                                          <input type="submit" name="" value="忘记密码 ^_^? " class="am-btn am-btn-default am-btn-sm am-fr">
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</div>
<!--end-->