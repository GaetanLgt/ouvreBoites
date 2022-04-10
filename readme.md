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

  Dans le dossier de destination : 
  
  ````bash
  git clone https://github.com/GaetanLgt/ouvreBoites.git
  cd ouvreBoites/
  ````
#2-configuration base de donnees :
-----------------------

  Copier le contenu de *ouvreBoites.sql* dans une nouvelle base de données 
    
  Puis configuer la connexion :

    Les paramètres de la connexion à la base de donne sont stockées dans la variable DATABASE_URL qui existe dans la fichier .env.
    Exemple:
    DATABASE_URL=‘mysql://db_user:db_password@127.0.0.1:3306/db_name’
    db_user: root
    db_password: par défaut vide 
    db_name: nom de votre base par exemple 'ouvreboites'

DATABASE_URL=mysql://admin:Oracle$1986@127.0.0.1:3306/ouvreboites

#3- Exécution du projet
-----------------------

    symfony server:start
