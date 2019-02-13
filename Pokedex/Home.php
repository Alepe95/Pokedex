<?php session_start();
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 2019-02-12
 * Time: 13:46
 */


require('Liste_Pokemon.php');



$_SESSION['nbPokemon'] = $nbPokemon;
$_SESSION['nbPokemonBase'] = $nbPokemonBase;
$_SESSION['nbType1'] = $nbType1;
$_SESSION['nbType2'] = $nbType2;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
<body>

<div>
    <h1 style="text-align: center;">Statiques du Pokédex :</h1>
    <?php
    echo "Voici le nombre de Pokemons total : ".$_SESSION['nbPokemon']."<br>";
    echo "Voici le nombre total de Pokemons de Base : ".$_SESSION['nbPokemonBase']."<br>";
    echo "Voici le nombre total de Pokemons de Type 1 : ".$_SESSION['nbType1']."<br>";
    echo "Voici le nombre de total Pokemons de Type 2 : ".$_SESSION['nbType2'] = $nbType2."<br>";
    echo "il y a " .sizeof($typeEau). " Pokemon de type Eau "."<br>";
    echo "il y a " .sizeof($typeFeu). " Pokemon de type Feu "."<br>";
    echo "il y a " .sizeof($typePsy). " Pokemon de type Psy "."<br>";
    echo "il y a " .sizeof($typeElectrik). " Pokemon de type Electrik "."<br>";

    ?>

    <p>Voir les caractéristique de chacun des Pokémons <a href="Liste.php">Pokémons inscrits</a></p>
    <p>Ajoutez un <a href="FormAjout.php">Pokémon</a></p>
</div>


</body>
</html>




