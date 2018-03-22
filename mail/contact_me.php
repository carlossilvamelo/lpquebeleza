<?php
// Check for empty fields

if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    header("location:../index.html?mail=fail");
}

$name = strip_tags(htmlspecialchars($_POST['nome']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));

try{

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $from = $email_address;
    $to = "admin@quebeleza.online";
    $subject = "[QueBeleza] cadastro $name";
    $message = "Nome: $name\n\nEmail: $email_address";
    $headers = "Reply-To: $from";
    mail($to, $subject, $message, $headers);

}catch(Exception $e){
    header("location:../index.html?mail=fail");
}

header("location:../index.html?mail=ok");
?>
