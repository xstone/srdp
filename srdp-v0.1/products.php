<?php
/*
Template Name: products
*/
session_start();
if (!$_SESSION['s_username']){
      header("Location:index.php");
      exit(0);
}

get_header();
?>

<div class="am-g am-g-fixed my-page am-margin-top-lg">
  <div class="am-panel" style="height:50px;box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.2);border-radius: 5px;">
      <div class="am-u-sm-3 am-text-center"><a class="am-link-muted" href="?page_id=1558">账户首页</a></div>
      <div class="am-u-sm-3 am-text-center"><a href="?page_id=1576">推广产品</a></div>
      <div class="am-u-sm-3 am-text-center"><a class="am-link-muted" href="#">个人信息</a></div>
      <div class="am-u-sm-3 am-text-center"><a class="am-link-muted" href="#">数据报表</a></div>
  </div>

  <div class="am-panel am-panel-default">
    <div class="am-panel-bd am-scrollable-horizontal">

    	<table class="am-table">
    <thead>
        <tr>
            <th>产品图片</th>
            <th>产品信息</th>
            <th>佣金比例</th>
            <th>最高佣金</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><img src="http://upload.dadacps.com/ProductImg/ProductPage2015126135511976.jpg" /></td>
            <td style="width:450px; height:10px;"><h3>摩登季寡肽臻颜蚕丝面膜</h3>换颜紧致，神器打造逆生长臻颜！ 修复娇肤 深层补水 紧致肌肤 淡化细纹 让肌肤重塑臻颜的秘密!</td>
            <td class="am-text-middle">45.00%</td>
            <td class="am-text-middle">354.60元</td>
            <td class="am-text-middle"><button type="button" class="am-btn am-btn-primary am-radius">推广</button></td>
        </tr>
        <tr>
            <td><img src="http://upload.dadacps.com/ProductImg/ProductPage2015117193642407.jpg" /></td>
            <td><h3>摩登季寡肽臻颜蚕丝面膜</h3><p>换颜紧致，神器打造逆生长臻颜！</p></td>
            <td class="am-text-middle">45.00%</td>
            <td class="am-text-middle">354.60元</td>
            <td class="am-text-middle"><button type="button" class="am-btn am-btn-primary am-radius">推广</button></td>
        </tr>
        <tr class="am-active">
            <td><img src="http://upload.dadacps.com/ProductImg/ProductPage20141223105929646.jpg" /></td>
            <td><h3>摩登季寡肽臻颜蚕丝面膜</h3><p>换颜紧致，神器打造逆生长臻颜！</p></td>
            <td class="am-text-middle">45.00%</td>
            <td class="am-text-middle">354.60元</td>
            <td class="am-text-middle"><button type="button" class="am-btn am-btn-primary am-radius">推广</button></td>
        </tr>
        <tr>
            <td><img src="http://upload.dadacps.com/ProductImg/ProductPage20141223105838430.jpg" /></td>
            <td><h3>摩登季寡肽臻颜蚕丝面膜</h3><p>换颜紧致，神器打造逆生长臻颜！</p></td>
            <td class="am-text-middle">45.00%</td>
            <td class="am-text-middle">354.60元</td>
            <td class="am-text-middle"><button type="button" class="am-btn am-btn-primary am-radius">推广</button></td>
        </tr>
        <tr>
            <td><img src="http://upload.dadacps.com/ProductImg/ProductPage2014114123755992.jpg" /></td>
            <td><h3>摩登季寡肽臻颜蚕丝面膜</h3><p>换颜紧致，神器打造逆生长臻颜！</p></td>
            <td class="am-text-middle">45.00%</td>
            <td class="am-text-middle">354.60元</td>
            <td class="am-text-middle"><button type="button" class="am-btn am-btn-primary am-radius">推广</button></td>
        </tr>
    </tbody>
</table>
	

    </div>
  </div>

</div>

<?php get_footer();?>