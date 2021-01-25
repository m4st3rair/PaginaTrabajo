<?php
// send the form to the specify email

// CONFIG VARS
$subject = " | WEBSITE";
$to = "cristianyosefk@gmail.com";//aqui va el correo
$from = $_POST['email'];

if(isset($_POST['dejarenblanco'])){
    $dejarenblanco = $_POST['dejarenblanco'];
}
if(isset($_POST['nocambiar'])){
    $nocambiar = $_POST['nocambiar'];
}


if ($dejarenblanco == '' && $nocambiar == 'http://') { 
    //data
    $msg = "NOMBRE: "  .$_POST['name']    ."\n";
    $msg .= "EMAIL: "  .$_POST['email']    ."\n";
    $msg .= "ASUNTO: "  .$_POST['web']    ."\n";
    $msg .= "COMENTARIOS: "  .$_POST['comments']    ."\n";
    
    //Headers
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: <".$from. ">" ;
    
    
    //send
    mail($to, $subject, $msg, $headers);
    
}

header('Location: index.html');

?>