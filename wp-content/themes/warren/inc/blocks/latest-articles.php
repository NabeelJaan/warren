<section class="latest-articles px-[15px] xl:px-0 py-[120px]">
    <div class="mx-auto max-w-1140px 2xl:max-w-1585px">

        <div class="faq-header text-center mb-20">
            <h2 data-aos="fade-up" data-aos-duration="1400" data-aos-easing="ease-in-out" class="text-black font-medium font-anekLatin capitilize text-2xl xs:text-5xl md:text-7xl xl:text-9xl">
                <?php the_field( 'latest_articles_heading' ); ?>
            </h2>
            
            <div data-aos="fade-up" data-aos-duration="1600" data-aos-easing="ease-in-out" class="h-[2px] w-[200px] mx-auto bg-orangeCrayola mt-3 mb-8"></div>
        </div>


        <div class="owl-carousel">


            <?php
                $args = array(
                    'post_type'         =>  'post',
                    'posts_per_page'    =>  -1,
                    'post_status'       =>  'publish'
                );

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ):
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    $ex_id = get_the_ID();
            ?>

            <div data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease-in-out" class="post-box">

                <div class="featured-img relative">

                    <div>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('la-img', ['class' => 'w-full']); ?>
                        </a>
                    </div>

                    <div class="post-date bg-isabelline w-14 h-14 inline-flex flex-col items-center justify-center absolute top-[15px] left-[15px]">
                        <span id="post-day" class="text-2xl font-anekLatin"><?php echo get_the_date('j'); ?></span>
                        <span id="post-month" class="text-sm font-anekLatin"><?php echo get_the_date('M'); ?></span>
                    </div>

                </div>

                <div class="lp-content border shadow-md text-center p-[25px]">

                    <a href="<?php the_permalink(); ?>">
                        <h3 class="text-2xl font-anekLatin font-semibold text-black mb-4 mt-3"><?php the_title(); ?></h3>
                    </a>

                    <div class="text-base font-normal font-anekLatin text-black mb-5">
                        <!-- <?php the_excerpt(); ?> -->
                        <?php echo wp_trim_words( get_the_content(), 15 ); ?>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="text-sm font-medium font-anekLatin text-orangeCrayola uppercase 7 px-15 hover:bg-dark-green rounded-sm" area-lable="continue reading" target="_self">
                        continue Reading
                    </a>

                </div>

            </div>


            <?php
                $i++;

                endwhile;

                wp_reset_postdata();
                
                endif;
            ?>

        </div>
    </div>
</section>