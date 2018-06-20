<?php
/* Template Name: News Page */
get_header();
?>

		<section class="container-fluid about_me_home">
			<div class="row">
				<div class="container m_t_50 m_b_50">
					<div class="row">
						<div class="col-md-12  header_sec b_b_1">
							<h3>News</h3>
						</div>
                        <form>
						<?php while ( have_posts() ) : the_post(); ?>
						<?php
						global $post;

							$taxonomies = get_taxonomies();
							if ( ! empty( $taxonomies ) ) : ?>
							
                        <div class="col-md-12" style="margin-top: 60px;">
							<div class="col-md-4">
    							<label>Select Categry</label>
                                <select>
								<option value="">--Select Categry--</option>
								<?php foreach ( $taxonomies as $taxonomy ) { ?>
								<?php $terms = get_terms($taxonomy); //print_r($terms); ?>
								<?php foreach ( $terms as $term) { ?>
                                 <?php echo '<option value='. $term->term_id .'>' . $term->name . '</option>'; ?>
								 <?php } ?>
								 <?php } ?>
								 <?php endif; ?>
                                  <!--<option value="saab">Saab</option>
                                  <option value="mercedes">Mercedes</option>
                                  <option value="audi">Audi</option>-->
                                </select>
                    	    </div>
                            <div class="col-md-4">
                                <label>Select Service</label>
                                <select multiple="">
								<option value="">--Select Services--</option>
									<?php
										global $post;
										// Get the 'Profiles' post type
										$args = array(
											'post_type' => 'services',
											'order' => 'ASC'
										);
										$loop = new WP_Query($args);

										while($loop->have_posts()): $loop->the_post();
									?>
										
                                  <option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
								  <?php 
										endwhile;
										wp_reset_query();
									?>
                                  <!--<option value="saab">Saab</option>
                                  <option value="mercedes">Mercedes</option>
                                  <option value="audi">Audi</option>-->
                                </select> 
    							
    						</div>
                            <div class="col-md-4">
                                <label>Select Music</label>
                                <select>
								<option value="">--Select Music--</option>
									<?php
										global $post;
										// Get the 'Profiles' post type
										$args1 = array(
											'post_type' => 'music',
											'order' => 'ASC'
										);
										$loop1 = new WP_Query($args1);

										while($loop1->have_posts()): $loop1->the_post();
									?>
										<option value="<?php echo $post->ID; ?>"><?php the_title(); ?></option>
									 <?php 
										endwhile;
										wp_reset_query();
									 ?>
                                  <!--<option value="saab">Saab</option>
                                  <option value="mercedes">Mercedes</option>
                                  <option value="audi">Audi</option>-->
                                </select>
    							
    						</div>
						</div>
					
                        <div class="col-md-12 m_t_20 text-center">
					 		<button class="btn btn-primary btn-rounded">SCARCH</button>
					 	</div>
						<?php endwhile; ?>
                        </form>
						<div class="col-md-12 m_t_30">
							 <div class="col-md-8 text-light">
							<?php
								$args = array( 'post_type' => 'listing_items', 'posts_per_page' => -1, 'order' => 'ASC' );
								$the_query = new WP_Query( $args );
							?>

							<?php if ( $the_query->have_posts() ) : ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							 	<div class="col-md-12 p0 news_block m_t_20 m_b_20">
									<div class="col-md-12 text-primary header_sec  ">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									</div>
									<div class="col-md-12 m_t_20">
										<?php the_post_thumbnail(); ?>
									</div>
									<div class="col-md-12 m_t_20 p0">
										<div class="col-md-6">
											<p><i class="fa fa-user"></i> <?php echo get_the_author_meta('display_name', $author_id); ?>										&nbsp;&nbsp;&nbsp;<i class="fa fa-calendar"></i> <?php echo date('l jS F Y'); ?></p>
										</div>
										
										<?php
											$posttags = get_the_tags();
										?>
										
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
											<!--<a href="javascript:void(0);">Restaurant</a>
											<a href="javascript:void(0);">Food</a>
											<a href="javascript:void(0);">Design</a>-->
										</div>
									</div>
									<div class="col-md-12 m_t_10">
										<?php the_excerpt(); ?>
									</div>
									<div class="col-md-12 m_t_10">
										<a href="<?php the_permalink(); ?>" class="text-muted text_18"><strong>Read More</strong> <i class="fa fa-long-arrow-right"></i></a>
									</div>
							 	</div>
							<?php endwhile; wp_reset_postdata(); ?>
							<?php else :  ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>

							 </div>

							 <!-- Sidebar -->
							 
							 <div class="col-md-4 text-light">
								<?php dynamic_sidebar('sidebar-1'); ?>
							 	<!--<div class="col-md-12  header_sec  text-primary">
									<h3>Newest Articles</h3>
								</div>
								<div class="col-md-12 p0">
								<div class="col-md-12 p10 b_b_1">
									<div class="col-md-1">
										<p><i class="fa fa-file-o"></i></p>
									</div>
									<div class="col-md-10">
										<p>08-24-2016</p>
										<span>Nulla porta rutrum egestas. Fusce non dui arcu. Donec vitae libero lacinia ipsum euismod</span>
									</div>
								</div>
								<div class="col-md-12 p10 b_b_1">
									<div class="col-md-1">
										<p><i class="fa fa-file-o"></i></p>
									</div>
									<div class="col-md-10">
										<p>08-24-2016</p>
										<span>Nulla porta rutrum egestas. Fusce non dui arcu. Donec vitae libero lacinia ipsum euismod</span>
									</div>
								</div>
								<div class="col-md-12 p10 b_b_1">
									<div class="col-md-1">
										<p><i class="fa fa-file-o"></i></p>
									</div>
									<div class="col-md-10">
										<p>08-24-2016</p>
										<span>Nulla porta rutrum egestas. Fusce non dui arcu. Donec vitae libero lacinia ipsum euismod</span>
									</div>
								</div>
								</div>
								<div class="col-md-12 m_t_20 form-group form_search">
									<i class="fa fa-search text-success"></i>
									<input type="text" class="form-control" placeholder="search">
								</div>
								
								<div class="col-md-12 m_t_30  header_sec  text-primary">
									<h3>Archive</h3>
								</div>
								<div class="col-md-12 m_t_20 archive_news">
									<ul class="list-unstyled">
										<li>
											<a href="javascript:void(0);" class="text-muted"><i class="fa fa-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>February 2014</span></a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-muted"><i class="fa fa-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>February 2014</span></a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-muted"><i class="fa fa-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>February 2014</span></a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-muted"><i class="fa fa-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>February 2014</span></a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-muted"><i class="fa fa-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>February 2014</span></a>
										</li>
										<li>
											<a href="javascript:void(0);" class="text-muted"><i class="fa fa-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>February 2014</span></a>
										</li>
									</ul>
								</div>-->
								
							 </div>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>