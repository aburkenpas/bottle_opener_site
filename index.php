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

<!-- End PHP  / Not sure if im supposed to add to header-->



<?php include("inc/header.php"); ?>



<!-- Title Page -->

<body>

<div class="photo_container">
	<div class="wrapper">
		<section>
			<div class="title" id="section1">
				<span class="head1" ></span>
				<h1>Company Name</h1>
				<h2>Stainless Steel Bottle Openers</h2>
			</div>
	</div>
	</div>
		</section>

</body>

	<!-- End Title Page -->


	


		
			

<?php include("inc/footer.php"); ?>

