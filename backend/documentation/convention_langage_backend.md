---

Auteur: Zerina Maxhuni  
Formation : Développeur Web & Web mobile  
Strasbourg, le 11 Juillet 2022

---

# **Convention de nommage pour le Back-End du Projet Cantine**

## **Nom des _dossiers_ :**

- en **majuscules** pour tous les dossiers principaux ;
- en **minuscules** pour tous les sous-dossiers. Avec eventuellement des ' _ ' (underscores) pour les noms composés. Nous essaierons toujours d'étre succinct dans le nommage des dossiers et donc de faire au plus court.

## **Nom des _fichiers_ :**

- en **minuscules** pour tous les fichiers. Le nom des doit être écrit en minuscules avec ' _ ' s'il est composé de plusieurs mots.

## **Nom des _variables_ camelCase :**

- variable **publique** : $maVariable, $monArray, $monEntier. Les noms doivent décrire les données dans la variable ;

- variable **privée|protégée** : $_maVariable. Les variables déclarées en privé ou protégé doivent commencer par un ' _ '. Les noms doivent décrire les données dans la variable.

## **Nom des _classes_ PascalCase :**

Exemple : MaClasse.class.php // Le nom de la classe doit indiquer l'objet créé (User, Article...).

## **Nom des _fonctions_ camelCase :**

- fonction **publique** : maFonction() // Le nom doit décrire le comportement de la fonction ou de la méthode ;
- fonction **privée|protégée** : _autreFonction() // Le nom doit décrire le comportement de la fonction ou de la méthode. Les méthodes qui sont déclarées en privé ou protégé doivent commencer par un ' _ '.

## **Nom des _constantes_ :**

NOM_DE_CONSTANTE (ALL_CAPS -> tout en majuscule). Il faut utiliser le signe ' _ ' pour séparer les mots dans des constantes.