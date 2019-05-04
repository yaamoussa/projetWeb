<?php 
// On met en variables les informations de connexion 
$hote = 'localhost'; // Adresse du serveur 
$login = 'phpmyadminuser'; // Login 
$pass = 'Kuteddki7@'; // Mot de passe 
$base = 'boutique'; // Base de données à utiliser 
 
// On se connecte à la base de données 
mysql_connect($hote, $login, $pass); 
 echo "string";
// On selectionne la base de données souhaitée 
mysql_select_db($base); 
?>