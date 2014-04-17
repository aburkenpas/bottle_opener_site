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
					<h3>Shop</h3>
				</div>
				<div class="container_shop1">
					<div class="open1">
						<p>Bottle Open 1</p>
						<img src="<?php echo BASE_URL; ?>img/cat1.jpeg" alt="">
						<p class="button">Buy Me</p>	
					</div>
				<div class="open2">
					<p>Bottle Open 2</p>
					<img src="<?php echo BASE_URL; ?>img/cat2.jpeg" alt="">
					<p class="button">Buy Me</p>	
				</div>
				</div>
				<div class="info">
						<p>This text will be about the product.  
							It will say stuff like hey whats up this bottle opener 
							is made of of stainless steel.</p>
				</div>
		                </div>
		</section>	
	
		
</body>

		<!-- End Shop Page -->


	<?php include(ROOT_PATH . "inc/footer.php"); ?>