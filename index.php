<?php get_header(); ?>





<div class="container">
	<div class="main"> 
		<div class="uk-child-width-1-3@m uk-child-width-1-2@s" uk-grid>
	
	<?php if( have_posts() ) : ?>
		<?php while( have_posts() ) : the_post(); ?>
		
			<div>
			<a href="<?php the_permalink() ?>" class="permalink" title="<?php the_title(); ?>">
				<div class="uk-card uk-card-default tm-image-card">
					<div class="uk-card-media-top">

						<?php if ( has_post_thumbnail() ) { 
						the_post_thumbnail(array(500,500),array(
							'alt'=> trim(strip_tags( $post->post_title ))));
								} 
							else {?>
							<img src="<?php echo get_first_image(); ?>" alt="<?php the_title(); ?>" width="100%"/>
							
							<?php }?>

					</div>
					<div class="uk-card-body">
						<h3 class="uk-card-title"><?php the_title(); ?></h3>
						 <p class="uk-text-meta uk-margin-remove-top">
						 分类: <?php the_category(','); ?>
						 时间: <!--?php the_time('Y-m-d')?--> <?php echo get_the_date( 'Y-m-d' ); ?>
						 <br>
						 作者：
                         <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                            <?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?> 
                            <?php the_author(); ?>
                         </a>
						 | 浏览量：5 
						 | <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
						 <?php edit_post_link('Edit', ' | ', ''); ?>
						 
						</p>
						<!-- ?php the_content(); ? --> 
					</div>
				</div>
			</a>
			</div>
		<?php endwhile; ?>
		
	<?php endif; ?>
	
		</div>
	</div><!-- end #main-->
</div><!-- end #main-->







<?php get_sidebar(); ?>
<?php get_sidebar( 'left' ); ?>
<?php get_footer(); ?>