<?php get_header(); ?>
<br/>
<div class="am-g am-g-fixed my-page">
  <div class="am-u-md-9 am-u-md-push-3">
    <div class="am-g">
      <div class="am-u-sm-11 am-u-sm-centered">
        <div class="am-cf am-article">
          
          <!-- start -->
          <?php while ( have_posts() ) : the_post(); ?><!--读取文章 -->
          <article class="am-article">
  	<div class="am-article-hd">
    		<h1 class="am-article-title"><?php the_title(); ?></h1>
    		<p class="am-article-meta"><?php the_time('Y年n月j日') ?></p>
  	</div>

  	<div class="am-article-bd">
    		<div class="am-article-lead"><?php the_content(); ?></div>
  	</div>
           </article>
           <?php endwhile; // 循环结束 ?>
          <!-- end -->
      </div>
    </div>
  </div>
</div>
<div class="am-u-md-3 am-u-md-pull-9 my-sidebar">
    <div class="am-offcanvas" id="sidebar">
      <div class="am-offcanvas-bar">
        <ul class="am-nav">
          <?php $cats = get_the_category()[0]->cat_name; //获取分类名字?>
          <?php if ($cats == '吃屎公告'){?>
          		<li class="am-active"><a href="/?page_id=1495">吃屎公告</a></li>
          <?php }else{?>
          		<li><a href="/?page_id=1495">吃屎公告</a></li>
          <?php }?>
          <?php if ($cats == '产品公告'){?>
          		<li class="am-active"><a href="/?page_id=1511">产品公告</a></li>
          <?php }else{?>
          		<li><a href="/?page_id=1511">产品公告</a></li>
          <?php }?>
           <?php if ($cats == '吃屎活动'){?>
          		<li class="am-active"><a href="/?page_id=1513">吃屎活动</a></li>
          <?php }else{?>
          		<li><a href="/?page_id=1513">吃屎活动</a></li>
          <?php }?>
        </ul>
      </div>
    </div>
  </div>
   <a href="#sidebar" class="am-btn am-btn-sm am-btn-success am-icon-bars am-show-sm-only my-button" data-am-offcanvas>
    <span class="am-sr-only">侧栏导航</span>
   </a>
</div>
<?php get_footer(); ?>