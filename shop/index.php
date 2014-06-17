<?php
$pageTitle = "Top Pop Card | Shop";
$descCont = "A complete gallery of all our bottle openers";

require_once("../inc/config.php");
include(ROOT_PATH . "inc/header.php");
include("analyticstracking.php");
?>

<!-- Shop Page-->


	<div class="red_bg">
		<section>

			<div class="wrapper">

				<div class="shop_title">
					<h3>Shop</h3>
				</div>

				<div class="container_shop1">

					<div class="open1">
						<p>Man Card - $10</p>
						<img src="<?php echo BASE_URL; ?>img/man-card.jpg" alt="">

						<a href="<?php echo BASE_URL; ?>mancard-bottle-opener/"><p class="button">More Info</p></a>
					</div>

				<div class="open2">
					
					<p>Ace - $10</p>
					<img src="<?php echo BASE_URL; ?>img/Ace.jpg" alt="">	

					<a href="<?php echo BASE_URL; ?>ace-of-diamonds-bottle-opener/"><p class="button">More Info</p></a>	

				</div>
				</div>
				<div class="info">
						<p>Stainless Steel Bottle openers, that fit perfectly in your wallet.  We currently have two 
							designs, and more to come. </p>
				</div>
		                </div>
		</section>	
	
		
</body>

		<!-- End Shop Page -->


	<?php include(ROOT_PATH . "inc/footer.php"); ?>