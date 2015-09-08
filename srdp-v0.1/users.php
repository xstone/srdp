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

<div class="am-g am-g-fixed my-page am-margin-top-lg">
  <div class="am-panel" style="height:50px;box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.2);border-radius: 5px;">
      <div class="am-u-sm-3 am-text-center"><a href="?page_id=1558">账户首页</a></div>
      <div class="am-u-sm-3 am-text-center"><a class="am-link-muted" href="?page_id=1576">推广产品</a></div>
      <div class="am-u-sm-3 am-text-center"><a class="am-link-muted" href="#">个人信息</a></div>
      <div class="am-u-sm-3 am-text-center"><a class="am-link-muted" href="#">数据报表</a></div>
  </div>

  <div class="am-u-md-4" style="padding:0;">
    <div class="am-panel am-panel-default am-panel-primary">
      <div class="am-panel-hd">个人资产</div>
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
  <div class="am-u-md-8" style="padding-right:0;">
    <div class="am-panel am-panel-default am-panel-primary">
      <div class="am-panel-hd">每日收益表</div>
      <div class="am-panel-bd am-text-center">

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
</div>

<?php get_footer();?>