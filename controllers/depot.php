<?php

$notifications = [];

// On récupère les usagers
 $utilisateurs = Usager::getUsagers();


 // Réception du formulaire
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $hasError = !empty($_POST['numCarte']) && !empty($_POST['montant']);

 // Test de reception des données du formulaire
     if ($hasError) {

       try {

         $numCarte = $_POST['numCarte'];
         $dateDepot =  date('Y-m-d');
         $montant = $_POST['montant'];


           Depot::faireDepot($numCarte, $dateDepot,$montant);
           array_push($notifications, ['type' => 'success', 'message' => 'Dépot ajouté avec succès']);

       } catch (Exception $error) {
         array_push($notifications, ['type' => 'danger', 'message' => $error->getMessage()]);
       }
     }else {
       array_push($notifications, ['type' => 'danger', 'message' => 'Veuillez remplir tous les champs']);
     }

 }

 //On envoie à la vue
 $_SESSION['notifications'] = $notifications;
 $smarty->assign('notifications', $notifications);
  $smarty->assign('utilisateurs', $utilisateurs);
 ?>
