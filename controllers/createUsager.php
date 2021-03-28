<?php

$notifications = [];

// Récupération des catégories pour la vue
$db = Connexion::get();
$query = $db->query('SELECT * FROM categorie');
$categories = $query->fetchAll();

// Réception du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $hasError = !empty($_POST['numCarte']) && !empty($_POST['nom']) && !empty($_POST['numCateg']) && !empty($_POST['dateCarte']) && !empty($_POST['mtCaution']);

// Test de reception des données du formulaire
    if ($hasError) {

      try {

        $nom = $_POST['nom'];
        $numCarte = $_POST['numCarte'];
        $numCateg = $_POST['numCateg'];
        $dateCarte = $_POST['dateCarte'];
        $montantCaution = $_POST['mtCaution'];

        // Vérification de l'existence du numéro de carte
        if (!Usager::cartNumberExists($numCarte)) {
          // Création de l'utilisateur
          Usager::creer($nom, $numCarte, $numCateg, $dateCarte,$montantCaution);
          array_push($notifications, ['type' => 'success', 'message' => 'Utilisateur ajouté avec succès']);
        }else {
          array_push($notifications, ['type' => 'danger', 'message' => 'Ce numéro de carte existe déjà']);
        }
      } catch (Exception $error) {
        array_push($notifications, ['type' => 'danger', 'message' => $error->getMessage()]);
      }
    }else {
      array_push($notifications, ['type' => 'danger', 'message' => 'Veuillez remplir tous les champs']);
    }

}

//On envoie à la vue
$smarty->assign('categories', $categories);
$_SESSION['notifications'] = $notifications;
$smarty->assign('notifications', $notifications);

?>
