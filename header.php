<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo( 'charset' ); ?> >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title><?php wp_title('&laquo;', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/uikit.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hhui.css">
	
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog">当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>.</div>
<![endif]-->


<header>

<div class="header" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
		<div class="uk-navbar-left">
			<!--a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( 'Jump to the front page' , 'hhui' ); ?>">Hello World</a-->		
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri( ); ?>/img/hhlogo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a> 			
		</div>


        <!--?php wp_nav_menu( array(hh
            'theme_location'     =>  'primary',
            'menu_class'         =>  'uk-navbar-right',
            'container'          =>  'div',
        ) ); ?-->


	   <div class="uk-navbar-right">
			<ul class="uk-navbar-nav">
            <?php   
                $menuParameters = array(  
                'container' => false,  
                'echo' => false,  
                'items_wrap' => '%3$s',  
                'depth' => 0,  
                'theme_location'=>'primary',  
                );  
                echo strip_tags(wp_nav_menu( $menuParameters ), '<li><a>' );  
                ?>  
			</ul>
		</div>
	</nav>
 </div>

</header>

<!-- <?php get_search_form(); ?> -->