<?php




/*
 * 网站的页面标题
 */
function hhui_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // 添加网站名称
    $title .= get_bloginfo( 'name' );

    // 为首页添加网站描述
    $site_description = get_bloginfo( 'description', 'dispaly' );
    if ( $site_description && ( is_home() || is_front_page() ) ) 
        $title = "$title $sep $site_description";

    // 在页面标题中添加页码
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'page %s', 'hhui' ), max( $paged, $page ) );
    return $title;
}
add_filter( 'wp_title', 'hhui_wp_title', 10, 2 );


/**
 * 自定义的搜索框
 */
function hhui_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </div>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'hhui_my_search_form' );




/*
 * 注册菜单
 */
function register_primary_menu() {
    register_nav_menu( 'primary', __( 'Primary Menu', 'hhui' ) );
}
add_action( 'after_setup_theme', 'register_primary_menu' );



/*
 * 特色图
 */
add_theme_support('post-thumbnails');

//调用缩略图
function get_first_image() {
    global $post;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
    if(empty($first_img)){ //Defines a default image
    $first_img = bloginfo('template_url') . "/img/default.jpg";
    };
    return $first_img;
    }