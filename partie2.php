<?php

// ==========================================
// Exercice 2.1 : Constructeur avec valeurs par défaut
// ==========================================

class Voiture
{
    public string $couleur;
    public int $vitesse;

    public function __construct(
        string $couleur = "Blanche",
        int $vitesse = 0
    ) {
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
    }

    public function afficher(): void
    {
        echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h" . PHP_EOL;
    }

    public function __destruct()
    {
        echo "Voiture {$this->couleur} détruite." . PHP_EOL;
    }
}

echo "=== Exercice 2.1 ===" . PHP_EOL;

$v1 = new Voiture();
$v2 = new Voiture("Rouge", 50);

$v1->afficher();
$v2->afficher();

// Test de la promotion de propriétés
class VoiturePromotion
{
    public function __construct(
        public string $couleur = "Blanche",
        public int $vitesse = 0
    ) {
    }

    public function afficher(): void
    {
        echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h" . PHP_EOL;
    }
}

echo PHP_EOL . "=== Promotion de propriétés ===" . PHP_EOL;

$v3 = new VoiturePromotion();
$v4 = new VoiturePromotion("Bleue", 80);

$v3->afficher();
$v4->afficher();


// ==========================================
// Exercice 2.2 : Un seul constructeur
// ==========================================

class Personne
{
    public string $nom;
    public string $prenom;

    public function __construct(string $nom = "", string $prenom = "")
    {
        echo "Création de " . __CLASS__ . PHP_EOL;

        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function afficher(): void
    {
        echo "Nom : {$this->nom} | Prénom : {$this->prenom}" . PHP_EOL;
    }

    public function __destruct()
    {
        echo "Détruire " . __CLASS__ . PHP_EOL;
    }
}

echo PHP_EOL . "=== Exercice 2.2 ===" . PHP_EOL;

$p1 = new Personne();
$p2 = new Personne("Hachimi", "Sara");

$p1->afficher();
$p2->afficher();


// ==========================================
// Exercice 2.3 : Destructeur
// ==========================================

echo PHP_EOL . "=== Exercice 2.3 ===" . PHP_EOL;

$maVoiture = new Voiture("Blanche");

unset($maVoiture);

echo "Fin du script." . PHP_EOL;