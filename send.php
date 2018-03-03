<?php
$name = $_POST['#name'];
$email = $_POST['#email'];
$message = $_POST['#message'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);
$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);
$name = trim($name);
$email = trim($email);
if (mail("myratov.r@gmail.com", "Заявка с сайта", "Name:".$name.". E-mail: ".$email ,"Text: ".$message" \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?> 