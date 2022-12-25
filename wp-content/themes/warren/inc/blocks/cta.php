

<section class="cta px-[15px] xl:px-0 pt-20 pb-16 relative z-10 -mb-[200px] mx-[15px] max-w-1140px md:mx-auto rounded-xl">
    <div class="">
        <div class="cta-wrapper">
            
            <h2 class="text-black text-center text-[34px] md:text-[44px] font-anekLatin leading-[50px] font-bold mb-[22px] max-w-[740px] mx-auto">
                <?php the_field( 'cta_heading' ); ?>
            </h2>

            <div class="md:w-[325px] mx-auto">
                <div class="signup-btn cursor-pointer cta-btn border border-white inline-flex justify-center items-center w-[325px] h-[57px] rounded-md hover:bg-prussianBlue hover:border-prussianBlue mt-[48px]">
                    <?php $cta_button = get_field( 'cta_button' ) ?>
                        <?php if( $cta_button ) : ?>
                            <a href="<?php echo esc_url( $cta_button['url'] ) ?>" class="text-white text-sm md:text-lg font-medium leading-none capitalize mr-[15px]" aria-label="Get a Free On-Page Optimization" target="_self">
                                <?php echo esc_html( $cta_button['title'] ); ?>
                            </a>
                            <img class="" src="/wp-content/uploads/2022/12/right_arrow.webp" alt="">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>