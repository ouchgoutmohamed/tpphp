<?php
// Définir une classe Personne
class Personne {
  // Propriétés nom, prénom et date de naissance
  private $nom;
  private $prenom;
  private $date_naissance;

  // Constructeur
  public function __construct($nom, $prenom, $date_naissance) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->date_naissance = $date_naissance;
  }

  // Méthode presenter() qui renvoie la chaîne de caractères "je m’appelle " suivie du nom et prénom
  public function presenter() {
    return "Je m'appelle " . $this->nom . " " . $this->prenom;
  }

  // Méthode age() qui renvoie l'âge
  public function age() {
    // Calculer l'âge en fonction de la date actuelle et de la date de naissance
    $date_actuelle = new DateTime();
    $date_naissance = new DateTime($this->date_naissance);
    $interval = $date_actuelle->diff($date_naissance);
    return $interval->y;
  }

  // Méthode decrirePersonne() pour l'affichage
  public function decrirePersonne() {
    return $this->presenter() . ", j'ai " . $this->age() . " ans";
  }
}

// Créer un programme de test qui instancie 2 personnes, puis affiche leurs descriptions
$personne1 = new Personne("Dupont", "Jean", "1990-01-01");
$personne2 = new Personne("Durand", "Marie", "1995-05-05");
echo $personne1->decrirePersonne() . "\n";
echo $personne2->decrirePersonne() . "\n";

// Ecrire une sous-classe des personnes dont on connaît le lieu de naissance
class PersonneAvecLieu extends Personne {
  // Propriété lieu de naissance
  private $lieu_naissance;

  // Constructeur
  public function __construct($nom, $prenom, $date_naissance, $lieu_naissance) {
    // Appeler le constructeur de la classe parente
    parent::__construct($nom, $prenom, $date_naissance);
    $this->lieu_naissance = $lieu_naissance;
  }

  // Redéfinir la méthode decrirePersonne() pour que le lieu de naissance s'affiche
  public function decrirePersonne() {
    // Appeler la méthode de la classe parente et ajouter le lieu de naissance
    return parent::decrirePersonne() . ", je suis né(e) à " . $this->lieu_naissance;
  }
}

// Ecrivez un petit programme qui utilise la nouvelle sous-classe
$personne3 = new PersonneAvecLieu("Martin", "Lucie", "2000-10-10", "Paris");
$personne4 = new PersonneAvecLieu("Leroy", "Pierre", "1998-08-08", "Lyon");
echo $personne3->decrirePersonne() . "\n";
echo $personne4->decrirePersonne() . "\n";

// Ecrire une sous-classe nommée étudiant (il s’agit d’une personne) avec des données supplémentaires
class Etudiant extends Personne {
  // Propriété identifiant
  private $identifiant;

  // Constructeur
  public function __construct($nom, $prenom, $date_naissance, $identifiant) {
    // Appeler le constructeur de la classe parente
    parent::__construct($nom, $prenom, $date_naissance);
    $this->identifiant = $identifiant;
  }

  // Getters et setters
  public function getIdentifiant() {
    return $this->identifiant;
  }

  public function setIdentifiant($identifiant) {
    $this->identifiant = $identifiant;
  }

  // Méthode boursier si l'âge < 23 et l'âge > 18
  public function boursier() {
    // Renvoyer vrai si l'âge est compris entre 18 et 23 ans, faux sinon
    $age = $this->age();
    return $age >= 18 && $age < 23;
  }

  // Méthode d'affichage
  public function decrireEtudiant() {
    // Afficher les informations de la personne et son identifiant
    return $this->decrirePersonne() . ", mon identifiant est " . $this->identifiant;
  }
}

// Tester la classe Etudiant
$etudiant1 = new Etudiant("Moreau", "Julie", "2002-02-02", "E1234");
$etudiant2 = new Etudiant("Petit", "Paul", "1996-06-06", "E5678");
echo $etudiant1->decrireEtudiant() . "\n";
echo $etudiant2->decrireEtudiant() . "\n";
echo $etudiant1->boursier() ? "Je suis boursier(e)\n" : "Je ne suis pas boursier(e)\n";
echo $etudiant2->boursier() ? "Je suis boursier(e)\n" : "Je ne suis pas boursier(e)\n";
?>
