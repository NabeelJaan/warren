

<section class="bg-black px-[15px] xl:px-0 py-[120px]">
    <div class="grid grid-cols-8 xl:grid-cols-12">
        <div class="col-span-12 xl:col-span-10 xl:col-start-2">

            <div class="faq-header text-center mb-20">

                <h2 data-aos="fade-up" data-aos-duration="1400" data-aos-easing="ease-in-out" class="text-white font-medium font-anekLatin uppercase text-2xl xs:text-5xl md:text-8xl xl:text-9xl">
                    <?php the_field( 'faq_heading' ); ?>
                </h2>

                <div data-aos="fade-up" data-aos-duration="1600" data-aos-easing="ease-in-out" class="h-[2px] w-[80px] md:w-[200px] mx-auto bg-orangeCrayola mt-3 mb-8"></div>

            </div>

            <div data-aos="fade-up" data-aos-duration="1900" data-aos-easing="ease-in-out" class="acc-container">

                <?php if( have_rows( 'questions_answers' ) ) : ?>
                    <?php while( have_rows( 'questions_answers' ) ) : the_row(); ?>

                        <div class="acc border-t border-white last:border-b">

                            <div class="acc-head relative cursor-pointer py-6 px-3">
                                <p class="text-white text-3xl md:text-5xl font-medium font-anekLatin transition-all hover:text-orangeCrayola">
                                    <?php the_sub_field( 'question' ); ?>
                                </p>
                            </div>

                            <div class="acc-content">
                                <p class="text-white text-2xl font-medium font-anekLatin pb-6 px-3">
                                    <?php the_sub_field( 'answer' ); ?>
                                </p>
                            </div>

                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>