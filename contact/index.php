<?php
require_once("../inc/config.php");

$pageTitle = "Contact Top Pop Card";
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

        $mail->SetFrom($email, $name);
        $address = "toppopcard@gmail.com";
        $mail->AddAddress($address, "Top Pop Card");
        $mail->Subject    = "Top Pop Contact Form Submission | " . $name;
        $mail->MsgHTML($email_body); 

        if($mail->Send()) {
            header("Location: " . BASE_URL . "contact/?status=thanks");
            exit;
        } else {
          $error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
        }

    }
}

?><?php
 include(ROOT_PATH . "inc/header.php"); ?>



<!-- Conatct Page -->



		<div class="blue_bg">
			<section>
				<div class="wrapper">
					<div class="contact_title">
						<h3>Contact</h3>
					</div>


					<!-- PHP -->
					
					<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
						<p class="thankYouMessage">Thanks for the email! We'll get back to you in less than 48 hours!</p>
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
						<form method="post" action="<?php echo BASE_URL; ?>contact/">
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




			<?php include(ROOT_PATH . "inc/footer.php"); ?>