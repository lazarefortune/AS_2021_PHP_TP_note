<?php

/**
 * Usager
 */
class Usager
{

  protected $nom;
  protected $num_carte;
  protected $lib_categ;
  protected $date_carte;
  protected $mt_caution;

  /**
   * User constructor.
   * @param string $nom
   * @param string $num_categ
   * @param string $lib_categ
   * @param string $date_carte
   * @param float $mt_caution
   */
  public function __construct(string $nom, string $num_carte, string $lib_categ,string $date_carte, float $mt_caution)
  {
    $this->nom = $nom;
    $this->num_carte = $num_carte;
    $this->lib_categ = $lib_categ;
    $this->date_carte = $date_carte;
    $this->mt_caution = $mt_caution;
  }

  /**
   * @return array
   */
  public static function getUsagers(): array
  {
    $db = Connexion::get();
    $usagers = $db->query('SELECT * FROM usager');
    return $usagers->fetchAll();
  }

  /**
   * @return void
   */
  public static function creer($nom, $numCarte, $numCateg, $dateCarte, $mtCaution): void
  {
    $db = Connexion::get();
    $inputParameters = [
      'numCarte' => $numCarte,
      'nom' => $nom,
      'numCateg' => $numCateg,
      'dateCarte' => $dateCarte,
      'mtCaution' => $mtCaution,
      'solde' => 0,
    ];


    try {

      $sql = 'INSERT INTO usager (num_carte, nom, num_categ, mt_caution, date_carte, solde)
      VALUES (:numCarte, :nom, :numCateg, :mtCaution, :dateCarte, :solde)';
      $query = $db->prepare($sql);
      $query->execute($inputParameters);

    } catch (Exception $e) {

      throw new Exception('Erreur : '.$e->getMessage());
    }

  }


  /**
   * Check if the cart number already exist
   * @return bool
   */
  public static function cartNumberExists(string $numCarte): bool
  {
    $db = Connexion::get();
    $sql = "SELECT * FROM usager WHERE num_carte=:numCarte";

    $query = $db->prepare($sql);
    $query->execute(['numCarte' => $numCarte]);
    return !!$query->fetch();
  }


  /**
   * @return Usager
   */
  public static function get($num_carte): Usager
  {
    $db = Connexion::get();
    $query = $db->prepare('SELECT nom, lib_categ, date_carte, solde AS mt_caution
      FROM usager, categorie WHERE usager.num_categ = categorie.num_categ AND num_carte=:num_carte');

    $query->execute(['num_carte' => $num_carte]);
    if ($usager = $query->fetch()) {
      return new Usager(
        $usager['nom'],
        $num_carte,
        $usager['lib_categ'],
        $usager['date_carte'],
        $usager['mt_caution'],
      );
    }
    throw new Exception("Cet usager n'existe pas.");
  }

  /**
   * @return string
   */
  public function getNom(): string
  {
    return $this->nom;
  }

  /**
   * @return string
   */
  public function getNumCarte(): string
  {
    return $this->num_carte;
  }

  /**
   * @return string
   */
  public function getCategorie(): string
  {
    return $this->lib_categ;
  }



}
