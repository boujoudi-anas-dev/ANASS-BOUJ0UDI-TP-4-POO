<?php

// Classe parent
class Animal
{
    public function manger(): void
    {
        echo "L'animal mange.<br>";
    }
}

// Classe enfant Chien
class Chien extends Animal
{
    public function aboyer(): void
    {
        echo "Le chien aboie.<br>";
    }
}

// Classe enfant Chat
class Chat extends Animal
{
    public function miauler(): void
    {
        echo "Le chat miaule.<br>";
    }
}

// Création des objets
$chien = new Chien();
$chat = new Chat();

$chien->manger();
$chien->aboyer();

$chat->manger();
$chat->miauler();

?>

<?php

class Personne
{
    protected string $nom;
    private string $prenom;
    private string $dateNaissance;

    public function __construct(
        string $nom,
        string $prenom,
        string $dateNaissance
    ) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    protected function getAge(): int
    {
        $date = new DateTime($this->dateNaissance);
        $aujourdhui = new DateTime();

        return $date->diff($aujourdhui)->y;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }
}

class Etudiant extends Personne
{
    private readonly string $cne;

    public function __construct(
        string $nom,
        string $prenom,
        string $dateNaissance,
        string $cne
    ) {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->cne = $cne;
    }

    public function getCne(): string
    {
        return $this->cne;
    }

    public function __toString(): string
    {
        return $this->nom . " "
            . $this->getPrenom()
            . " - "
            . $this->getAge()
            . " ans - CNE : "
            . $this->cne;
    }
}

// Création de cinq étudiants
$etudiants = [
    new Etudiant("Hachimi", "Sara", "2005-04-12", "CNE001"),
    new Etudiant("Amine", "Yassine", "2004-08-20", "CNE002"),
    new Etudiant("Alaoui", "Salma", "2005-01-15", "CNE003"),
    new Etudiant("Karimi", "Omar", "2003-06-10", "CNE004"),
    new Etudiant("Bennani", "Nora", "2004-11-25", "CNE005")
];

// Affichage des étudiants
foreach ($etudiants as $etudiant) {
    echo $etudiant . "<br>";
}

?>

