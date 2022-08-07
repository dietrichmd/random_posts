<?php
/*
   Plugin Name: Random Posts
   Plugin URI: https://vestrainteractive.com/
   Version: 3.1
   Author: vestrainteractive.com
   Description: Plugin to generate random posts to interstate us highways and state highways
   License: GPLv3
  */

add_action('init','random_add_rewrite');
function random_add_rewrite() {
       global $wp;
       $wp->add_query_var('random');
       add_rewrite_rule('random/?$', 'index.php?random=1', 'top');
}
 
add_action('template_redirect','random_template');
function random_template() {
       if (get_query_var('random') == 1) {
               $posts = get_posts('post_type=post&cat=array(<cats here>)&orderby=rand&numberposts=1');
               foreach($posts as $post) {
                       $link = get_permalink($post);
               }
               wp_redirect($link,307);
               exit;
       }
}
wp_reset_postdata(); 
