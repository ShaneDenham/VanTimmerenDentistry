<?php get_header(); ?>

			<div id="content">

				<section id="services-section">
					<div class="row">
						<div class="small-12 columns">
							<h2>Why Choose Us?</h2>
							<hr/>
						</div>
  					</div>
  					<div class="row">
						<div class="large-4 columns service experience">
							<a href="<?php echo esc_url( home_url( '/our-staff/' ) ); ?>">
								<span class="icon-edit"></span>
							</a>
							<h3>
								<a href="<?php echo esc_url( home_url( '/our-staff/' ) ); ?>">
									Experience
								</a>
							</h3>
							<p>
								With over 200 years of combined experience in dentistry,
								you can feel confident that your oral health is our top priority.
							</p>
							<p>
								We strive every day to make our patients feel like part of our family,
								and it is our promise that we will try to never make you feel like a number.
							</p>
						</div>
	  					<div class="large-4 columns service comfort">
							<a href="<?php echo esc_url( home_url( '/dental-services/' ) ); ?>">
								<span class="icon-feather"></span>
							</a>
							<h3>
								<a href="<?php echo esc_url( home_url( '/dental-services/' ) ); ?>">
									Comfort
								</a>
							</h3>
							<p>
								Going to the dentist doesn’t need to be stressful.
								We offer blankets and neck pillows to help make your visit as relaxing as possible.
							</p>
							<p>
								Prefer music? Bring your favorite cd or mp3 player and we’ll supply the headphones
								to help you feel right at home during your appointment.
							</p>
						</div>
	  					<div class="large-4 columns service technology">
							<a href="<?php echo esc_url( home_url( '/dental-services/' ) ); ?>">
								<span class="icon-megaphone"></span>
							</a>
							<h3>
								<a href="<?php echo esc_url( home_url( '/dental-services/' ) ); ?>">
									Technology
								</a>
							</h3>
							<p>
								We are always looking to adopt new technologies and methods as they become available,
								and our staff is specially trained to use them.
							</p>
							<p>
								We are proud to offer Single Tooth Anesthesia, laser dentistry,
								more esthetic fillings and crowns, and complimentary nitrous oxide relaxing gas.
							</p>
						</div>
  					</div>
				</section>

				<section id="lastest-blogs-section">
					<div class="row">
						<div class="large-10 large-offset-1 columns">
							<div class="row">
								<div class="small-12 columns">
									<h2>Latest Blog Posts</h2>
									<hr/>
								</div>
		  					</div>
							<div class="row">
								<?php $query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 4 ) ); ?>
								<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


								 	<div class="post large-6 columns">

								 		<!-- Display the Title as a link to the Post's permalink. -->
								 		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

								 		<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
								 		<small><?php the_time( 'F jS, Y' ); ?></small>

								  		<div class="entry">
								  			<?php the_excerpt(); ?>
								  		</div>
								 	</div> <!-- end post -->


								<?php endwhile; wp_reset_postdata(); else : ?>
								 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
								<?php endif; ?>
							</div> <!-- end row -->
						</div>

					</div>
				</section>
			</div> <!-- end #content -->
			<section id="google-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2923.454057986367!2d-85.73135268467237!3d42.88436597915522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8819b0e11c1ffe11%3A0x5adcbc11d9f1c1ed!2s2620+44th+St+SW%2C+Wyoming%2C+MI+49519!5e0!3m2!1sen!2sus!4v1446229693505" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

			</section>

<?php get_footer(); ?>