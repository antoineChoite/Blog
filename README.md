# TonKai

Une plateforme en développement qui a pour but de me permettre de poster et diffuser mes différentes réalisations de vidéos.</br>
Stack technique: **Symfony 4, PHP, Twig, Doctrine, MySQL, Wamp, HTML, CSS.**

La plateforme sera déployée et disponible sur le web une fois que j'estimerais que le développement aura atteint un certain cap.

Vous pouvez la tester en local en suivant ces étapes : 

pré-requis(**Wamp Server** et **composer**)

*Clonez* le projet sur votre Desktop.
Allez à la racine du projet, ouvrez un terminal.
```
php bin/console doctrine:migrations:migrate
```
Répondez "yes" à la question. Cette commande vous permettra d'avoir la bonne structure de données 

Ouvrez votre navigateur allez sur **phpmyadmin** et *logguez* vous.
```
User: Root 
password: (vide donc cliquez directement sur "validez") 
```
Aller dans la base de données *Smash* et dans la table *Video*. Importer le fichier *Video.sql* se trouvant dans le dossier "table data".
Retournez sur votre terminal et tapez cette commande.

```
php bin/console server:run
```
Ouvrez votre navigateur et aller sur **localhost:8000/blog**.

Vous pouvez aussi voir le rendu du projet via le fichier *capture.gif*.
