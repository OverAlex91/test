<?php 

$phone = $_POST['user_phone'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'andrey.asdasdzxc.91@bk.ru';                 // Наш логин
$mail->Password = 'OyaUOpotI21_';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->setFrom('andrey.asdasdzxc.91@bk.ru', 'Добрый Картон');   // От кого письмо 
$mail->addAddress('onix.dn@gmail.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта Добрый Картон';
$mail->Body    = '
	Пользователь оставил свои данные <br> 
	Номер телефона: '.$phone;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
echo '<script>alert("Спасибо за заявку")</script>';
}
?>
