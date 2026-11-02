
<?php

class Compte
{
    private float $montant;
    private float $interet;

    public function __construct(float $montant, float $interet)
    {
        $this->montant = $montant;
        $this->interet = $interet;
    }

    public function get_montant(): float
    {
        return $this->montant;
    }

    public function un_an(): void
    {
        $this->montant = $this->montant * (1 + $this->interet / 100);
    }
}

// Création des deux comptes
$compte1 = new Compte(400, 10);
$compte2 = new Compte(2500, 5);

// Calcul après 10 ans
for ($i = 1; $i <= 10; $i++) {
    $compte1->un_an();
    $compte2->un_an();
}

// Affichage des résultats
echo "Compte 1 : "
    . number_format($compte1->get_montant(), 2, ',', ' ')
    . " DH<br>";

echo "Compte 2 : "
    . number_format($compte2->get_montant(), 2, ',', ' ')
    . " DH<br>";

?>
