<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../src/encryption.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../details/details.php";

class Email{

function contactEmail($email, $message, $name){

$enc = new Encryption();
session_start();
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($name));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);
        $message = trim($message);
        $message = strip_tags($message);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            $_SESSION['result'] = "Oops! There was a problem with your submission. Please complete the form and try again.";
            header("Location: ../");
            die;
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "sales@celticchocolates.eu";

        // Set the email subject.
        $subject = "New message from $name";

        // Build the email content.
        $email_content = '<!-- Inliner Build Version 4380b7741bb759d6cb997545f3add21ad48f010b -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
<!-- For development, pass document through inliner -->
  </head>
  <body style="width: 100% !important; height: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; background: #efefef; margin: 0; padding: 0;" bgcolor="#efefef">
<table class="body-wrap" style="width: 100% !important; height: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; background: #efefef; margin: 0; padding: 0;" bgcolor="#efefef"><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td class="container" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; display: block !important; clear: both !important; max-width: 580px !important; margin: 0 auto; padding: 0;">

            <!-- Message start -->
            <table style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; width: 100% !important; border-collapse: collapse; margin: 0; padding: 0;"><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td align="center" class="masthead" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; color: white; background: #71bc37; margin: 0; padding: 80px 0;" bgcolor="#71bc37">

                        <h1 style="font-size: 32px; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.25; max-width: 90%; text-transform: uppercase; margin: 0 auto; padding: 0;">Ol\'roight Connah!</h1>

                    </td>
                </tr><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td class="content" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; background: white; margin: 0; padding: 30px 35px;" bgcolor="white">

                        <h2 style="line-height: 1.25; font-size: 28px; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; margin: 0 0 20px; padding: 0;">Message from '.$name.',</h2>

                        <p style="font-size: 16px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0 0 20px; padding: 0;"><i>"'.$message.'"</i></p>

                        <table style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; width: 100% !important; border-collapse: collapse; margin: 0; padding: 0;"><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td align="center" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;">
                                    <p style="font-size: 16px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0 0 20px; padding: 0;">
                                        <a href="mailto:'.$email.'" class="button" style="color: white; text-decoration: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; display: inline-block; font-weight: bold; border-radius: 4px; background: #71bc37; margin: 0; padding: 0; border-color: #71bc37; border-style: solid; border-width: 10px 20px 8px;">Reply to the fackah!</a>
                                    </p>
                                </td>
                            </tr></table><p style="font-size: 16px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0 0 20px; padding: 0;">Wanna head back to the \'aul HQ? <a href="http://conorthompson.ie/admin" style="color: #71bc37; text-decoration: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;">Go To Dashboard</a>.</p>

                        <p style="font-size: 16px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0 0 20px; padding: 0;"><em style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;">– Tuggah Mate (Conor\'s Email AI)</em></p>

                    </td>
                </tr></table></td>
    </tr><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td class="container" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; display: block !important; clear: both !important; max-width: 580px !important; margin: 0 auto; padding: 0;">

            <!-- Message start -->
            <table style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; width: 100% !important; border-collapse: collapse; margin: 0; padding: 0;"><tr style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; margin: 0; padding: 0;"><td class="content footer" align="center" style="font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; background: white none; margin: 0; padding: 30px 35px;" bgcolor="white">
                        <p style="font-size: 14px; font-weight: normal; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; color: #888; text-align: center; margin: 0; padding: 0;" align="center">Sent by <a href="#" style="color: #888; text-decoration: none; font-size: 100%; font-family: \'Avenir Next\', \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; line-height: 1.65; font-weight: bold; margin: 0; padding: 0;">'.$email.'</a>, at '.date("F j, Y, g:i a").'</p>
                        
                    </td>
                </tr></table></td>
    </tr></table></body>
</html>
';

        // Build the email headers.
        $email_headers = "From: $name <info@celticchocolates.eu>\r\n";
        $email_headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        // Send the email.
        if (mail($recipient, $subject, $email_content,$email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";

            $con = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
			}

    }
}//end of contactEmail()


}//end of Email class

?>