

<?php include("inc/header.php"); ?>



<!-- Conatct Page -->

<body>

		<div class="blue_bg">
			<section>
				<div class="wrapper">
					<div class="contact_title">
						<span class="head3" id="section3"></span>
						<h3>Contact</h3>
					</div>


					<!-- PHP -->
					
					<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
						<p class="contact_info">Thanks for the email! We'll get back to you in less than 48 hours!</p>
					<?php } else { ?>
				
					<?php
					    if (!isset($error_message)) {
						echo    '<div class="contact_info">
								<p>Got a Question?  Having issues with shipping, or you just want to chat.  Send us a Message we will respond within 48 hours!</p>
							</div>';
					    } else {
						echo '<p class="message">' . $error_message . '</p>';
					    }
					?>

					<!-- End PHP -->

			
					<div class="contact_form">
						<form method="post" action="#section3">
							<table>
								<tr>
									<td>
										<input type="text" name="name" placeholder="Name " id="name">
									<td>
								</tr>
								<tr>
									<td>
										<input type="text" name="email" placeholder="Email"id="email">
									<td>
								</tr>
								<tr>
									<td>
										<textarea name="message" placeholder="Message"id="message"></textarea>
									<td>
								</tr>
								<tr style="display: none;">
									<td>
									    <input type="text" name="address" id="address">
									    <p>Please leave this field blank.</p>
									</td>
								</tr>   
							</table>
							
							<input class="button2" type="submit" value="send">
							
						</form>
					<?php } ?>
					</div>
				</div>
			</section>
		</body>




			<?php include("inc/footer.php"); ?>