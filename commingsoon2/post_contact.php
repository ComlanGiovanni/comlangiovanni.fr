<?php
session_start();
$errors = [];


if(!array_key_exists('name',$_POST) || $_POST['name'] == '' || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['name'])){
    $errors['name'] = "Votre nom n'est pas valide!";
}

if(!array_key_exists('email',$_POST) || $_POST['email'] == '' || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Votre email n'est pas valide!";
}

if(!array_key_exists('message',$_POST) || $_POST['message'] == ''){
    $errors['meessage'] = "Votre message n'est pas valide!";
}

if(!empty($errors)){
    $_SESSION['errors']= $errors;
    $_SESSION['inputs']= $_POST;
    header('Location: index.php');
}else{
    $_SESSION['success'] = 1;
    $message=$_POST['message'];
    $headers= 'FROM: site@yahoo.fr';
    mail('giovanni.comlan@yahoo.fr','Formulaire de contact',$message, $headers);
    header('Location: index.php');
}

