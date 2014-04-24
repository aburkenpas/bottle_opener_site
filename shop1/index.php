<?php
require_once("../inc/config.php");
include(ROOT_PATH . "inc/header.php"); 
?>

<!-- Shop Page-->

<body>
	<div class="red_bg">
		<section>
			<div class="wrapper">

				<div class="shop_title">
					<h3>Bottle Open 1</h3>
				</div>

					<div id="my-slideshow">
    					<ul class="bjqs">
      						<li><img src="<?php echo BASE_URL; ?>img/cat1.jpeg" alt=""></li>
        					<li><img src="<?php echo BASE_URL; ?>img/cat1.jpeg" alt=""></li>
        					<li><img src="<?php echo BASE_URL; ?>img/cat1.jpeg" alt=""></li>
   						 </ul>
					</div>

   					<div class="info">

						<p>This text will be about the product.  
						It will say stuff like hey whats up this bottle opener 
						is made of of stainless steel.</p>
						
					</div>

					<div>
   			</div>
   					<div class="open1">
						<p class="button">Buy Me</p>	
					</div>
						
				
		                </div>
		</section>

	
		<script src="<?php echo BASE_URL; ?>js/bjqs-1.3.min.js"></script>
	<script>
		jQuery(document).ready(function($) {
  
  $('#banner-slide').bjqs({
    animtype      : 'slide',
    height        : 320,
    width         : 620,
    responsive    : true,
    randomstart   : true
  });
  
});
	</script>
</body>

		<!-- End Shop Page -->


	<?php include(ROOT_PATH . "inc/footer.php"); ?>