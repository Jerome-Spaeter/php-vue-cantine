---

Auteurs: Jérôme Spaeter / ID-Formation  
Formation : Developpeur Web & Web mobile  
Lieu: Strasbourg
Date : 11/07/2022

---

# ***Respectez mon autorité !***

***Seuls les lead developpeur pourront valider et ainsi merger sur la branch dev !***

***Chaque developpeur devra respecter les consignes ci-dessous !***


# Branches

>```<type>/<name>```

## type

Le type d’une branche doit être clair afin de comprendre le but de celle-ci. Voici une liste non exhaustive des types de branches :

- feature: Ajout d’une nouvelle fonctionnalité;
- bugfix: Correction d’un bug;
- hotfix: Correction d’un bug critique;
- chore: Nettoyage du code;
- experiment: Expérimentation de fonctionnalités;

## name

Le nom de la branche décrit succinctement le but de celle-ci. Certaines règles doivent être respectées :

- Le nom doit faire moins de 50 caractères;
- Le nom doit respecter la convention kebab-case (les mots doivent être en minuscule et liés par des tirets “-“);

## exemple

Voyons quelques exemples de noms de branches pour mieux comprendre :

> ```feature/add-users-controller```

> ```hotfix/profile-page-error```

> ```experiment/try-api-key```

> ```chore/remove-deprecated-method```

le principe est exactement le même si vous écrivez vos messages de commit en français

# Commit

>```<type>/<subject>```

## type

Le type du commit décrit l’origine du changement. Il peut prendre différentes valeurs :

- feat: Ajout d’une nouvelle fonctionnalité;
- fix: Correction d’un bug;
- build: Changement lié au système de build ou qui concerne les dépendances (npm, grunt, gulp, webpack, etc.).
- ci: Changement concernant le système d’intégration et de déploiement continu (Jenkins, Travis, Ansible, gitlabCI, etc.)
- docs: Ajout ou modification de documentation (README, JSdoc, etc.);
- perf: Amélioration des performances;
- refactor: Modification n’ajoutant pas de fonctionnalités ni de correction de bug (renommage d’une variable, suppression de code redondant, simplification du code, etc.);
- style: Changement lié au style du code (indentation, point virgule, etc.);
- test: Ajout ou modification de tests;
- revert: Annulation d’un précédent commit;
- chore: Toute autre modification (mise à jour de version par exemple);

## subject

Le sujet décrit succinctement la modification. Certaines règles doivent être respectées :

- indique le contexte, la description de la modification du commit;
- Le sujet doit faire moins de 50 caractères;
- Les verbes doivent être à l’impératif (add, update, change, remove, etc.);
- La première lettre ne doit pas être en majuscule;
- Le sujet ne doit pas se terminer par un point;

## exemple

Voyons quelques exemples de noms de branches pour mieux comprendre :

> ```feat/add post's controller```

> ```docs/add swagger documentation```

le principe est exactement le même si vous écrivez vos messages de commit en français;

# Rappel des bases :

- Pour récupérer le repositorie sur github :
>git clone https://github.com/Jerome-Spaeter/php-vue-cantine
>
- Toujours mettre à jour :
>npm install
>
- Toujours aller sur la branche dev avant de faire quoi que se soit :
>git checkout dev
>
- Puis toujours se mettre à jour :
>git pull
>
- Toujours se créer une nouvelle branche quand boss sur une nouvelle tâche qui sera l'enfant de la branch dev  :
>git checkout dev
>
>git checkout -b nomdelabranche(type/name) dev
>
>git checkout nomdelabranche(type/name)
>
- Aller dans la branche qu'on c'est crée :
>git checkout nomdelabranche(type/name)
>
- Ajouter notre travail sur la branche :
>git add .
>
>git commit -m "type/subject"
>
>git push
>
- ***UNIQUEMENT lEAD DEVELOPPEUR*** Fusionner une branche avec la branche dev
- ***UNIQUEMENT lEAD DEVELOPPEUR*** Supprimer une branche
- ***UNIQUEMENT lEAD DEVELOPPEUR*** Gérer les conflits
>Sur github directement (https://github.com/Jerome-Spaeter/php-vue-cantine), faire un merge, supprimer la branche et telecharger les conflits pour les gérer sur vsCode
