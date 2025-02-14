<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 0;  // Disable debug output
    $mail->isSMTP();
    $mail->Host       = 'smtp.office365.com';  // Correct Outlook SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'vblairsh@outlook.com';  // Your Outlook email
    $mail->Password   = 'Nafim@2012';  // Be careful with hardcoded passwords!
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Outlook requires STARTTLS
    $mail->Port       = 587;  // Outlook requires port 587 with STARTTLS

    // Recipients
    $mail->setFrom('vblairsh@outlook.com', 'Nafim / Zuriins');  // Your name as sender
    $mail->addAddress('projectnafim@outlook.com', 'Nicole <3');  

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'I Love You';
    $mail->Body    = 'Happy Valentine\'s Day, my best friend, I love you so much. 
                      You are the best thing that has ever happened to me, so that is why I need to explain something. 
                      You see, I have grown feelings for you, and I wish to have a lifetime relationship with you, but that won’t last because it’s online. 
                      But would you like to be my girlfriend on this Fine Friday? If you do not want to, it is fine. 
                      All I ask is for a week, and if you deny, I hope we can return as friends after this. ❤';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
