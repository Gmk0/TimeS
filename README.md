
# Installation de Projet Laravel

Ce guide vous montrera comment installer et configurer le projet Laravel sur votre système. Assurez-vous de suivre ces étapes attentivement pour obtenir une installation réussie.

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre système :

- [PHP](https://www.php.net/) (version recommandée : 8.2 ou supérieure)(Activer  l'extension fileinfo et intl dans php INI
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) ou une autre base de données de votre choix
- [Git](https://git-scm.com/)

## Étapes d'installation

1. **Installer les dépendances PHP** :

    Accédez au répertoire du projet et exécutez la commande Composer pour installer les dépendances PHP nécessaires :

    ```cd
    cd projet-laravel

    composer install ou composer update
    ```

2. **Configurer le fichier d'environnement** :

    Dupliquez le fichier `.env.example` et renommez-le en `.env`. Modifiez ce fichier pour configurer les paramètres de votre base de données, comme suit :

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nom_de_votre_base_de_donnees
    DB_USERNAME=votre_nom_d_utilisateur
    DB_PASSWORD=votre_mot_de_passe
    ```

3. **Générer une clé d'application** :

    Exécutez la commande suivante pour générer une clé d'application Laravel :

    ```key
    php artisan key:generate
    ```

4. **Migrer la base de données** :

    Créez les tables de la base de données en exécutant les migrations :

    ``` migrate
    php artisan migrate
    ```

5. **Lancer le serveur de développement** :

    Vous pouvez maintenant lancer le serveur de développement Laravel :

    ``` serve
    php artisan serve
    ```

    Votre application Laravel est désormais accessible à l'adresse <http://localhost:8000>.
