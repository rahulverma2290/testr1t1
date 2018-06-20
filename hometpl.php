<?php
/* Template Name:Home Page */
get_header();
?>
<?php
$args = array( 'post_type' => 'sliders', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args );
?>
<div class="slider container-fluid">

<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php $key_1_value = get_post_meta( get_the_ID(), 'Button_Text', true ); ?>
<?php $key_2_value = get_post_meta( get_the_ID(), 'Button_Link', true ); ?>

		<section class="container-fluid banner" style="background:url(<?php the_post_thumbnail_url();?>);  background-size: cover; background-position:top;">
			<div class="row">
				<div class="container">
					<div class="col-md-6 banner_text">
						
							<?php the_content(); ?> 
							<h1><?php the_title(); ?></h1>
							<a href="<?php echo the_permalink(); ?>" class="btn btn-default btn-banner"><?php echo $key_1_value; ?></a>
					</div>
				</div>
			</div>
		</section>

<?php endwhile; wp_reset_postdata(); ?>

<?php else :  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div>

<?php
$args2 = array( 'post_type' => 'services', 'posts_per_page' => 10, 'order' => 'ASC' );
$the_query2 = new WP_Query( $args2 );
?>

		<section class="container-fluid service_home">
			<div class="row">
				<div class="container m_t_40 m_b_40">
				<?php if ( $the_query2->have_posts() ) : ?>
				<?php while ( $the_query2->have_posts() ) : $the_query2->the_post(); ?>
					<div class="col-md-3">
						<div class="col-md-12 p0">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="col-md-12 p0 m_t_20 text-primary text_16">
							<?php the_title(); ?>
						</div>
						<div class="col-md-12 p0 m_t_20 text-light">
							<?php the_content(); ?>
						</div>
						<div class="col-md-12 p0 m_t_10  ">
							<i class="fa fa-long-arrow-right"></i>
						</div>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
					<?php else :  ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<section class="container-fluid quote_home">
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="quote_comma"><i class="fa fa-quote-left"></i></span><?php echo get_site_option( 'footer_text' ); ?>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>