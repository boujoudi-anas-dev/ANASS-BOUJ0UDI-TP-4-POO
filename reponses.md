Question 0.3

Réponse :

Non, chaque objet possède ses propres propriétés. La modification de la marque de $v1 n'affecte pas celle de $v2.

Question 1.1

Réponse :


PHP génère une erreur d'accès, car l'attribut cin est déclaré private et n'est accessible que depuis la classe Personne.

Question 1.2

Réponse :

Il est dangereux de déclarer cin en public, car n'importe quelle partie du programme peut lire ou modifier sa valeur directement. Cela peut compromettre la sécurité et l'intégrité des données.

Question 1.3

Réponse :

Il est utile de garder getAge() en private pour empêcher son utilisation directe depuis l'extérieur de la classe. Cela permet de contrôler l'accès à cette méthode et de protéger son fonctionnement interne.

Question 1.4

Réponse :

Non, l'attribut cin reste inaccessible depuis l'extérieur de la classe. Cependant, avec protected, il devient accessible dans la classe Personne et dans ses classes filles.

Question 2.1.a

Réponse :
- new Voiture("Noire") : fonctionne. La couleur est "Noire" et la vitesse prend sa valeur par défaut 0.
- new Voiture(120) : en mode PHP standard (sans strict_types), l'entier 120 peut être converti en chaîne "120". La vitesse reste 0.

Question 2.1.b

Réponse :

La promotion de propriétés permet de déclarer et d'initialiser les attributs directement dans les paramètres du constructeur. Elle réduit le code et évite les répétitions.

Question 2.2.a

Réponse :

PHP ne permet pas de déclarer deux méthodes __construct() dans une même classe. La déclaration provoque une erreur, car une classe ne peut avoir qu'un seul constructeur.

Question 2.2.b

Réponse :

On peut utiliser un seul constructeur avec des paramètres ayant des valeurs par défaut. Cela permet de créer des objets avec différentes valeurs sans déclarer plusieurs constructeurs.

Question 2.2.c 

Réponse :

On peut utiliser des méthodes de création statiques (méthodes factory). Chaque méthode permet de créer un objet avec une configuration précise.