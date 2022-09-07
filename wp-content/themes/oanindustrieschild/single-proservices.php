<?php
/**
 
 * Template Post Type: post, single post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>
<div class="proservices">
	<div class="page-header">
		 <div class="container">
 <h1><?php the_title();?>	 </h1>
	</div>
	</div>
	
 <div class="container">
	 

 <?php while ( have_posts() ) : the_post(); ?>

              
             <?php the_content(); ?>
            
				<?php //get_template_part( 'content', 'page' ); ?>
				<?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
	 
	 <div class="related-pro">
		 <h2> Other Products </h2>
		 <?php echo do_shortcode('[wpc_vc_ProServices]')?>
	 </div>
</div>

</div>
<?php
get_footer();
?>