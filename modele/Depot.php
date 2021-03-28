<?php

/**
 * Class DEPOT
 */
class Depot
{

  public static function faireDepot(String $numCarte, String $dateDepot, float $montant): void{

    $db = Connexion::get();
    $inputParameters = [
      'numCarte' => $numCarte,
      'dateDepot' => $dateDepot,
      'montant' => $montant,
    ];


    try {

      $sql = 'INSERT INTO depot (num_carte, date_depot, montant)
      VALUES (:numCarte, :dateDepot, :montant)';
      $query = $db->prepare($sql);
      $query->execute($inputParameters);

    } catch (Exception $e) {

      throw new Exception('Erreur : '.$e->getMessage());
    }
  }
}









?>
