<?php
get_header();
?>

	<section class="container-fluid about_me_home">
			<div class="row">
				<div class="container m_t_50 m_b_50">
					<div class="row">
					
					<?php while ( have_posts() ) : the_post(); ?>
					
						<div class="col-md-12  header_sec b_b_1 headingcustom">
						<?php $post; $term_list = wp_get_post_terms( $post->ID, 'listing_item', array( 'fields' => 'names' ) ); //print_r( $term_list ); ?>
							<h3><?php echo $term_list['0']; ?></h3>
						</div>
						<div class="col-md-12 m_t_30">
							 <div class="col-md-12 text-light">
							 	<div class="col-md-12 p0 news_block m_t_20 m_b_20">
							 	<div class="col-md-12 text-primary header_sec  ">
									<h3><?php the_title(); ?></h3>
								</div>
								<div class="col-md-12 m_t_20 singleimage">
									<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
								</div>
								<div class="col-md-12 m_t_20 p0">
									<div class="col-md-6">
										<p><i class="fa fa-user"></i> <?php echo get_the_author_meta('display_name', $author_id); ?>
										&nbsp;&nbsp;&nbsp;<i class="fa fa-calendar"></i> <?php echo date('l jS F Y'); ?></p>
									</div>
									<div class="col-md-6 col-sm-12 text-right tags">
										<?php
											global $wpdb;

											$tags = get_terms('tag');
											
											$term_link = get_term_link( $tags );
											
											foreach ($tags as $tag)
											{
												//echo '<li>' . $tag->name . '</li>';
												echo '<a href='.get_tag_link($tag).'>'. $tag->name .'</a>';
											}
											
										?>
									</div>
								</div>
								<div class="col-md-12 m_t_10">
									<?php the_content(); ?>
								</div>

							 	</div>
							 
							 </div>
						 
						</div>

					<?php endwhile; ?>

					</div>
				</div>
			</div>
	</section>

<?php
get_footer();
?>