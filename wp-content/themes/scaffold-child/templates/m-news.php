<?php
/**
 * Template Name: m-news template
 * Template Post Type: post, page
 *
 * @package    scaffold
 * @copyright  Copyright (c) 2019, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

get_header(); ?>

	<div class="content-area">
 
		<?php
/* 		$paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1; */
		
		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'category_name' => 'News',
			'posts_per_page' => 5,
			/* 'paged' => $paged, */
		);
		$arr_posts = new WP_Query( $args );
	
		if ( $arr_posts->have_posts() ) :
	
			while ( $arr_posts->have_posts() ) :
				$arr_posts->the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- 					<?php
					if ( has_post_thumbnail() ) :
						the_post_thumbnail();
					endif;
					?> -->
					
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>
					
 					<div class="entry-content">
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>">Read More</a>
					</div>
					
				</article>
				<?php
			endwhile;
			
			
/* 			wp_pagenavi(
				array(
					'query' => $arr_posts,
				)
			); */
			
			
			
		endif;
		?>
	</div>

<?php
get_footer();
?>
