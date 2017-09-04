<?php /* Template Name: Colour */ ?>

<?php get_header(); ?>

<div id="content">

<?php 
	$the_query = new WP_Query(array(
		'category_name' => 'colour', 
	)); 
	while ( $the_query->have_posts() ) : 
		$the_query->the_post();
?>
<?php the_content(); ?>
<?php 
	endwhile; 
	wp_reset_postdata();
?>
	
</div>

<?php wp_footer(); // Crucial footer hook! ?>
<?php get_footer(); ?>