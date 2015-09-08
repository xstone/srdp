<?php
/*
Template Name: 产品公告
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
          <ul class="am-list am-list-static am-list-border">   
          <?php
          global $paged;
          $args = array(
          // 这里以下面的方式添加query_posts参数，具体参数可以参加官方文档
          'paged' => $paged,
          'cat' => '5'
          );
          query_posts($args);
          while(have_posts()): the_post(); ?>   
          <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>   
          <?php endwhile; ?>
          </ul>
          <!-- 分页start -->
          <ul class="am-pagination">
          <?php pagenavi(); ?>
          </ul>
          <!-- 分页end -->   
          <?php wp_reset_query(); ?>
          <!-- end -->
      </div>
    </div>
  </div>
</div>
<div class="am-u-md-3 am-u-md-pull-9 my-sidebar">
    <div class="am-offcanvas" id="sidebar">
      <div class="am-offcanvas-bar">
        <ul class="am-nav">
          <li><a href="/?page_id=1495">吃屎公告</a></li>
          <li class="am-active"><a href="/?page_id=1511">产品公告</a></li>
          <li><a href="/?page_id=1513">吃屎活动</a></li>
        </ul>
      </div>
    </div>
  </div>
   <a href="#sidebar" class="am-btn am-btn-sm am-btn-success am-icon-bars am-show-sm-only my-button" data-am-offcanvas>
    <span class="am-sr-only">侧栏导航</span>
   </a>
</div>
<?php get_footer();?>