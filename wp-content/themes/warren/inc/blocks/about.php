<?php 

    $id = 'about-us' . $block['id']; 
    $classes = $block['className'];
    $classes .= ' about-warren ';
    
?>


<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> px-[15px] relative bg-fixed bg-right py-36 md:py-60 xl:px-0" style="background-image: url('http://localhost/warren/wp-content/uploads/2022/12/warrenLogo.webp');">
    <div class="max-w-1140px mx-auto">
        <div class="about-content relative z-10 text-center">
            <h1 class="text-white text-2xl xs:text-4xl md:text-4xl lg:text-6xl 2xl:text-9xl uppercase font-anekLatin font-bold mb-6">
                <?php the_field( 'about_main_heading' ); ?>
            </h1>
            <p class="text-xl md:text-3xl 2xl:text-4xl uppercase font-anekLatin font-bold text-isabelline">
                <?php the_field( 'about_sub_heading' ); ?>
            </p>
        </div>
    </div>
</section>