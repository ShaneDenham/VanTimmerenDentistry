<div id="sidebar1" class="sidebar large-4 medium-4 columns" role="complementary">

	<?php if ( is_single() ) : ?>

		<?php if ( is_active_sidebar( 'blog' ) ) : ?>

			<?php dynamic_sidebar( 'blog' ); ?>

		<?php endif; ?>

	<?php elseif ( is_page( 'dental-services' ) || '27' == $post->post_parent ) : ?>

		<?php if ( is_active_sidebar( 'services' ) ) : ?>

			<?php dynamic_sidebar( 'services' ); ?>

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