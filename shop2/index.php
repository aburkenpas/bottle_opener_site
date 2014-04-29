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
					<h3>Bottle Open 2</h3>
				</div>

					<div class="slider_container">
    					<ul class="rslides" >
      						<li><img src="<?php echo BASE_URL; ?>img/cat2.jpeg" alt=""></li>
        					<li><img src="<?php echo BASE_URL; ?>img/cat1.jpeg" alt=""></li>
        					
   						 </ul>
   						</div>
					

   						<div class="open1">
							<p class="button2">Buy Me</p>	
						</div>

   					<div class="info">

						<p>This text will be about the product.  
						It will say stuff like hey whats up this bottle opener 
						is made of of stainless steel.</p>
						
					</div>

					<div>
   			</div>
   					
						
				
		                </div>
		</section>

	<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>
	


		<!-- End Shop Page -->


	<?php include(ROOT_PATH . "inc/footer.php"); ?>