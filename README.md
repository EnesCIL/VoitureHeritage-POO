🚗 **Exercice POO en PHP – Héritage (Voiture & VoitureElec)**

🎯 **Objectif**

Cet exercice a pour but de comprendre le principe de l’héritage en programmation orientée objet (POO) en PHP, en créant une classe de base Voiture et une classe dérivée VoitureElec.

🏗️ **Contenu et explications**
✔️ **Classe Voiture (classe parente)**

La classe Voiture sert de modèle général pour représenter un véhicule.

- Propriétés protégées (protected)

  - _marque : la marque du véhicule

  -_modele : le modèle

Le mot-clé protected permet aux classes enfants d’accéder directement à ces propriétés.

- Constructeur
Initialise la marque et le modèle lors de la création d’un objet.

- Getters / Setters
Permettent de lire et de modifier les propriétés tout en respectant l’encapsulation.

- Méthode getInfos()
Retourne les informations principales de la voiture.

- Méthode magique __toString()
Permet d’afficher l’objet sous forme de texte (marque + modèle).

✔️ **Classe VoitureElec (classe enfant)**

La classe VoitureElec hérite de la classe Voiture, grâce au mot-clé extends.

- **Attribut privé supplémentaire**

_autonomie : autonomie du véhicule électrique

 - **Constructeur avec** parent::__construct()
Appelle le constructeur de la classe mère pour initialiser la marque et le modèle, puis ajoute l’autonomie.

- **Méthodes propres :**

getAutonomie() / setAutonomie() pour accéder ou modifier l’autonomie.

- **Redéfinition (override) :**

getInfos() → ajoute l’autonomie aux informations héritées.

__toString() → complète l’affichage avec l’autonomie.

- **Mot-clé final**
Empêche toute autre classe d’hériter de VoitureElec.

📚 **Concepts POO abordés**

- Héritage (extends)

- Constructeur parent (parent::__construct())

- Accès aux propriétés avec protected

- Surcharge / redéfinition de méthodes

- Méthode magique __toString()

- Notion de classe finale (non-héritée)
