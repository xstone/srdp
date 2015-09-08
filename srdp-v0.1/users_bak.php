<?php
/*
Template Name: users
*/
session_start();
if (!$_SESSION['s_username']){
      header("Location:index.php");
      exit(0);
}

get_header();
?>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list am-text-lg">
        <li><a href="#"><span class="am-icon-home"></span> 账户首页</a></li>
        <li><a href="#"><span class="am-icon-th-large"></span> 推广产品</a></li>
        <li><a href="#"><span class="am-icon-user"></span> 个人信息</a></li>
        <li><a href="#"><span class="am-icon-area-chart"></span> 数据报表</a></li>
        <li><a href="#"><span class="am-icon-sign-out"></span> 注销</a></li>
      </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 公告</p>
          <p>时光静好，与君语；细水流年，与君同。—— Amaze UI</p>
        </div>
      </div>
    </div>
  </div>
  <!-- sidebar end -->

  <!-- content start -->

  <div class="admin-content am-padding-bottom-xl">

  <br />

    <div class="am-g">
    	<div class="am-u-md-9">
    		<div class="am-panel am-panel-default">
  			<div class="am-panel-hd">每日收益表</div>
  			<div class="am-panel-bd  am-text-center">
    				<table class="am-table am-table-hover am-table-striped">
    					<thead>
        						<tr>
            						<th  class="am-text-center">日期</th>
            						<th  class="am-text-center">成交订单</th>
            						<th  class="am-text-center">单品确认佣金</th>
        						</tr>
    					</thead>
    					<tbody>
        <tr>
            <td>2012-10-01</td>
            <td>0</td>
            <td>0.00</td>
        </tr>
        <tr>
            <td>2012-10-01</td>
            <td>0</td>
            <td>0.00</td>
        </tr>
        <tr>
            <td>2012-10-01</td>
            <td>0</td>
            <td>0.00</td>
        </tr>
        <tr>
            <td>2012-10-01</td>
            <td>0</td>
            <td>0.00</td>
        </tr>
        <tr>
            <td>2012-10-01</td>
            <td>0</td>
            <td>0.00</td>
        </tr>
        <tr>
            <td>2012-10-01</td>
            <td>0</td>
            <td>0.00</td>
        </tr>
        <tr>
            <td>2012-10-01</td>
            <td>0</td>
            <td>0.00</td>
        </tr>
        <tr>
            <td>2012-10-01</td>
            <td>0</td>
            <td>0.00</td>
        </tr>
        <tr>
            <td>2012-10-01</td>
            <td>0</td>
            <td>0.00</td>
        </tr>
        <tr>
            <td>2012-10-01</td>
            <td>0</td>
            <td>0.00</td>
        </tr>
        <tr>
            <td>2012-10-01</td>
            <td>0</td>
            <td>0.00</td>
        </tr>
    </tbody>
</table>

  			</div>
    		</div>
    	</div>
    	<div class="am-u-md-3">
    		<div class="am-panel am-panel-default">
  			<div class="am-panel-hd">个人财产</div>
  			<div class="am-panel-bd">
    				
  				<ul class="am-list admin-content-file am-text-center">
              				<li>
              					<strong>昨日确认佣金</strong>
              					<br /><br />
              					<span class="am-icon-btn am-icon-jpy" style="background-color: #EF9B9B;"></span>
              					<strong class="am-text-xl"> 2588.86</strong>
              				</li>
              				<li>
              					<strong>昨日确认佣金</strong>
              					<br /><br />
              					<span class="am-icon-btn am-icon-jpy" style="background-color: #57A1C9;"></span>
              					<strong class="am-text-xl"> 2588.86</strong>
              				</li>
              				<li>
              					<strong>昨日确认佣金</strong>
              					<br /><br />
              					<span class="am-icon-btn am-icon-jpy" style="background-color: #DDDB36;"></span>
              					<strong class="am-text-xl"> 2588.86</strong>
              				</li>
              				<li>
              					<strong>总收入</strong>
              					<br /><br />
              					<span class="am-icon-btn am-icon-jpy" style="background-color: #3EC264;"></span>
              					<strong class="am-text-xl"> 2588.86</strong>
              				</li>
            			</ul>

  			</div>
    		</div>
    	</div>
    </div>
  <!-- content end -->
</div>

<?php get_footer();?>
