<?php

/* Pagenavi */  
function pagenavi( $before = '', $after = '', $p = 2 ) {   
if ( is_singular() ) return;   
global $wp_query, $paged;   
$max_page = $wp_query->max_num_pages;   
if ( $max_page == 1 ) return;   
if ( empty( $paged ) ) $paged = 1;    
if ( $paged > 1 ) {p_link( $paged - 1, '上一页', '&laquo' );}else{ print '<li class="am-disabled"><a href="#">&laquo;</a></li>';}   
if ( $paged > $p + 1 ) p_link( 1, 'First Page' );   
if ( $paged > $p + 2 ) echo '... ';   
for( $i = $paged - $p; $i <= $paged + $p; $i++ ) {   
if ( $i > 0 && $i <= $max_page ) $i == $paged ? print "<li class='am-active'><a href='#'>{$i}</a></li>" : p_link( $i );   
}   
if ( $paged < $max_page - $p - 1 ) echo '... ';   
if ( $paged < $max_page - $p ) p_link( $max_page, '尾页' );   
if ( $paged < $max_page ) {p_link( $paged + 1,'下一页', '&raquo;' ); }else{ print '<li class="am-disabled"><a href="#">&raquo;</a></li>';}  
//echo '</div>'.$after."\n";   
}   
function p_link( $i, $title = '', $linktype = '' ) {   
if ( $title == '' ) $title = "第{$i}页";   
if ( $linktype == '' ) { $linktext = $i; } else { $linktext = $linktype; }
echo "<li><a href='", esc_html( get_pagenum_link( $i ) ), "' title='{$title}'>{$linktext}</a></li>";   
} 
?>