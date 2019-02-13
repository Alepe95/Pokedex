<?php session_start();
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 2019-02-13
 * Time: 00:02
 */
/**
 * Page d'accueil affichant le tableau de Pokémon
 */
require("Liste_Pokemon.php");
$_SESSION['pokedex'] = $pokedex;
$_SESSION['infoPokemon']= $infoPokemon;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>

<div>

    <?php
         echo $_SESSION['infoPokemon'];
    ?>

    <p>retour <a href="Home.php">Accueil</a></p>

</div>


</body>
</html>