<div id="sidebar1" class="sidebar large-4 medium-4 columns" role="complementary">

	<?php if ( is_single() ) : ?>

		<?php if ( is_active_sidebar( 'blog' ) ) : ?>

			<?php dynamic_sidebar( 'blog' ); ?>

		<?php endif; ?>

	<?php elseif ( is_page( 'new-patients' ) || '25' == $post->post_parent ) : ?>

		<?php if ( is_active_sidebar( 'new-patients' ) ) : ?>

			<?php dynamic_sidebar( 'new-patients' ); ?>

		<?php endif; ?>

	<?php elseif ( is_page( 'dental-services' ) || '27' == $post->post_parent ) : ?>

		<?php if ( is_active_sidebar( 'services' ) ) : ?>

			<?php dynamic_sidebar( 'services' ); ?>

		<?php endif; ?>

	<?php elseif ( is_page( 'payment-and-insurance' ) || '29' == $post->post_parent ) : ?>

		<?php if ( is_active_sidebar( 'payment' ) ) : ?>

			<?php dynamic_sidebar( 'payment' ); ?>

		<?php endif; ?>

	<?php elseif ( is_page( 'our-staff' ) || '31' == $post->post_parent ) : ?>

		<?php if ( is_active_sidebar( 'staff' ) ) : ?>

			<?php dynamic_sidebar( 'staff' ); ?>

		<?php endif; ?>

	<?php elseif ( is_page() ) : ?>

		<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

			<?php dynamic_sidebar( 'sidebar1' ); ?>

		<?php endif; ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->

	<div class="alert help">
		<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
	</div>

	<?php endif; ?>

</div>