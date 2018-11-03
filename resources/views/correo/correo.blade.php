<?php

use resources\src\PHPMailer\Exception;
use resources\src\PHPMailer\PHPMailer;


$enviar = new PHPMailer(true);
try {
    $enviar->isSMTP();
    $enviar->Host = 'smtp.gmail.com';
    $enviar->SMTPAuth = true;
    // $enviar->SMTPDebug = 4;
    $enviar->Username = 'javierelguetainacapino@gmail.com';
    $enviar->Password = 'javierr0cky';
    $enviar->Port = 465;
    $enviar->setFrom($from_mail, $from_name);
    $enviar->addAddress($mailto);
    $enviar->isHTML(true);
    $enviar->Subject = $subject;
    $enviar->Body = $message;
    $enviar->send();
    echo "<blockquote>";
    echo "Correo Enviado OK : " . $mailto;
    echo "</blockquote>";
    return true;
} catch (Exception $e) {
    echo $e->errorMessage();
    die();
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

?>