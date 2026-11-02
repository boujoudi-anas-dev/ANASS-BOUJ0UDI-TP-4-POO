<?php

class Personne
{
    private string $nom = "";
    private string $prenom = "";
    private string $dateNaissance = "";
    private string $villeNaissance = "";
    private string $cin = "";

    public function __construct(
        string $nom,
        string $prenom,
        string $dateNaissance,
        string $villeNaissance,
        string $cin
    ) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->villeNaissance = $villeNaissance;
        $this->cin = $cin;
    }

    // __set : modifier une propriété
    public function __set(string $name, mixed $value): void
    {
        if ($name === "nom") {
            if (trim($value) === "" || strlen($value) < 2) {
                throw new InvalidArgumentException("Le nom doit contenir au moins 2 caractères.");
            }
        }

        if (property_exists($this, $name)) {
            $this->$name = $value;
        } else {
            throw new InvalidArgumentException("Propriété inexistante : " . $name);
        }
    }

    // __get : lire une propriété
    public function __get(string $name): mixed
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }

        throw new InvalidArgumentException("Propriété inexistante : " . $name);
    }

    // __isset : vérifier une propriété
    public function __isset(string $name): bool
    {
        return property_exists($this, $name) && isset($this->$name);
    }

    // __unset : supprimer une propriété
    public function __unset(string $name): void
    {
        if (property_exists($this, $name)) {
            unset($this->$name);
        }
    }
}

// ==========================================
// Tests
// ==========================================

$p = new Personne(
    "Hachimi",
    "Sara",
    "2000-05-14",
    "Marrakech",
    "EE123456"
);

// __set
$p->nom = "Amine";

// __get
echo "Nom : " . $p->nom . PHP_EOL;

// __isset
var_dump(isset($p->nom));

// __unset
unset($p->nom);

var_dump(isset($p->nom));

// Propriété inexistante
try {
    $p->telephone = "0600000000";
} catch (InvalidArgumentException $e) {
    echo $e->getMessage() . PHP_EOL;
}
