<?php

$notifications = [];



 // Réception du formulaire
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $hasError = !empty($_POST['login']) && !empty($_POST['password']);

 // Test de reception des données du formulaire
     if ($hasError) {

       $login = $_POST['login'];
       $password = $_POST['password'];

       if (($login === 'admin') and ($password === 'password')) {

         $_SESSION['user'] = True;
         header('Location: index.php');
         die;
       }else {
         array_push($notifications, ['type' => 'danger', 'message' => 'Identifiants incorrects']);
       }
     }else {
       array_push($notifications, ['type' => 'danger', 'message' => 'Veuillez remplir tous les champs']);
     }

 }

 //On envoie à la vue

 $_SESSION['notifications'] = $notifications;
 $smarty->assign('notifications', $notifications);
 ?>
