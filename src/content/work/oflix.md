---
title: O'flix
publishDate: 2023-03-25 00:00:00
img: /assets/oflix.png
img_alt: Interface utilisateur de l'application O'flix
description: |
  Site de Répertoriage de Films et Séries.
tags:
  - Dev
  - Symfony
  - API
  - Twig
---

## Technologies utilisées : Symfony

  >  <a href="https://github.com/PalminiStephane/symfony-oflix">Voir le code de O'flix</a>

O'flix est un projet visant à prendre en main le framework Symfony, en créant un site web répertoriant des films et des séries. Inspiré par les plateformes comme Allociné et Netflix, ce projet met l'accent sur l'intégration et la dynamisation de templates HTML/CSS.

### Fonctionnalités Clés :

* Page d'accueil : Présente une sélection de films et de séries, permettant aux utilisateurs de naviguer facilement vers les détails de chaque titre.

* Page du film ou de la série : Affiche des informations détaillées sur un film ou une série spécifique, y compris le synopsis, le casting, et les avis des utilisateurs.

* Page des favoris utilisateur : Permet aux utilisateurs de gérer une liste de films et séries favoris, facilitant un accès rapide à leurs titres préférés.

* Liste des films ou des résultats de recherche : Affiche les films et séries disponibles en fonction des critères de recherche ou de navigation de l'utilisateur.

* Backoffice :
        Un backoffice accessible uniquement aux administrateurs et managers.
        Les administrateurs ont la possibilité de gérer toutes les fonctionnalités du site.
        Les managers disposent de permissions limitées, restreignant certaines actions dans le backoffice.

* Critiques :
        Les utilisateurs authentifiés peuvent ajouter des commentaires  sur les films et séries.
        Les utilisateurs anonymes ne voient pas les champs de commentaire.

### Structure du Site :

1. Accueil : Présentation générale du site avec une sélection de films et séries. Permet une navigation facile vers les pages de détail des films et séries.

2. Gestion des Films et Séries : Affichage des détails spécifiques de chaque film ou série, incluant le synopsis, le casting, et les avis des utilisateurs.

3. Favoris : Page permettant aux utilisateurs de gérer et de consulter leur liste de films et séries favoris.

4. Recherche : Fonctionnalité de recherche permettant de trouver des films et des séries en fonction de divers critères, avec affichage des résultats correspondants.

### Etapes de Rhttps://oflix.com/éalisation :

1. Installation de Symfony :
        Utilisation de composer create-project symfony/skeleton oflix pour installer le projet Symfony Skeleton.
        Utilisation du serveur PHP intégré ou Apache pour lancer l'application Symfony.

2. Configuration des Routes :
        Définition des routes nécessaires pour les pages d'accueil, de détail des films/séries, des favoris, et de recherche.
        Utilisation des annotations pour la définition des routes.

3. Intégration HTML/CSS :
        Intégration des templates HTML/CSS fournis dans les templates Symfony.
        Dynamisation des templates avec Twig pour afficher les données de manière dynamique.

4. Dynamisation des Données :
        Récupération et affichage des données des films et séries à partir d'un modèle de données statique.
        Utilisation de boucles et de conditions Twig pour afficher dynamiquement les informations.

5. Fonctionnalité Favoris :
        Implémentation de la gestion des favoris utilisateur en stockant les sélections en session côté serveur.

6. API JSON :
        Création d'un accès API/JSON pour renvoyer les données des films/séries vers une application front.

7. Backoffice :
        Création d'un backoffice sécurisé pour les administrateurs et les managers, avec des permissions spécifiques.

8. Critiques :
        Ajout de fonctionnalités permettant aux utilisateurs authentifiés de commenter les films et séries, avec des restrictions pour les utilisateurs anonymes.

#### Réalisation et Expertise

Le projet O'flix illustre ma capacité à développer des sites web interactifs et dynamiques en utilisant Symfony. En mettant l'accent sur l'intégration de templates, la gestion des données, l'implémentation de fonctionnalités avancées comme la gestion des favoris, l'accès API, et un backoffice sécurisé, ce projet démontre une compréhension approfondie des meilleures pratiques de développement avec Symfony.
