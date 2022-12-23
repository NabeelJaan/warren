<?php get_header(); ?>

	<div class="max-w-[890px] my-8 mx-auto bg-white shadow-md py-6 px-5">

	<?php if ( have_posts() ) : ?>

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

		<?php endwhile; ?>

	<?php endif; ?>

	</div>

<?php
get_footer();
