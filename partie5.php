<?php

class Utilisateur
{
    private string $nom;
    private int $age;
    private string $motDePasse;

    public function __construct(string $nom, int $age, string $motDePasse)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->motDePasse = $motDePasse;
    }

    // Définir les données à sérialiser
    public function __serialize(): array
    {
        return [
            "nom" => $this->nom,
            "age" => $this->age
        ];
    }

    // Restaurer les données après désérialisation
    public function __unserialize(array $data): void
    {
        $this->nom = $data["nom"];
        $this->age = $data["age"];
        $this->motDePasse = "";
    }
}

// Création d'un utilisateur
$u1 = new Utilisateur("Amine", 20, "123456");

// Sérialisation
$texte = serialize($u1);

echo "Données sérialisées :<br>";
echo $texte . "<br><br>";

// Désérialisation
$u2 = unserialize($texte);

echo "Objet restauré :<br>";
var_dump($u2);

?>
