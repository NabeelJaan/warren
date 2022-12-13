
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-gray-50 py-12" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="container mx-auto text-center text-gray-500">
		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
	</div>
</footer>

</div>




<script>

jQuery(document).ready(function() {
  jQuery('.acc-container .acc:nth-child(1) .acc-head').addClass('active');
  jQuery('.acc-container .acc:nth-child(1) .acc-content').slideDown();
  jQuery('.acc-head').on('click', function() {
      if(jQuery(this).hasClass('active')) {
        jQuery(this).siblings('.acc-content').slideUp();
        jQuery(this).removeClass('active');
      }
      else {
        jQuery('.acc-content').slideUp();
        jQuery('.acc-head').removeClass('active');
        jQuery(this).siblings('.acc-content').slideToggle();
        jQuery(this).toggleClass('active');
      }
  });     
  });


</script>

<?php wp_footer(); ?>

</body>
</html>
