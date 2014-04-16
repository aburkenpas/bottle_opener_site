<!-- PHP -->

<?php
require_once("inc/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if ($name == "" OR $email == "" OR $message == "") {
        $error_message = "You must specify a value for name, email address, and message.";
    }

    if (!isset($error_message)) {
        foreach( $_POST as $value ){
            if( stripos($value,'Content-Type:') !== FALSE ){
                $error_message = "There was a problem with the information you entered.";
            }
        }
    }

    if (!isset($error_message) && $_POST["address"] != "") {
        $error_message = "Your form submission has an error.";
    }

    require_once(ROOT_PATH . "inc/phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    if (!isset($error_message) && !$mail->ValidateAddress($email)){
        $error_message = "You must specify a valid email address.";
    }

    if (!isset($error_message)) {
        $email_body = "";
        $email_body = $email_body . "Name: " . $name . "<br>";
        $email_body = $email_body . "Email: " . $email . "<br>";
        $email_body = $email_body . "Message: " . $message;

	//TO DO rename when final name is decieded
	
        $mail->SetFrom($email, $name);
        $address = "volt9design@gmail.com";
        $mail->AddAddress($address, "Volt 9 Design");
        $mail->Subject    = "Volt 9 Contact Form Submission | " . $name;
        $mail->MsgHTML($email_body); 

        if($mail->Send()) {
            header("Location: " . BASE_URL . "?status=thanks");
            exit;
        } else {
          $error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
        }

    }
}

?>

<!-- End PHP -->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bottle Opener</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css" />

	<!-- Google Fonts -->

	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Kite+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>

	<!-- End Google Fonts-->


	<!-- JQuery *Most likely going to remove script, because of multiple pages-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
		$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
		$('html,body').animate({
		scrollTop: target.offset().top
		}, 1000);
		return false;
			}
		}
			});
		});
	</script>

	<!-- End JQuery -->

</head>

<body>

	<!-- Header -->

	<header>
		<div class="header">
			<a href="#section1">
				<img id ="logo_img" src="img/Bottlelogo.png">
			</a>
			<div class="social_media">
				<a href="twitter.com"><img src="img/twitter.png" class="social-img"alt="Twitter icon"></a>
				<a href="facebook.com"><img src="img/facebook.png" class="social-img"alt="Facebook icon"></a>
			</div>
			<nav>
				<ul>	
					<li class="shop_nav"><a href="#section2">Shop</a></li>
					<li class="contact_nav"><a href="#section3" >Contact</a></li>
				</ul>
			
			</nav>
		</div>
	</header>

<!-- End Header -->


<!-- Title Page -->

<div class="photo_container">
	<div class="wrapper">
		<section>
			<div class="title" id="section1">
				<span class="head1" ></span>
				<h1>Company Name</h1>
				<h2>Stainless Steel Bottle Openers</h2>
			</div>
			
			<div class="arrow_box">
				<a href="#section2">
					<img class ="arrow" src="img/arrow.png" alt="">
				</a>
			</div>
	</div>
	</div>
		</section>

	<!-- End Title Page -->


	<!-- Shop Page-->

	<div class="red_bg">
		<section>
			<div class="wrapper">

				<div class="shop_title">
					<span class="head2" id="section2"></span>
					<h3>Shop</h3>
				</div>
				<div class="container_shop1">
					<div class="open1">
						<p>Bottle Open 1</p>
						<img src="img/cat1.jpeg" alt="">
						<p class="button">Buy Me</p>	
					</div>
				<div class="open2">
					<p>Bottle Open 2</p>
					<img src="img/cat2.jpeg" alt="">
					<p class="button">Buy Me</p>	
				</div>
				</div>
				<div class="info">
						<p>This text will be about the product.  It will say stuff like hey whats up this bottle opener is made of of stainless steel.</p>
						<div class="arrow_box2">
							<a href="#section3">
								<img class ="arrow2" src="img/arrow.png" alt="">
							</a>
						</div>
				</div>
			</div>
	</div>
		</section>

		<!-- End Shop Page -->


		<!-- Conatct Page -->

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
			
		<!-- footer -->

		<footer>
		
				<a href="twitter.com" class="twitter">
					<img src="img/twitter.png" alt="">
				</a>

				<a href="facebook.com">
					<img src="img/facebook.png" alt="">
				</a>
		
			<p>&copy; 2014 Company Name</p>
		</footer> 

		<!-- End Footer -->

	</div>
	
</body>
</html>