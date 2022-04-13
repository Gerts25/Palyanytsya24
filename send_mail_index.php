<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "PHPMailer/src/Exception.php";
    require "PHPMailer/src/PHPMailer.php";

    $mail = new PHPMailer(true);

    $mail->CharSet = "UTF-8";
    $mail->IsHTML(true);

     $name = $_POST["name"];
	$phone = $_POST["phone"];
	$email_template = "template_mail_index.html";

    $body = file_get_contents($email_template);
	$body = str_replace('%name%', $name, $body);
	$body = str_replace('%phone%', $phone, $body);


    $mail->addAddress("igorhertsyuk89@gmail.com");  
    $mail->Subject = "[Заявка з форми]";
    $mail->MsgHTML($body);

    if (!$mail->send()) {
        $message = "Помилка відправлення";
    } else {
        $message = "Дані відправлені!";
    }

	$response = ["message" => $message];

    header('Content-type: application/json');
    echo json_encode($response);


?>
