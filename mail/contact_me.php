<?php
// Check for empty fields
/*
if (empty($_POST['nome']) ||
    empty($_POST['email']) ||
    empty($_POST['mensagem']) ||
    !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    //echo "No arguments Provided!";

    header("location:../index.html?mail=fail");
    return true;
}
*/

$name = strip_tags(htmlspecialchars($_POST['nome']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['opiniao']));
$checkReceberNovidades = strip_tags(htmlspecialchars($_POST['checkReceberNovidades']));



if($checkReceberNovidades =="on")
    $receberNovidades = "SIM";
        else
            $receberNovidades = "NÃO";




try{
    /*
    // Create the email and send the message
    $to = "carlossilvameloo@gmail.com"; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "[i9prev] Contato:  $name";
    $email_body = "Nome: $name\n\nEmail: $email_address\n\nMensagem:\n$message";
// This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);
    */
   // ini_set('display_errors', 1);
  //  error_reporting(E_ALL);
 /*   $from = $email_address;
    $to = "admin@quebeleza.online";
    $subject = "[QueBeleza] cadastro $name";
    $message = "Nome: $name\n\nEmail: $email_address\n\nMensagem:\n$message\n Receber novidades: $receberNovidades";
    $headers = "Reply-To: $from";
    mail($to, $subject, $message, $headers);



    $to = "admin@quebeleza.online"; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "[i9prev] Contato:  $name";
    $email_body = "Nome: $name\n\nEmail: $email_address\n\nMensagem:\n$message";
// This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);

  //  ini_set('display_errors', 1);
   // error_reporting(E_ALL);
    $from = "admin@quebeleza.online";
    $to = $email_address;
    $subject = "[QueBeleza] Olá $name, seu cadastro foi realizado com sucesso!";
    $message = "Agradecemos o seu cadastro, agora você ficará por dentro de todas as novidades sobre o desenvolvimento da plataforma que foi pensada ara você!";
    $headers = "Reply-To: $from";
    mail($to, $subject, $message, $headers);

*/
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $from = $email_address;
    $to = "admin@quebeleza.online";
    $subject = "[QueBeleza] cadastro $name";
    $message = "Tipo: não-profissional \n\nNome: $name\n\nEmail: $email_address\n\nMensagem:\n$message\n Receber novidades: $receberNovidades";
    $headers = "Reply-To: $from";
    mail($to, $subject, $message, $headers);

}catch(Exception $e){
    header("location:../index.html?mail=fail");
}



header("location:../index.html?mail=ok");
?>
