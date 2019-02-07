<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
//        $subject = $_POST['subject'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];
//        $mailTo = "ryan96db@gmail.com";
//        $headers = "From: ".$mailFrom;
//        $txt = "You have received an email from ".$name.".\n\n".$message;
//        mail($mailTo, $subject, $txt, $headers);
//        header("Location: contact.php?mailsend");
//    }
    
    
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'ryan96db@gmail.com';                 // SMTP username
            $mail->Password = 'Victorian$2';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            
            //Recipients
            $mail->setFrom($mailFrom, $name);
            $mail->addAddress('ryan96db@gmail.com', 'Joe User');     // Add a recipient
//            $mail->addAddress('ellen@example.com');               // Name is optional
            $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');
            
            //Attachments
//            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Message from website';
            $mail->Body    = $message;
           
            
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
    // $email_from = "ryandb1596@gmail.com";
    // $email_subject = "New Form Submission";
    // $email_body = "User Name: ". $name. ".\n". "User Email: ". $visitor_email.".\n"
    // . "User Message: ". $message. ".\n";
    // $to = "ryan96db@gmail.com";
    // $headers = "From: ". $email_from. "\r\n";
    // $headers = "Reply-To: ". $visitor_email. "\r\n"
    // mail($to,$email_subject,$email_body,$headers);
    // header("Location: contact.html");
    
    ?>
