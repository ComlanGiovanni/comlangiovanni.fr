<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require 'recaptacha.php';
session_start();
$errors = [];


if(!array_key_exists('name',$_POST) || $_POST['name'] == ''){
    $errors['name'] = "Votre nom n'est pas valide!";
    /* || !preg_match('/^[a-zA-Z0-9_* ][^&nbsp;]+$/', $_POST['name'])*/
}

if(!array_key_exists('email',$_POST) || $_POST['email'] == '' || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Votre email n'est pas valide!";
}

if(!array_key_exists('message',$_POST) || $_POST['message'] == ''){
    $errors['meessage'] = "Votre message n'est pas valide!";
}

if(!empty($_POST)) {
    $captcha = new Recaptcha('6LeF3hsTAAAAAN7kjKBKmBRTNVKkKzLZ5lnTZC8f');

    if ($captcha->checkCode($_POST['g-recaptcha-response']) === false) {
        $errors['captacha'] = "CAPTACHA NON VALIDE";
    }
}

if(!empty($errors)){
    $_SESSION['errors']= $errors;
    $_SESSION['inputs']= $_POST;
    header('Location: index.php');
}else{
    $_SESSION['success'] = 1;
    /*
    $mailtitre=$_POST['name'].$_POST['email'];
    $message=$_POST['message'];
    $headers= 'FROM: site@comlangiovanni.fr';
    mail('giovanni.comlan@yahoo.fr','Formulaire de contact',$message, $headers);
    */
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'FROM:' . htmlspecialchars($_POST['email']);
    $to = 'giovanni.comlan@yahoo.fr';
    $subject = 'Formulaire du site ->www.comlangiovanni.fr : Nom: ' . htmlspecialchars($_POST['name']) .' - Email: ' . htmlspecialchars($_POST['email']);
    $message_content = '
  <table>
  <tr>
  <td><b>Emetteur du message:</b></td>
  </tr>
  <tr>
  <td>'. $subject . '</td>
  </tr>
  <tr>
  <td><b>Contenu du message:</b></td>
  </tr>
  <tr>
  <td>'. htmlspecialchars($_POST['message']) .'</td>
  </tr>
  </table>
  ';
    mail($to, $subject, $message_content, $headers);
    header('Location: index.php');
}
