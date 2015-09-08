<?php
/*
Template Name: 会员注册
*/
?> 
<?php get_header();?>
<br/>
<div class="am-g am-g-fixed my-page">
  <div class="am-u-md-9 am-u-md-push-3">
    <div class="am-g">
      <div class="am-u-sm-11 am-u-sm-centered">
        <div class="am-cf am-article">
          <!-- start -->
          <?php
    $page_id = 1471;
    $page_data = get_page( $page_id );
    $one_title = $page_data->post_title;
    $one_page = apply_filters('the_content', $page_data->post_content);

    $page_id = 1473;
    $page_data = get_page( $page_id );
    $two_title = $page_data->post_title;
    $two_page = apply_filters('the_content', $page_data->post_content);

    $page_id = 1475;
    $page_data = get_page( $page_id );
    $three_title = $page_data->post_title;
    $three_page = apply_filters('the_content', $page_data->post_content);
  ?>
          <div class="am-panel-group" id="accordion">
    <div class="am-panel am-panel-default">
        <div class="am-panel-hd">
            <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-1'}">
                <?php echo $one_title;?>
            </h4>
        </div>
        <div id="do-not-say-1" class="am-panel-collapse am-collapse am-in">
            <div class="am-panel-bd">
                <?php echo $one_page;?>
          </div>
        </div>
    </div>
    <div class="am-panel am-panel-default">
        <div class="am-panel-hd">
            <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-2'}">
                <?php echo $two_title;?>
            </h4>
        </div>
        <div id="do-not-say-2" class="am-panel-collapse am-collapse am-in">
            <div class="am-panel-bd">
                <?php echo $two_page;?>
          </div>
        </div>
    </div>
    <div class="am-panel am-panel-default">
        <div class="am-panel-hd">
            <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-3'}">
                <?php echo $three_title;?>
            </h4>
        </div>
        <div id="do-not-say-3" class="am-panel-collapse am-collapse am-in">
            <div class="am-panel-bd">
                <?php echo $three_page;?>
          </div>
        </div>
    </div>
           </div>
          <!-- end -->
      </div>
    </div>
  </div>
</div>
<div class="am-u-md-3 am-u-md-pull-9 my-sidebar">
    <div class="am-offcanvas" id="sidebar">
      <div class="am-offcanvas-bar">
        <ul class="am-nav">
          <li><a href="/?page_id=1456">平台介绍</a></li>
          <li class="am-active"><a href="/?page_id=1471">会员注册</a></li>
          <li><a href="/?page_id=1479">推广产品</a></li>
          <li><a href="/?page_id=1489">联系方式</a></li>
          <li><a href="/?page_id=1491">法律申明</a></li>
        </ul>
      </div>
    </div>
  </div>
   <a href="#sidebar" class="am-btn am-btn-sm am-btn-success am-icon-bars am-show-sm-only my-button" data-am-offcanvas>
    <span class="am-sr-only">侧栏导航</span>
   </a>
</div>
<?php get_footer();?>