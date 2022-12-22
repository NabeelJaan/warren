


<section class="latest-articles py-20">
    <div class="mx-auto max-w-1140px 2xl:max-w-1585px">

        <div class="faq-header text-center mb-20">
            <h2 class="text-black font-medium font-anekLatin capitilize text-4xl md:text-5xl xl:text-9xl">
                <?php the_field( 'latest_articles_heading' ); ?>
            </h2>
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

            <div class="post-box">

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

                <div class="post-content border shadow-md text-center p-[25px]">

                    <h3 class="text-2xl font-anekLatin font-semibold text-black mb-4 mt-3"><?php the_title(); ?></h3>

                    <div class="text-base font-normal font-anekLatin text-black mb-5">
                        <!-- <?php the_excerpt(); ?> -->
                        <?php echo wp_trim_words( get_the_content(), 15 ); ?>
                    </div>

                    <a href="7 px-15 hover:bg-dark-green rounded-sm" href="<?php the_permalink(); ?>" class="text-sm font-medium font-anekLatin text-orangeCrayola uppercase" area-lable="continue reading" target="_self">
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