<style>
	@media screen and (min-width: 1200px) {
		#logo-scroll{
			width:1000px;
			top:40%;
			right:1%;
			left:1%;
			position:fixed;	
		}
	}
	@media screen and (max-width: 420px) {
		#logo-scroll{
			width:330px;
			top:40%;
			right:5%;
			left:5%;
			position:fixed;	
		}
	}
</style>









<section class="relative hero-sec px-[15px] xl:px-0 flex items-center justify-center h-screen overflow-hidden -mt-20 z-0">

    <div class="sl-wrapper relative z-30">

        <?php $main_logo = get_field( 'main_logo' ); ?>
        <?php if( $main_logo ) : ?>
            <img class="site-logo mx-auto" id="logo-scroll" src="<?php echo esc_url( $main_logo['url'] ); ?>" alt="<?php echo esc_attr( $main_logo['alt'] ); ?>" width="" height="">
        <?php endif; ?>

    </div>

    <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">


        <source src="https://warren3.xyz/wp-content/uploads/2023/01/warrenheader.mp4" type="video/mp4" />


        Your browser does not support the video tag.
    </video>

</section>











<script>
		const bg = document.getElementById('logo-scroll');
		const wd = jQuery(window).width();
		//console.log(jQuery(window).width());
	if(wd >= 1200){
		window.addEventListener('scroll',function(){
			//console.log(window.pageYOffset);
			bg.style.top = 40-(window.pageYOffset/7.8667)+'%';
			bg.style.right = 1+(window.pageYOffset*0.2983)+'%';
			bg.style.width = 1000-(window.pageYOffset*2.7119)+'px';
			if((wd >= 1200)&&(wd <= 1500)){
				if(window.pageYOffset>=290){
					bg.style.display = 'none';
				}
				else{
					bg.style.display = 'block';
				}
			}
			else if(wd > 1500){
				if(window.pageYOffset>=295){
					bg.style.display = 'none';
				}
				else{
					bg.style.display = 'block';
				}
			}
		
		});
	}
	else if((wd >= 360)&&(wd <= 420)){
		window.addEventListener('scroll',function(){
			console.log(window.pageYOffset);
			bg.style.top = 40-(window.pageYOffset/8.1333)+'%';
			bg.style.right = 5+(window.pageYOffset*0.2885)+'%';
			bg.style.width = 330-(window.pageYOffset*0.42623)+'px';
			if(window.pageYOffset>=297){
				bg.style.display = 'none';
			}
			else{
				bg.style.display = 'block';
			}
		});
	}
</script>