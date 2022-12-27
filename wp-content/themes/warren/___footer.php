<?php do_action( 'tailpress_content_after' ); ?>




<footer class="site-footer bg-prussianBlue pt-[278px] pb-[70px]" role="contentinfo">
    <div class="container mx-auto">
        <div class="footer-content text-center">
            <div class="social-icons flex items-center justify-center">
                <div class="cursor-pointer border border-white rounded-full w-[43px] h-[43px] inline-flex items-center justify-center hover:bg-blueCrayola hover:border-blueCrayola mr-[10px]">
                    
                    <?php $facebook_link = get_field( 'facebook_link' , 'option' ); ?>

                    <a href="<?php echo $facebook_link['url']; ?>" aria-label="facebook" target="_blank">
                        <img src="/wp-content/uploads/2022/12/facebook_icon.webp" alt="facebook">
                    </a>

                </div>

                <div class="cursor-pointer border border-white rounded-full w-[43px] h-[43px] inline-flex items-center justify-center hover:bg-blueCrayola hover:border-blueCrayola mr-[10px]">
                    
                    <?php $twitter_link = get_field( 'twitter_link' , 'option' ); ?>

                    <a href="<?php echo $twitter_link['url']; ?>" aria-label="twitter" target="_blank">
                        <img src="/wp-content/uploads/2022/12/twitter.webp" alt="twitter">
                    </a>
                </div>

                <div class="cursor-pointer border border-white rounded-full w-[43px] h-[43px] inline-flex items-center justify-center hover:bg-blueCrayola hover:border-blueCrayola mr-[10px]">
                    
                    <?php $youtube_link = get_field( 'youtube_link' , 'option' ); ?>
                    
                    <a href="<?php echo $youtube_link['url']; ?>" aria-label="youtube" target="_blank">
                            <img src="/wp-content/uploads/2022/12/YouTube.webp" alt="youtube">
                        </a>
                    </div>

                <div class="cursor-pointer border border-white rounded-full w-[43px] h-[43px] inline-flex items-center justify-center hover:bg-blueCrayola hover:border-blueCrayola">
                   
                    <?php $instagram_link = get_field( 'instagram_link' , 'option' ); ?>

                    <a href="<?php echo $instagram_link['url']; ?>" aria-label="instagram" target="_blank">
                        <img src="/wp-content/uploads/2022/12/instagram.webp" alt="instagram">
                    </a>
                </div>
            </div>

            <div class="copyright mt-9">
                <p class="text-[#cfdae6] text-base leading-[26px]"><?php the_field( 'footer_copy_right_text', 'option' ); ?></p>
            </div>
        </div>
    </div>
</footer>

</div>

<?php wp_footer(); ?>


<script>
    jQuery('.owl-carousel').owlCarousel({
        loop:true,

        margin:10,

        responsiveClass:true,

        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                nav:true,
                loop:true
            }
        }
  });
</script>

</body>
</html>