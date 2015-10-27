<div class="sticky show-for-medium-up contain-to-grid">
	<nav class="top-bar" data-topbar>
		<div class="title-area">
			<!-- Logo Area -->
			<a href="<?php echo home_url(); ?>" >
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.jpg" alt="" width="200"></a>
		</div>
		<section class="top-bar-section right">
			<?php joints_top_nav(); ?>
		</section>
	</nav>
</div>

<div class="show-for-small-only">
	<nav class="tab-bar">
		<section class="middle tab-bar-section">
			<a href="<?php get_site_url(); ?>" title="<?php bloginfo('name'); ?>">
				<h1 class="title"><?php bloginfo('name'); ?></h1>
			</a>
		</section>
		<section class="left-small">
			<a href="#" class="left-off-canvas-toggle menu-icon" ><span></span></a>
		</section>
	</nav>
</div>

<aside class="left-off-canvas-menu show-for-small-only">
	<?php joints_off_canvas(); ?>
</aside>

<a class="exit-off-canvas"></a>
