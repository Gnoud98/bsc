<section class="bg-primary-200 lg:py-[77px] py-14">
	<div class="container">
		<h2 class="heading-title text-center mb-12">Khách hàng và đối tác</h2>
		<div class="block_slider block_slider-show-2 no-dots -mx-4">
            <?php 
             for ($i = 1; $i < 7; $i++) {
             ?>
             <div class="block_slider-item px-4 py-6 lg:w-1/6 md:w-1/3 w-1/2">
                 <a href="" class="block relative pt-[45%] rounded-lg overflow-hidden w-full shadow">
                     <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pn<?php echo $i  ?>.png"
                         alt="" class="absolute w-full h-full object-contain inset-0">
                 </a>
             </div>
             <div class="block_slider-item px-4 py-6 lg:w-1/6 md:w-1/3 w-1/2">
                 <a href="" class="block relative pt-[45%] rounded-lg overflow-hidden w-full shadow">
                     <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pn<?php echo $i  ?>.png"
                         alt="" class="absolute w-full h-full object-contain inset-0">
                 </a>
             </div>
              <?php 
             } 
            ?>
			
		</div>
	</div>
</section>