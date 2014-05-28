<?php

$pageTitle = "Top Pop Card | Ace of Diamonds Bottle Opener";
$descCont = "Always have an ace up your sleve with the 36 gauge stainless steel Ace of Diamonds Bottle Opener that fits in your wallet ";

require_once("../inc/config.php");
include(ROOT_PATH . "inc/header.php"); 
?>

<!-- Shop Page-->

<body>
	<div class="red_bg">
		
		<section>
			<div class="wrapper">

				<div class="shop_title">
					<h3>Ace of Diamonds</h3>
				</div>

					<div class="slider_container">
    					<ul class="rslides" >
      						<li><img src="<?php echo BASE_URL; ?>img/Ace.jpg" alt=""></li>
        					<li><img src="<?php echo BASE_URL; ?>img/Ace-of-Dimaond-Wallet.jpg" alt=""></li>
        					<li><img src="<?php echo BASE_URL; ?>img/aceopen.jpg" alt=""></li>
        					
   						 </ul>
   						</div>
					

   						<div class="open1">
							<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="YQUC8YY7A8QHU">
							<input type="submit" Value="Buy Me" name="submit">
							</form>		
						</div>

   					<div class="info">

						<p>Always have an ace up your sleve with this 36 gauge stainless steel Ace of Diamonds Bottle Opener that fits in your wallet. - $10</p>
						
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