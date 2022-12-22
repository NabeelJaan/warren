<section class="px-6 bg-isabelline py-20">

    <div class="mx-auto max-w-1140px 2xl:max-w-1585px">

        <div class="aritcles-head text-center mb-32">
            <h2 class="font-medium font-anekLatin uppercase 2xl:text-9xl mb-4">Explore</h2>
            <div class="h-[2px] w-[200px] mx-auto bg-orangeCrayola mt-3 mb-8"></div>
        </div> 

        <!-- First Arcticle -->



        <?php

            $args = array(
                'post_type'         =>  'post',
                'posts_per_page'    =>  1,
                'post_status'       =>  'publish',
                'cat'               =>   3,
            );

            $the_query = new WP_Query( $args );
            $i = 1;
            if ( $the_query->have_posts() ):
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $ex_id = get_the_ID();
        ?>

        <div class="relative single-article md:flex md:items-center mb-32">

            <div class="f-img border-8 border-white relative inline-block">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('f-img', ['class' => 'w-full']); ?>
                </a>
            </div>

            <div>
                <div class="post-content bg-white p-[38px] -ml-10 shadow-md relative z-50">

                    <span class="text-base font-anekLatin block mb-5">
                        <?php
                            $categories = get_the_category();
                            $separator = ' ';
                            $output = '';
                            if ( ! empty( $categories ) ) {
                                foreach( $categories as $category ) {
                                    $output .= '<a class="cat-text text-orangeCrayola text-sm font-medium font-anekLatin uppercase" href="' . get_category_link( $category->term_id ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                                }
                                echo trim( $output, $separator );
                            }
                        ?>
                    </span>

                    <h2 class="text-4xl font-anekLatin font-bold">
                        <?php the_title(); ?>
                    </h2>

                    <div class="h-[2px] w-32 bg-orangeCrayola mt-3 mb-8"></div>

                    <div class="text-xl font-anekLatin mb-4">
                        <?php echo wp_trim_words( get_the_content(), 15 ); ?>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="text-xl pb-1 font-anekLatin border-b border-dotted border-orangeCrayola" area-label="continue reading" target="_self">
                        Continue Reading
                    </a>
                </div> 
            </div>
        </div>


        <?php
            $i++;
            endwhile;
            wp_reset_postdata();
            endif;
        ?>


        <!-- second Featured Article -->


        <?php
            $args = array(
                'post_type'         =>  'post',
                'cat'               =>   3,
                'posts_per_page'    =>   1,
                'post_status'       =>  'publish',
                'offset'			=>  1
            );
            $the_query = new WP_Query( $args );
            $i = 1;
            if ( $the_query->have_posts() ):
                while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>

        <div class="relative single-article md:flex md:items-center mb-32">

            <div class="f-img border-8 border-white relative inline-block order-last">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('f-img', ['class' => 'w-full']); ?>
                </a>
            </div>

            <div>
                <div class="post-content bg-white p-[38px] -mr-10 shadow-md relative z-50">

                    <span class="text-base font-anekLatin block mb-5">
                        <?php
                            $categories = get_the_category();
                            $separator = ' ';
                            $output = '';
                            if ( ! empty( $categories ) ) {
                                foreach( $categories as $category ) {
                                    $output .= '<a class="cat-text text-orangeCrayola text-sm font-medium font-anekLatin uppercase" href="' . get_category_link( $category->term_id ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                                }
                                echo trim( $output, $separator );
                            }
                        ?>
                    </span>

                    <h2 class="text-4xl font-anekLatin font-bold">
                        <?php the_title(); ?>
                    </h2>

                    <div class="h-[2px] w-32 bg-orangeCrayola mt-3 mb-8"></div>

                    <div class="text-xl font-anekLatin mb-4">
                        <?php echo wp_trim_words( get_the_content(), 15 ); ?>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="text-xl pb-1 font-anekLatin border-b border-dotted border-orangeCrayola" area-label="continue reading" target="_self">
                        Continue Reading
                    </a>

                </div> 
            </div>
        </div>

        <?php
            $i++;
            endwhile;
            wp_reset_postdata();
            endif;
        ?>


        <!-- Third Featured Article -->

        <?php
            $args = array(
                'post_type'         =>  'post',
                'cat'               =>   3,
                'posts_per_page'    =>   1,
                'post_status'       =>  'publish',
                'offset'			=>  2
            );
            $the_query = new WP_Query( $args );
            $i = 1;
            if ( $the_query->have_posts() ):
                while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>

        <div class="relative single-article md:flex md:items-center">

            <div class="f-img border-8 border-white relative inline-block">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('f-img', ['class' => 'w-full']); ?>
                </a>
            </div>

            <div>
                <div class="post-content bg-white p-[38px] -ml-10 shadow-md relative z-50">

                    <span class="text-base font-anekLatin block mb-5">
                        <?php
                            $categories = get_the_category();
                            $separator = ' ';
                            $output = '';
                            if ( ! empty( $categories ) ) {
                                foreach( $categories as $category ) {
                                    $output .= '<a class="cat-text text-orangeCrayola text-sm font-medium font-anekLatin uppercase" href="' . get_category_link( $category->term_id ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                                }
                                echo trim( $output, $separator );
                            }
                        ?>
                    </span>

                    <h2 class="text-4xl font-anekLatin font-bold">
                        <?php the_title(); ?>
                    </h2>

                    <div class="h-[2px] w-32 bg-orangeCrayola mt-3 mb-8"></div>

                    <div class="text-xl font-anekLatin mb-4">
                        <?php echo wp_trim_words( get_the_content(), 15 ); ?>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="text-xl pb-1 font-anekLatin border-b border-dotted border-orangeCrayola" area-label="continue reading" target="_self">
                        Continue Reading
                    </a>

                </div> 
            </div>
        </div>


        <?php
            $i++;
            endwhile;
            wp_reset_postdata();
            endif;
        ?>

    </div>   
</section> 