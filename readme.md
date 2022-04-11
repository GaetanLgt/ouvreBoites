##ouvreBoites

Wordpress Demo Application
========================

  Application Wordpress + Twig ( via TIMBER ) 

Requirements
------------

  * Apache/2.4.41 (Ubuntu)
  * Version du client de base de données : libmysql - mysqlnd 7.4.3
  * Extension PHP : mysqli curl mbstring
  * Version de PHP : 7.4.3
  * Composer : 2.2.7
  * phpMyAdmin : 4.9.5deb2

Installation
============
# les étapes à suivre

#1- Création du projet:
-----------------------

  Dans le dossier de destination (racine de serveur): 
  
  ````bash
  git clone https://github.com/GaetanLgt/ouvreBoites.git
  cd ouvreBoites/
  ````
#2-configuration base de donnees :
-----------------------

  Copier le contenu de *ouvreBoites.sql* dans une nouvelle base de données 
    
  Puis configuer la connexion :

  Les paramètres de la connexion à la base de donne sont stockées dans la variable DATABASE_URL qui existe dans la fichier wp-config.php.
  
   Exemple:
   
    // ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
    // Nom de la base de données de WordPress.
    define('DB_NAME', 'ouvreboites');

    // Utilisateur de la base de données MySQL.
    define('DB_USER', 'root');

    // Mot de passe de la base de données MySQL.
    define('DB_PASSWORD', '');

    // Adresse de l’hébergement MySQL.
    define('DB_HOST', 'localhost');

    // Jeu de caractères à utiliser par la base de données lors de la création des tables.
    define('DB_CHARSET', 'utf8mb4');
    
    
    db_user: root
    db_password: par défaut vide 
    db_name: nom de votre base par exemple 'ouvreboites'
 
  exectuer dans la requête sql en mofifiant avant ADRESSE_D_HERBERGEMENT
    
    UPDATE `wp_options` SET `option_value` = 'ADRESSE_D_HERBERGEMENT' WHERE `wp_options`.`option_id` = `2`,`1`;
    
   *ADRESSE_D_HERBERGEMENT = http://localhost/ouvreBoites/
   

#3- Exécution du projet
-----------------------

    http://localhost/ouvreBoites/
