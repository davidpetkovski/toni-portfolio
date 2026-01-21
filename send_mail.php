<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace
    $name = strip_tags(trim($_POST["name"]));
    $company = strip_tags(trim($_POST["company"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $message = trim($_POST["message"]);

    // Check that data was sent to the mailer
    if ( empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Please complete the form and try again."]);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        //Server settings
        // For now, we will use standard mail() fallback if SMTP is not configured
        // To use SMTP, uncomment the following lines and fill in the details:
        /*
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'user@example.com';                     //SMTP username
        $mail->Password   = 'secret';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        */

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('davidpetkovski@icloud.com', 'David Petkovski'); 
        $mail->addReplyTo($email, $name);

        //Content
        $mail->isHTML(false);                                  //Set email format to HTML or Plain Text
        $mail->Subject = "New Contact from Portfolio: $name";
        
        $email_content = "Name: $name\n";
        $email_content .= "Company: $company\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Phone: $phone\n\n";
        $email_content .= "Message:\n$message\n";
        
        $mail->Body    = $email_content;

        $mail->send();
        http_response_code(200);
        echo json_encode(["status" => "success", "message" => "Thank You! Your message has been sent."]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
    }

} else {
    http_response_code(403);
    echo json_encode(["status" => "error", "message" => "There was a problem with your submission, please try again."]);
}
?>
