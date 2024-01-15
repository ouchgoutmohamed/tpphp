<?php
class Personne {
    private $nom;
    private $prenom;
    private $date_naissance;
  
    public function __construct($nom, $prenom, $date_naissance) {
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->date_naissance = $date_naissance;
    }
  
    public function __destruct() {
      echo "La personne $this->nom $this->prenom a été détruite.<br>";
    }
  
    public function presenter() {
      return "Je m'appelle $this->nom $this->prenom.";
    }
  
    public function age() {
      $date_actuelle = new DateTime();
      $date_naissance = new DateTime($this->date_naissance);
      $difference = date_diff($date_actuelle, $date_naissance);
      return $difference->y;
    }
  
    public function decrirePersonne() {
      echo $this->presenter() . "<br>";
      echo "J'ai " . $this->age() . " ans.<br>";
    }
  }
  
  class PersonneAvecLieu extends Personne {
    private $lieu_naissance;
  
    public function __construct($nom, $prenom, $date_naissance, $lieu_naissance) {
      parent::__construct($nom, $prenom, $date_naissance);
      $this->lieu_naissance = $lieu_naissance;
    }
  
    public function decrirePersonne() {
      parent::decrirePersonne();
      echo "Je suis né(e) à $this->lieu_naissance.<br>";
    }
  }
  
  class Etudiant extends Personne {
    private $identifiant;
  
    public function __construct($nom, $prenom, $date_naissance, $identifiant) {
      parent::__construct($nom, $prenom, $date_naissance);
      $this->identifiant = $identifiant;
    }
  
    public function getNom() {
      return $this->nom;
    }
  
    public function setNom($nom) {
      $this->nom = $nom;
    }
  
    public function getPrenom() {
    
    }
  
    public function setPrenom($prenom) {
      $this->prenom = $prenom;
    }
  
    public function getDateNaissance() {
      return $this->date_naissance;
    }
  
    public function setDateNaissance($date_naissance) {
      $this->date_naissance = $date_naissance;
    }
  
    public function getIdentifiant() {
      return $this->identifiant;
    }
  
    public function setIdentifiant($identifiant) {
      $this->identifiant = $identifiant;
    }
  
    public function boursier() {
      $age = $this->age();
      return ($age >= 18 && $age <= 23);
    }
  
    public function afficher() {
      echo "Nom : " . $this->getNom() . "<br>";
      echo "Prénom : " . $this->getPrenom() . "<br>";
      echo "Date de naissance : " . $this->getDateNaissance() . "<br>";
      echo "Identifiant : " . $this->getIdentifiant() . "<br>";
      echo "Boursier : " . ($this->boursier() ? "oui" : "non") . "<br>";
    }
  }
  
  $personne1 = new Personne("simo", "simo", "1990-01-01");
  $personne2 = new Personne("mohamed", "mo", "1995-05-05");
  $personne1->decrirePersonne();
  $personne2->decrirePersonne();
  
  $personne3 = new PersonneAvecLieu("mohssinne", " mki", "2000-10-10", "agadir");
  $personne3->decrirePersonne();
  
  $etudiant1 = new Etudiant("ali", "alii", "2002-02-02", "123456");
  $etudiant1->afficher();
  
?>