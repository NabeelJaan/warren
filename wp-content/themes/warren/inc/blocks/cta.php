<section class="cta px-[15px] xl:px-0 py-[140px] relative bg-fixed bg-right" style="background-image: url('/wp-content/uploads/2022/12/newsletter-1.webp');">
    <div class="container mx-auto">
        <div class="cta-wrapper relative z-20">
            
            <h2 data-aos="zoom-in" data-aos-duration="1500" data-aos-easing="ease-in-out" class="text-white text-center text-3xl leading-10 md:text-6xl capitalize font-anekLatin md:leading-[60px] max-w-[900px] mx-auto font-bold mb-10">
                <?php the_field( 'cta_heading' ); ?>
            </h2>

            <div data-aos="zoom-in" data-aos-duration="1900" data-aos-easing="ease-in-out" class="nl-form max-w-[700px] mx-auto">
                <?php
                    $theme_shortcode    =   get_field('form_short_code');

                    echo do_shortcode(''.$theme_shortcode.'');
                ?>
            </div>
        </div>
    </div>
</section>