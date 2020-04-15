# Titre du projet

Projet de création d’une application web avec le framework PHP Laravel

## Commencer

Ces instructions vous fourniront une copie du projet opérationnel sur votre ordinateur local à des fins de développement et de test. 

### Conditions préalables

De quoi avez-vous besoin pour avoir accès au blog ?

```
Vous devez avoir une version >= PHP 7.2.10  (https://www.php.net/downloads.php)
Pour verifier votre version de PHP, tapez la commande : 
```	
```
php -v
```
```
Vous devez avoir composer installé sur votre machine (https://getcomposer.org/download/)
```
```
Vous devez avoir Git installé sur votre machine (https://gist.github.com/derhuerst/1b15ff4652a867391f03)
```

### Installation & configuration
 
 Afin de pouvoir ouvrir notre blog sur votre serveur local (http://localhost:8000)

1-Trouvez un emplacement sur votre ordinateur où vous souhaitez stocker le projet.
Ensuite, exécutez la commande suivante, qui tirera le projet de github et en créera une copie sur votre ordinateur local dans le répertoire choisi:
```
git clone https://https://github.com/ayoubboufedji/blog_Laravel
```

2- Une fois le projet est copié, ouvrez le, ouvrez le Terminal ou l'Invité de commande (selon votre systéme d'exploitation) et placez-vous dans le repertoire choisi.

3- Installer composer dans le projet en tapant la commande suivante dans le Terminal/Invité de commande ouvert

```
composer install
```
4- Copier le fichier .env.example dans .env en tappant la commande suivante:
```
cp .env.example .env
```

5- Dans le Terminal/Invité de commande lancez la commande suivante 
```
php artisan key:generate
```
6- Créez un fichier database.sqlite dans le répertoire database du projet récupéré

7- Ouvrez le fichier .env et faites les modifications suivantes.
```
DB_CONNECTION=sqlite
#DB_HOST=127.0.0.1
#DB_PORT=3306
DB_DATABASE=Votre chemin\PojetLaravel-master\database\database.sqlite
DB_USERNAME=root
```
8- Lancez les migrations en tapant la commande suivante 
```
php artisan migrate
```
9- Remplissez les tables de la base de données par des données aléatoires en tapant la commande suivante
```
php artisan migrate:fresh --seed -v
```
10- Lancez le serveur pour accéder au projet sur (http://localhost:8000)en tappant la commande suivante
```
php artisan serve
```
11- Vous pouvez accéder à la base de données à l’url suivant:

[Base de données](http://127.0.0.1:8000/phpliteadmin.php)

## Lancer les tests / Les fonctionnalites:

## Le menu Home :

Constitue la page d'accueil du blog avec:
- Une barre de navigation contenant l'intitulé de notre blog "ReadTOLead" ainsi que les rubriques suivantes : Home, Articles, Contact,Team, Login. Cette barre est un menu déroulant réaisé avec JavaScript.
- Un message d'accueil 
- Les trois premiers Articles présents dans notre base de données accessibles qu'après authentification.
- Le bas de page contient  les trois icones (facebook, twitter, et instagram) permettant de se rendre sur les pages correspondantes ainsi que les coordonnées de l'administrateur du blog.

# L'authentification : 

Afin que vous puissiez lire, modifier ou poster des articles sur notre blog, vous devez être membre dans notre blog.
En cliquant sur Login, vous pouvez vous inscrire en remplissant notre formulaire d'inscription. Dans ce cas, la table users sera mis à jours dans la base de données.

Une fois isncrit, vous n'avez qu'à saisir vos identifiants pour vous connecter. Le bouton Login sera remplacé par "Hello + Prénom+Nom"
Si vous souhaitez vous déconnecter, cliquez sur la flèche à droite de votre nom ensuite sur Logout.

Si vous oubliez votre mot de passe, cliquez sur "forgot your password?", saisissez ensuite votre adresse mail, un mail vous sera envoyé dans l'immédiat contenant un lien vous permettant de réinitialiser votre mot de passe.

Si vous souhaitez vous désinscrire, vous pouvez nous envoyer un message en replissant le formualaire de contact.

### Le menu Articles : 

En cliquant sur "Articles", tous les Articles présents dans la base de données seront affichés (après authentification)

Vous pouvez également avoir accés à la publciation d'un article sur le blog en cliquant sur la flèche à droite de votre nom, une fois connecté, ensuite cliquez sur posts. 

### CRUD Articles : 
Lorsque vous vous connectez un Id va s'afficher sur le menu déroulant sous votre nom, cet Id est très important pour votre expérience sur notre site. en effet si vous voulez creer un poste vous cliquez sur le bouton "Creat New Post", vous allez être dirigé sur la une page ou vous devez remplir un formulaire en commençant par votre Id ensuite les champs qui sont obligatoires, si tout va bien un message de confirmation vous sera affiché.

A droite de chaque article, on trouve deux bouton "VIEW" et "EDIT" permettant respectivement de lire ou de modifier l'article.
L'option "EDIT" n'est possible que pour les articles dont vous êtes l'auteur.

En cliquant sur "EDIT" à droite de l'article choisi, l'article sera affiché dans une zone de texte vous permettant d'apporter vos modifications.

Trois boutons à droite "SAVE CHANGES" , "DELETE" et "CANCEL" vous permetteront d'enregistrer vos modifications, de supprimer l'article ou d'annuler les modifications apportées.

### Commentaires : 
Une fois dans la page article, si vous souhaitez laisser des commentaires sur le poste vous avez qu'a vous dirigé en bas de l'article dans la section commentaires ou vous pouvez écrire librement tout ce que vous voulez.
La gestion des commentaires (Édit, Delete) est possible uniquement lorsque vos etes l'auteur de l'article en question.
Le service GRAVATAR est utilisé dasn ce travail, il s'agit d'un service Web qui permet aux utilisateurs de télécharger un avatar en ligne personnel et de l'associer à leur adresse e-mail.


### Le menu Contact : 

La rublique contact permet d'afficher le formulaire de contact.
Vous pouvez également cliquer sur la flèche à droite de votre nom, ensuite Contact us dans le menu affiché.
Si vous êtes donc enregistré  dans la base de données et que vous êtes connecté, vous pouvez nous contacter en remplissant le formulaire de contact affiché.

## Tinymce : 
TinyMCE de Moxiecode est un outil JavaScript / HTML WYSIWYG (What You See Is What You Get), en logiciel Open Source sous licence LGPL. Il a la capacité de convertir les champs textarea HTML ou d’autres éléments HTML en éditeur de texte. cet outil est integré dans le present travail.


## Construit avec

* [Laravel] (https://laravel.com/) - PHP framework
* [Bootstrap] (https://getbootstrap.com/) - framework CSS


## Auteurs

* **Ayoub BOUFEDJI**  [GithubAyoub](https://github.com/ayoubboufedji)
* **Fatima BELLACHE**  [GithubFatima](https://github.com/fatimaBellache)
* **Sihem BENAZOUAOU**  [GithubSihem](https://github.com/benazouaou)

## Licence

* Ce projet a été réalisé dans le cadre du projet Laravel -Master 2 DCISS Université de Grenoble Alpes-UGA-

