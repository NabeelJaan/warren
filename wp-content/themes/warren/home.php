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
    <div class="px-6 max-w-[1500px]">
        <h1 class="text-[180px] leading-[180px] uppercase font-anekLatin font-bold text-orangeCrayola">What is Warr3n?</h1>
        <p class="text-[180px] leading-[180px] uppercase font-anekLatin font-bold text-isabelline">
            Warr3n is an imagined identity around the exploration of Web3 <span class="text-orangeCrayola">tech, art, and culture</span>. A community of <span class="text-orangeCrayola">innovators</span>.
        </p>
    </div>
</section>

<section class="px-6 bg-isabelline">

    <div class="sec-height" style="height: 1248px">
        <div>
            <div class="grid grid-cols-8 xl:grid-cols-12 content-start md:py-40">
                <div class="col-span-6 mb-4 max-w-md xl:col-span-8 xl:col-start-2 2xl:col-span-7 2xl:col-start-2">
                    <h2 class="font-medium font-anekLatin uppercase 2xl:text-9xl mb-4">Explore</h2>
                </div>

                <div class="col-span-1 col-end-9 xl:col-end-11 2xl:row-start-2">
                    <img class="w-3/5" src="http://localhost/warren/wp-content/uploads/2022/12/warren-v-logo-e1670610973470.png" alt="warren vertical Logo">
                </div>

                <div class="col-span-6 mb-4 max-w-md xl:col-span-8 xl:col-start-2 2xl:col-span-7 2xl:col-start-2">
                    <p class="font-normal font-anekLatin text-2xl">Warr3n is an imagined identity around the exploration of Web3 tech, art, and culture. A community of innovators.</p>
                </div>
            </div>
        </div>
    </div>

</section>





<?php get_footer(); ?>