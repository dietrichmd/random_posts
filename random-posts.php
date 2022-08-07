<?php
/*
   Plugin Name: Random Posts 
   Plugin URI: https://vestrainteractive.com/
   Version: 1.2
   Author: vestrainteractive.com
   Description: Plugin to generate random posts to interstate us highways and state highways
   License: GPLv3
  */

add_action('template_redirect','destrandom_template');
function random_post_redirect() {

    global $wp;
    if($wp->request === 'random' || $wp->request === 'destrandom' /*|| $wp->request === 'thirditem') */{
        
        $args = array(
            'post_type'   => 'post',
            'numberposts' => 1,
            'orderby' => 'rand',
        );
    
        if ( $wp->request === 'destrandom' ) {
            $args['cat'] = array(7504,3698,1532,3088,3351,66,4667,3912,894,1556,33,3825,3827,3951,4638,2336,1597,39,2923,50,3465,3851,3764,1113,4214,3262,1693,807,798,760,776,127);
        }
        /* if ( $wp->request === 'thirditem' ) {
            $args['post__in'] = array(post ids);
        } */
        $random_post = get_posts( $args );
        wp_redirect( get_the_permalink($random_post[0]) );
        die;
    }
    
}
add_action( 'template_redirect', 'random_post_redirect' );
