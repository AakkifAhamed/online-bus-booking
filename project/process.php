<?Php

if(isset($_POST['submit']))
{
	

 
	require 'PHPMailerAutoload.php';

   

  

    $UserName=$_POST['name'];
	$Email=$_POST['email'];
	$Msg=$_POST['message'];

$mail = new PHPMailer();
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);
$mail->SMTPDebug = 2;                               // Enable verbose debug output
$mail->isSMTP(); 
                                   // Set mailer to use SMTP
$mail->Host = ('smtp.gmail.com');  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;  
                            // Enable SMTP authentication
$mail->Username = 'sivapakthangopikrishna69@gmail.com';                 // SMTP username
$mail->Password = 'jarvis13#';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

//$mail->setFrom('realstark13@gmail.com', 'STARK');
$mail->addAddress('sivapakthangopikrishna69@gmail.com', 'SGK');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Feedback';
$mail->Body    = 'Email:'.$Email.$Msg;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else{
	
	  header("location:Contact Us.php?message=Feedback Successfully sent!");
}
	
}

?>