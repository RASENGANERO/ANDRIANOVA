<?php
use PHPMailer\PHPMailer\PHPMailer;
require __DIR__ ."/phpmailer/PHPMailer.php";
require __DIR__ ."/phpmailer/SMTP.php";
require __DIR__ ."/phpmailer/Exception.php";
function send_message(){
    $par1=$_POST["name"];
    $par2=$_POST["phone"];
    $title = "Новое обращение!";
    $body = "
    <h2>Новое письмо</h2>
    <b>Имя: </b>$par1<br>
    <b>Телефон: </b>$par2<br>
    ";
    $mail = new PHPMailer;
    try {
        $mail->isSMTP();   
        $mail->CharSet = "UTF-8";
        $mail->SMTPAuth   = true;
        $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );
        $mail->Host='ssl://smtp.mail.ru'; // SMTP сервера вашей почты
        $mail->Username='alemax000@mail.ru'; // Логин на почте
        $mail->Password   = 'sG5xagcHmkKcLEA19qiC'; // Пароль на почте
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('alemax000@mail.ru', 'alemax.ru'); // Адрес самой почты и имя отправителя
        $mail->addAddress('alemax000@mail.ru','alemax.ru');  
        $mail->isHTML(true);
        $mail->Subject = $title;
        $mail->Body = $body;    
        if ($mail->send()) {$result = "success";} 
        else {$result = "error";}
        } catch (Exception $e) {
        $result = "error";
        $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
        return $status;
        }
        return $result;

}
function send_calc(){
    $par1=$_POST["ceiling_type"];
    $par2=$_POST["square"];
    $par3=$_POST["corners"];
    $par4=$_POST["pipes"];
    $par5=$_POST["fixtures"];
    $par6=$_POST["chandeliers"];
    $par7=$_POST["name"];
    $par8=$_POST["phone"];
    $title = "Новая заявка!";
    $body = "
    <h2>Новое письмо</h2>
    <b>Тип потолка: </b>$par1<br>
    <b>Площадь: </b>$par2<br>
    <b>Углы: </b>$par3<br>
    <b>К-во труб: </b>$par4<br>
    <b>Люстры: </b>$par5<br>
    <b>Светильники: </b>$par6<br>
    <b>Имя: </b>$par7<br>
    <b>Телефон: </b>$par8<br>
    ";
    $mail = new PHPMailer;
    try {
        $mail->isSMTP();   
        $mail->CharSet = "UTF-8";
        $mail->SMTPAuth   = true;
        $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );
        $mail->Host='ssl://smtp.mail.ru'; // SMTP сервера вашей почты
        $mail->Username='alemax000@mail.ru'; // Логин на почте
        $mail->Password   = 'sG5xagcHmkKcLEA19qiC'; // Пароль на почте
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('alemax000@mail.ru', 'alemax.ru'); // Адрес самой почты и имя отправителя
        $mail->addAddress('alemax000@mail.ru','alemax.ru');  
        $mail->isHTML(true);
        $mail->Subject = $title;
        $mail->Body = $body;    
        if ($mail->send()) {$result = "success";} 
        else {$result = "error";}
        } catch (Exception $e) {
        $result = "error";
        $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
        return $status;
        }
        return $result;
}
if ($_POST['type']=='demand')
{ 
    $result=send_message();
    echo json_encode($result);    
}
if ($_POST['type']=='calcmess')
{ 
    $result=send_calc();
    echo json_encode($result);    
}             
?>