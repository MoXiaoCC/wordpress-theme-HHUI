
<footer role="contentinfo" class="uk-card uk-card-secondary uk-card-body">
<div id="footer">
   <div class="uk-child-width-1-1 uk-grid uk-text-center">
	   <div class="icon">
		<a href="" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
		<a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
		<a href="" class="uk-icon-button" uk-icon="google-plus"></a>
		<a href="#" uk-totop uk-scroll></a>
	   </div>
   </div>


   <p class="uk-text-center">
   
    Use <a href="https://www.wordpress.org">wordpress</a>  Theme By <a href="https://liuxiaogang.cn">HHUI </a><br>
   &copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>. </p> 
	
	
</div>

</footer><!-- end #footer -->
<?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/uikit.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/uikit-icons.min.js"></script>
</body>
</html>