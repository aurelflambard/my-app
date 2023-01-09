# my-app

<h3>Prérequi</h3>
<p>pour le bon fonctionnement de ce projet:</p>
<ul>
<li>PHP Version 8.2.0 <a href="https://www.php.net/manual/fr/install.php">Installer Php</a></li>
<li>MySQL <a href="https://doc.ubuntu-fr.org/mysql">Installer MYSQL</a></li>
<li>Symfony version 6.O minimum <a href="https://symfony.com/doc/current/setup.html">Installer SYMFONY</a> </li>
<li>Symfony CLI <a href="https://symfony.com/download"> Installer CLI version</a></li>
<li>Composer <a href="https://symfony.com/download">Installer Composer</a> </li>
<li>Npm <a href="https://docs.npmjs.com/getting-started">Installer Npm </a></li>
</ul>

<h3>Installation</h3>

<p> Après avoir cloné le projet avec: git clone  </p>
<div>https://github.com/aurelflambard/my-app.git</div>

<p>Exécutez la commande cd my-app pour vous rendre dans le dossier depuis le terminal.</p>

<p>Ensuite, dans l'ordre taper les commandes dans votre terminal :</p>

<ul>
  <li>1 composer install afin d'installer toutes les dépendances composer du projet.</li>
  <li>2 npm install afin d'installer toutes les dépendances npm du projet.</li>
  <li>3 Installer la base de donnée MySQL. Pour paramétrer la création de votre base de donnée, rdv dans le fichier .env du projet, et modifier la variable d'environnement selon vos paramètres : DATABASE_URL=mysql://User:Password@127.0.0.1:3306/nameDatabasse?serverVersion=5.7</li>
  <li> 4 Télécharger le fichier sql "app.sql" qui se situe dans le projet</li>
  <li> 5 Modifiez le fichier CallApiService.php qui se situe dans le dossier src/Service en rajoutant la clé Api google à la ligne 21. </li>
  <li> 6 pour se connecté le mot de passe est 123456 et le rôle Admin est le thibault@gmail.com . 
</ul>
