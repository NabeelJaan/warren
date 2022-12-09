<?php

    // Template Name: Home Page

?>

<?php get_header(); ?>


<section class="relative flex items-center justify-center h-screen overflow-hidden -mt-20 z-0">

    <div class="relative z-30">
        <img class="site-logo mx-auto" src="http://localhost/warren/wp-content/uploads/2022/12/logo-4-e1670529843893.png" alt="warren Logo" width="" height="">
    </div>

    <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
        <source src="https://assets.mixkit.co/videos/preview/mixkit-set-of-plateaus-seen-from-the-heights-in-a-sunset-26070-large.mp4" type="video/mp4" />
        Your browser does not support the video tag.
    </video>

</section>

<section class="about-warren bg-black py-60">
    <div class="py-6 px-4 max-w-[1500px]">
        <h1 class="text-[180px] leading-[180px] uppercase font-anekLatin font-bold text-orangeCrayola">What is Warr3n?</h1>
        <p class="text-[180px] leading-[180px] uppercase font-anekLatin font-bold text-isabelline">
            Warr3n is an imagined identity around the exploration of Web3 <span class="text-orangeCrayola">tech, art, and culture</span>. A community of <span class="text-orangeCrayola">innovators</span>.
        </p>
    </div>
</section>







<?php get_footer(); ?>