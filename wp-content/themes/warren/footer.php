
<div class="h-[8px] bg-orangeCrayola"></div>

<footer class="site-footer px-[15px] xl:px-0 bg-isabelline py-14">

  <div class="mx-auto max-w-1140px 2xl:max-w-1585px">
      <div class="fc-wrapper flex flex-col justify-center text-center md:flex-row md:justify-between md:items-center">
        <div class="copy-right">
          <p class="text-black text-lg font-anekLatin font-medium mb-5 md:mb-0">

            <?php the_field( 'footer_copy_right' , 'option' ); ?>

          </p>
        </div>

        <div class="social-link flex justify-center items-center gap-4">

          <div>
            <p class="text-black text-lg font-anekLatin font-medium">
              <!-- <?php the_field( 'social_icons_title', 'option' ); ?> -->Follow us:
            </p>
          </div>

          <div class="bg-black w-[40px] h-[40px] inline-flex items-center justify-center rounded-full hover:bg-orangeCrayola cursor-pointer">

            <?php $instagram_link = get_field( 'instagram_link' , 'option' ); ?>

            <a href="<?php echo $instagram_link['url']; ?>" aria-label="instagram" target="_blank">

              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20px" height="20px">
                <path fill="#f0ebe5" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
              </svg>

            </a>
          </div>

          <div class="bg-black w-[40px] h-[40px] inline-flex items-center justify-center rounded-full hover:bg-orangeCrayola cursor-pointer">

          <?php $twitter_link = get_field( 'twitter_link' , 'option' ); ?>

            <a href="<?php $twitter_link['url']; ?>" aria-label="twitter" target="_blank">

              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20px" height="20px">
                <path fill="#f0ebe5" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
              </svg>
            </a>

          </div>

        </div>
      </div>
  </div>

</footer>



<?php wp_footer(); ?>

<script>

jQuery(document).ready(function() {
  jQuery('.acc-container .acc:nth-child(1) .acc-head').addClass('active');
  jQuery('.acc-container .acc:nth-child(1) .acc-content').slideDown();
  jQuery('.acc-head').on('click', function() {
      if(jQuery(this).hasClass('active')) {
        jQuery(this).siblings('.acc-content').slideUp();
        jQuery(this).removeClass('active');
      }
      else {
        jQuery('.acc-content').slideUp();
        jQuery('.acc-head').removeClass('active');
        jQuery(this).siblings('.acc-content').slideToggle();
        jQuery(this).toggleClass('active');
      }
  });     
  });


  jQuery('.owl-carousel').owlCarousel({
    loop:true,

    margin:20,

    responsiveClass:true,

    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:false,
            loop:true
        }
    }
  });


</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>

</body>
</html>
