<?php get_header(); ?>



<div class="container">
<div class="main">
	<div class=" ">

        <?php if( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); ?>
                <article>
                <h2 class="post-title"><?php the_title(); ?></h2>
                <p class="uk-article-meta">
                    作者:  <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                            <?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?> 
                            <?php the_author(); ?>
                           </a>
                    | 时间: <?php the_date(); ?>
                    | 分类: <?php the_category( ',' ); ?>
                    | 浏览量：31						
                    | <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
					| <?php edit_post_link('Edit', ' | ', ''); ?>
                    </p>
                    
                <div class="post-content" itemprop="articleBody">
                    <?php the_content(); ?>
                </div>
                <p class="tags"><?php the_tags( ' ', '  ' ); ?></p>
                </article>

                <?php comments_template(); ?>



            <?php endwhile; ?>
            
        <?php endif; ?>
        
	</div><!-- end #main-->
</div><!-- end #main-->
</div><!-- end #main-->



<?php get_sidebar(); ?>
<?php get_sidebar( 'left' ); ?>
<?php get_footer(); ?>