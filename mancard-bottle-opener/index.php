<?php
$pageTitle = "Top Pop Card | Mancard Bottle Opener";
$descCont = "The Mancard bottle opener is a 36 gauge stainless steel bottle opener that fits in your wallet.  Complete with manly mustache. ";

require_once("../inc/config.php");
include(ROOT_PATH . "inc/header.php");
include("analyticstracking.php");
?>

<!-- Shop Page-->

<body>
	<div class="red_bg">
		
		<section>
			<div class="wrapper">

				<div class="shop_title">
					<h3>Man Card</h3>
				</div>

					<div class="slider_container">
    					<ul class="rslides" >
      						<li><img src="<?php echo BASE_URL; ?>img/man-card.jpg" alt="The Man Card bottle opener"></li>
        					<li><img src="<?php echo BASE_URL; ?>img/man-card-wallet.jpg" alt="The Man Card bottle opener in a wallet"></li>
        					<li><img src="<?php echo BASE_URL; ?>img/Man-Card-Open.jpg" alt="The Man Card bottle opener opening a Bottle"></li>
   						 </ul>
   						
   						<div class="man_info">

						<p>
							The Mancard bottle opener is a 36 gauge stainless steel bottle opener that fits 
							in your wallet.  Complete with manly mustache.  Never leave home without it! - 
							$10
						</p>
						
					</div>
					

   						<div class="buy_button">
							<form  target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input  type="hidden" name="hosted_button_id" value="L8EHSNJ978QVG">
							<input  type="submit" Value="Buy Me" name="submit">
							</form>	
						</div>
						</div>

						<div class="man_info2">

						<p>
							The Mancard bottle opener is a 36 gauge stainless steel bottle opener that fits 
							in your wallet.  Complete with manly mustache.  Never leave home without it! - 
							$10
						</p>
						
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